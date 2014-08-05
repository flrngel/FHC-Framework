#!/bin/sh

DATETIME=$(date +"%Y%m%d%H%M")

if [ ! -d app ]; then
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
	echo "{}" > .env
fi

if [ ! -f .htaccess ]; then
	cp .htaccess.original .htaccess
else
	cp .htaccess .htaccess.$DATETIME
	cp -rf .htaccess.original .htaccess
fi
