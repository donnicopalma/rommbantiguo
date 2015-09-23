<?
// w2box: web 2.0 File Repository v1.0
// (c) 2005, Clément Beffa
// use it at your own risk

$storage_dir = "data"; // storage directory (chmod 777)
$max_filesize = 2 * pow(1024,2); // maximum filesize (x MiB)
$allowed_fileext = array("gif","jpg","jpeg","png","pdf","txt","nfo","doc","rtf","zip","rar","gz","exe");// allowed extensions

if (isset($_FILES['file']))
uploadfile($_FILES['file']);

function uploadfile($file) {
	global $storage_dir, $max_filesize, $allowed_fileext, $errormsg;

	if ($file['error']!=0) {
		switch ($file['error']) {
			case 1: $errormsg = "The uploaded file exceeds the upload_max_filesize directive in php.ini"; break;
			case 2: $errormsg = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form."; break;
			case 3: $errormsg = "The uploaded file was only partially uploaded."; break;
			case 4: $errormsg = "No file was uploaded."; break;
			case 6: $errormsg = "Missing a temporary folder."; break;
		}
		return;
	}
	
	$filesource=$file['tmp_name'];

	$filename=$file['name'];
	if (isset($_POST['filename']) && $_POST['filename']!="") $filename=$_POST['filename'];
	if (!in_array(strtolower(extname($filename)), $allowed_fileext)) $filename .= ".badext";


	$filesize=$file['size'];
	if ($filesize > $max_filesize) {
		$errormsg = "File size is greater than the file size limit (".getfilesize($max_filesize).").";
		return;
	}

	$filedest="$storage_dir/$filename";
	if (file_exists($filedest)) {
		$errormsg = "$filename exists already in the storage directory.";
		return;
	}

	if (!copy($filesource,$filedest)) {
		$errormsg = "Unable to copy the file into the storage directory.";
	}
}



if (isset($_GET['download']))
downloadfile($_GET['download']);

function downloadfile($file){
	global $storage_dir;
	$file = "$storage_dir/".basename($file);
	if (!is_file($file)) { return; }
	header("Content-Type: application/octet-stream");
	header("Content-Size: ".filesize($file));
	header("Content-Disposition: attachment; filename=\"".basename($file)."\"");
	header("Content-Length: ".filesize($file));
	header("Content-transfer-encoding: binary");
	@readfile($file);
	exit(0);
}


require("Sajax.php");

function deletefile($cell) {
	global $storage_dir;
	$cell=strip_tags($cell);
	$file=substr($cell,0,strlen($cell)-1);

	$file = "$storage_dir/".basename($file);

	$return = @unlink($file);
	if ($return) return "OK"; else return "Unknown error";
}

$sajax_request_type = "GET";
sajax_init();
sajax_export("deletefile");
sajax_handle_client_request();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
  <title>w2box | labs.beffa.org</title>
  <meta name="author" content="cb" />
  <meta name="description" content="w2box, demo" />
  <meta name="keywords" content="upload, download, box" />
  <meta name="content-language" content="en" />
  <link rel="stylesheet" type="text/css" href="w2box.css" />
  <script type="text/javascript" src="sorttable.js"></script>  
  <script type="text/javascript">
<!--//<![CDATA[
  <?php sajax_show_javascript(); ?>

  var row = null;

  function deletefile_cb(status) {
  	if (status=="OK")
  	row.parentNode.removeChild(row);
  	else {
  		row.className='off';
  		alert(status);
  	}
  	row = null;
  }

  function deletefile(r) {
  	if (row==null) {
  		r.className='delete';
  		var cell = r.cells[0].innerHTML;
  		row = r;
  		x_deletefile(cell, deletefile_cb);
  	}
  }

  function renameSync() {
  	var fn = document.getElementById("file").value;
  	if (fn == ""){
  		document.getElementById("filename").value = '';
  	} else {
  		var b = fn.match(/[\/|\\]([^\\\/]+)$/);
  		document.getElementById("filename").value = b[1];
  	}
  	filetypeCheck();
  }
  
  function filetypeCheck() {
  	var allowedtypes = '.<? echo join(".",$allowed_fileext); ?>.';

  	var fn = document.getElementById("filename").value;
  	if (fn == ""){
  		document.getElementById("allowed").className ='';
  		document.getElementById("upload").disabled = true;
  	} else {
  		var ext = fn.split(".");
  		if (ext.length==1)
  		ext = '.noext.';
  		else
  		ext = '.' + ext[ext.length-1].toLowerCase() + '.';

  		if (allowedtypes.indexOf(ext) == -1) {
  			document.getElementById("allowed").className ='red';
  			document.getElementById("upload").disabled = true;
  		} else {
  			document.getElementById("allowed").className ='';
  			document.getElementById("upload").disabled = false;
  		}
  	}

  }
//]]>-->
</script>
</head>

<body>
<div id="page">
<div id="header">
  <h1>w2box - File Manager</h1>
</div>

<div id="content">
 	<div id="errormsg">
 	 <p class="red"><? if (isset($errormsg)) {echo $errormsg;} ?></p>
 	</div>
 	<div id="uploadform">
		<form method="post" enctype="multipart/form-data" action="">
		<p><label for="file">file :</label><input type="file" id="file" name="file" size="50" onchange="renameSync();" /><input id="upload" type="submit" value="Upload" class="button" disabled="disabled" /></p>
		<p><label for="filename">rename to :</label><input type="text" id="filename" name="filename" onkeyup="filetypeCheck();" size="46" /></p>
		<p class="small"><span id="allowed">file types allowed: <? echo join(",",$allowed_fileext); ?></span><br />file size limit: <? echo getfilesize($max_filesize); ?></p>
		</form>
 	</div>
	<div id="filelisting">
		<? listfiles($storage_dir); ?>
	</div>
</div>

<div id="footer">
  <p>Copyright &copy; 2005 <a href="http://labs.beffa.org">labs.beffa.org</a> - This site uses valid <a href="http://validator.w3.org/check/referer">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>.</p>
</div>

</div>
</body>
</html>
<?php

function listfiles($dir) {
?>
<table id="t1" class="sortable">
  <tr>
    <th id="th1" class="lefted">File Name</th>
    <th id="th2">Type</th>
    <th id="th3">Size</th>
    <th id="th4" class="unsortable">Delete</th>
  </tr>
<?php
if ($handle = opendir($dir)) {
	while (false !== ($file = readdir($handle))) {
		if ($file != "." && $file != ".."  && $file != "index.html") {
			$size=filesize($dir."/".$file);
			$ext=strtolower(extname($file));

			print("<tr class=\"off\" onmouseover=\"if (this.className!='delete') {this.className='on'};\" onmouseout=\"if (this.className!='delete') {this.className='off'};\">");
			print("<td class=\"lefted\"><a href=\"$dir/$file\">$file</a>");
			print(" <a href=\"?download=$file\"><img src=\"images/download_arrow.gif\" alt=\"(download)\" title=\"Download Now!\" /></a></td>");
			print("<td>$ext</td>");
			//print("<td><a href=\"http://filext.com/detaillist.php?extdetail=$ext\">$ext</a></td>");
			print("<td>".getfilesize($size)."</td>");
			print("<td><a title=\"delete\" onclick=\"deletefile(this.parentNode.parentNode); return false;\" href=\"\"><img src=\"images/delete.gif\" alt=\"delete\" title=\"Delete\" /></a></td>");
			print("</tr>\n");
		}
	}
	closedir($handle);
}
?>
</table>
<?php
}

function extname($file) {
	$file = explode(".",basename($file));
	return $file[count($file)-1];
}

function getfilesize($size) {
	if ($size < 2) return "$size byte";
	$units = array(' bytes', ' KiB', ' MiB', ' GiB', ' TiB');
	for ($i = 0; $size > 1024; $i++) { $size /= 1024; }
	return round($size, 2).$units[$i];
}
?>