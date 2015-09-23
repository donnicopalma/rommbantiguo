*******************************************************
UPLOADSCRIPT v1.02 (Free)
Copyright (c) 2006 Hyperweb. All rights reserved.
Homepage: http://www.uploadscript.net

Uploadscript is a file hosting script that will allow
you to run your own file hosting website. It is modeled 
after the many popular free file hosts like Rapidshare 
and Megaupload. Setup is super-easy and no programming
knowledge is required.

Uploadscript does not require a mysql database!

How it works: When a user uploads a file, it is MD5-
hashed and stored in encrypted form in a folder
called "storage."  A data file for each download is
also created and stored in a folder called "storagedata."

What's new in version 1.02:
- minor bug fixes

What's new in version 1.01:
- minor bug fixes

*******************************************************

PLEASE READ THIS ENTIRE PAGE AS IT CONTAINS IMPORTANT
INFORMATION REGARDING MAXIMUM FILESIZE SETTINGS (NEAR
THE BOTTOM) OF THIS FILE.

How to install:

 + Edit the variables in config.php with your information
 + Upload all files and folders to your desired directory
 + CHMOD all of the .txt files to 777
 + CHMOD the 'storage' folder to 777
 + CHMOD the 'storagedata' folder to 777
 + CHMOD the 'urltemp' folder to 777

 + Installation complete! Enjoy your new file host!
   	- Site: point your browser to index.php in your install 
	  directory
	- Admin Control Panel: point your browser to admin.php
	  in your install directory.
	- The first time you access your admin panel you will
	  be asked to enter and set a password.  This password
	  will is encrypted and stored in a file called 
	  password.txt.  If you ever forget your password,
	  you can simply delete this file.

How to customize:

 + To edit the page layouts, modify: 
	- header.php
	- pages/upload.php
	- pages/faq.php
	- pages/tos.php
	- pages/topten.php

 + Edit images in the /images folder

 + To insert your own advertisements, edit 
   the file ads.html

 + Do NOT edit the file footer.php or the script will
   cease to function!

Features: 

 + You control the following settings in config.php:
	- maximum file size
	- time limit between downloads
	- file expiry time
	- download countdown timer
	- enable/disable files list
	- # files displayed per page in files list
	- enable/disable top10 list
	- enable/disable emailing option
	- allowable file types (optional)

 + In admin panel you have the following functions:
	- view bandwidth usage (estimated)
	- view and/or delete files reported as illegal
	- delete files (any file)
	- delete expired files
	- ban any file or IP address
	- secure password change feature
	- file checking system to ensure for every file
	  in the "storage" folder there is a matching
	  data file in the "storagedata" folder.

 + Users can:
	- upload files by selecting it from their
	  hard drive or directly from a URL
	- send the file link to any specified email address (if enabled)
	- view list of all files (if enabled)
	- view top 10 list (if enabled)
	- report any file as illegal

Modifications:

 + The following mods will be available:
	- skins: upload a skin and change the look of your upload site
	- members area: this will allow a free as well as
	  a paid area for your users (members will have more
	  priveleges)
	- multiple file upload - allows users to upload more than one file at a time
	- image hosting mod: this will allow you to run
	  an image hosting site modelled after popular sites
	  like imageshack

Notes:

 + On most web hosts the maximum upload filesize (set
   in a file called php.ini) is set to 2MB.  If your
   maximum filesize is greater than this limit, your
   users will receive the following error message:

   	- "You didn't pick a file to upload."

   There are 3 methods to change your host's maximum
   allowed upload filesize:

	1. Edit the following 2 variable in your php.ini file:

		- UPLOAD_MAX_SIZE
		- POST_MAX_SIZE

	   You will need root server access to edit your 
	   php.ini file, or you can ask your host to do 
	   it for you.

	2. You can obtain a copy of your php.ini file from
	   your host, and edit the 2 values described above.
	   Then simply place your copy of php.ini in your
	   local directory (where you installed Uploadscript).

	3. Add the following 2 lines in your .htaccess file:

	   	php_value upload_max_filesize 50M
		php_value post_max_size 50M

		- the examples above are set to 50MB
		- this is the easiest and most preferred method

 + For more documentation and mods/addons, please visit our 
   homepage at http://www.uploadscript.net