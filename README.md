# FHC-Framework

FHC(FLRngel Hates Coding) PHP Framework

The framework using MVC Model, rails folder structure(about 80%), and ultra easy to use.

## Requirements

Apache2 (mod_rewrite)

PHP ( >= 5.3 )

## Installation

	git clone https://github.com/flrngel/FHC-Framework <project name>
	cd <project name>
	./install.sh

or use [FHC-Gaia](https://github.com/flrngel/FHC-Gaia)

	gaia new <project name>

## Understanding how it works

## Architecture

- `/index.php` : FHC-Framework begins with index.php on every page.
- `/lib/include/*.php` : index.php load every php files in here.(core.php, functions, etc.)
- `/lib/classes/*.php` : class files has to be in here.
- `/lib/modules/` : not accessable directory from web request. for crons, modules, plugin build, etc.
- `/app/controllers/*.php` : controller files
- `/app/views/*.html` : view file(default matches with same <filename> controller)
- `/app/assets/` : assets for website

### MVC

- Model(class in FHC)
- Views(app/views/<filename>.html
- Controllers(app/controllers/<filename>.html

### workflow

+ User requests such pattern, `GET /what/to/do`
+ index.php parses request URI
+ executes controller file `app/controllers/what/to/do.php`
+ toss `$res` as global varable to view file
+ renders view file `app/views/what/to/do.html` and get contents toss as $contents variable
+ renders layout file `app/views/layout/[default].html`
+ response rendered page

## Usage

### Routings

just create `app/controllers/<dir>/<filename>.php` and access as `GET(POST) /<dir>/<filename>.php`

### $res variable

$res variable is defined as array, and is global variable between `controllers`, `views`, `layout`

### Classes

you can use anywhere `lib/classes/<NAMESPACE>/<CLASSNAME>.php` as `new <CLASSNAME>` from controller files

### Update

use [FHC-Gaia](https://github.com/flrngel/FHC-Gaia)

	gaia update <project name>

## Useful libraries

- [sexylib](http://github.com/flrngel/sexylib)

## LICENSE

MIT
