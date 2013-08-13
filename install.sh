#!/bin/sh
mkdir app
echo "Deny from all" > app/.htaccess
mkdir app/assets
echo "Allow from all" > app/assets/.htaccess
mkdir app/assets/images
mkdir app/assets/scripts
mkdir app/assets/styles
mkdir app/controllers
touch app/controllers/index.php
mkdir app/views
echo "Hello World" > app/views/index.html
mkdir app/views/layouts
echo \<\?\=\$contents\?\> > app/views/layouts/default.html
cp .htaccess.original .htaccess
mv lib/classes/disabled.class.DBMysql.php lib/classes/class.DBMysql.php
git update-index --assume-unchanged lib/classes/disabled.class.DBMysql.php
