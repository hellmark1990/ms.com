# ms.com
<Directory "/var/www/ms.com/basic/web">
	    # use mod_rewrite for pretty URL support
	    RewriteEngine on
	    # If a directory or a file exists, use the request directly
	    RewriteCond %{REQUEST_FILENAME} !-f
	    RewriteCond %{REQUEST_FILENAME} !-d
	    # Otherwise forward the request to index.php
	    RewriteRule . index.php

	    # ...other settings...
	</Directory>