<?php

$storage_dir = 'nicolas/'; // storage directory (chmod 777)
$max_filesize = 2 * pow(1024,2); // maximum filesize (x MiB)
$allowed_fileext = array("gif","jpg","jpeg","png");// allowed extensions

if (isset($HTTP_POST_FILES['file']))
uploadfile($HTTP_POST_FILES['file']);

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
	if (isset($_POST['filename2']) && $_POST['filename2']!="") $filename=$_POST['filename2'];
	if (!in_array(strtolower(extname($filename)), $allowed_fileext)) $filename .= ".badext";


	$filesize=$file['size'];
	if ($filesize > $max_filesize) {
		$errormsg = "File size is greater than the file size limit (".getfilesize($max_filesize).").";
		return;
	}

	$filedest="$storage_dir/$filename";
echo '<script language="JavaScript">window.location.href = "proporcional.php";</script>';
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

	$file = "$storage_dir/new.png";

	$return = @unlink($file);
	if ($return) return "OK"; else return "Unknown error";
}

$sajax_request_type = "GET";
sajax_init();
sajax_export("deletefile");
sajax_handle_client_request();
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title></title>
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

  function rename() {
  	var fn = document.getElementById("filename").value;
  	if (fn == ""){
  		document.getElementById("filename2").value = '';
  	} else {
  		var b = fn.match(/[\/|\\]([^\\\/]+)$/);
  		document.getElementById("filename2").value = "new.png";
  	}
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
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
-->
</style>
<link href="estilo.css" rel="stylesheet" type="text/css">
<table width="249" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="249" height="97" valign="top" bgcolor="#EB7A2E"><div id="page">
      <div id="content">
        <div class="entrada" id="uploadform">
          <form method="post" enctype="multipart/form-data" action="">
            <input type="file" id="file" name="file" onChange="renameSync();" />
              <input id="upload" type="submit" value="Subir Foto" class="button" disabled="disabled" />
              <br><input type="hidden" id="filename" name="filename" onKeyUp="filetypeCheck();"/>
              <input name="filename2" type="hidden" id="filename2" onKeyUp="rename();" value="new.png"/>
              <span id="allowed">Archivos permitidos: <? echo join(",",$allowed_fileext); ?></span><br />
              Tama&ntilde;o m&aacute;ximo:</p>
            </form>
          </div>
          </div>
                      
<div id="footer"></div>
                      
  </div></td>
  </tr>
</table>
<?php
function extname($file) {
	$file = explode(".",basename($file));
	return $file[count($file)-1];
}

function getfilesize($size) {
	if ($size < 2) return "$size byte";
	$units = array(' bytes', ' KiB', ' MiB', ' GiB', ' TiB');
	for ($i = 0; $size > 5225; $i++) { $size /= 5225; }
	return round($size, 2).$units[$i];
}

?>
