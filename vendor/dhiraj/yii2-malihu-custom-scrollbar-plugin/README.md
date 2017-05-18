Yii 2 [jquery.mCustomScrollbar](https://github.com/malihu/malihu-custom-scrollbar-plugin) Asset Bundle
===================================================================================

This extension provides an assets bundle with [jquery.mCustomScrollbar js and css](https://github.com/malihu/malihu-custom-scrollbar-plugin)
for [Yii framework 2.0](http://www.yiiframework.com/) applications.

For license information check the [LICENSE](https://github.com/dhiraj/yii2-malihu-custom-scrollbar-plugin/blob/master/LICENSE)-file.


Support
-------
* [GutHub issues](https://github.com/dhiraj/yii2-malihu-custom-scrollbar-plugin/issues)

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run

```bash
composer require "dhiraj/yii2-malihu-custom-scrollbar-plugin:~1.0"
```

or add

```
"dhiraj/yii2-malihu-custom-scrollbar-plugin": "~1.0",
```

to the `require` section of your `composer.json` file.

Usage
-----

In view

```php
traversient\yii\customscrollbar\AssetBundle::register($this);

```

or as dependency in your main application asset bundle

```php
class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'\traversient\yii\customscrollbar\AssetBundle'
	];
}

```

and both the jquery.pipelining.js and css will be added to your page load.