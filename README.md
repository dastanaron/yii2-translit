Transliterator
==============
Transliteration symbols rus-en and en-rus

[![Latest Stable Version](https://poser.pugx.org/dastanaron/yii2-translit/version)](https://packagist.org/packages/dastanaron/yii2-migrate-updater)
[![Total Downloads](https://poser.pugx.org/dastanaron/yii2-translit/downloads)](https://packagist.org/packages/dastanaron/yii2-migrate-updater)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require dastanaron/yii2-translit
```

or add

```
"dastanaron/yii2-translit": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Для использования можно задать методу translit направление транслитерации:
ru-en либо en-ru, это не обязательный параметр, можно не указывать,
в таком случае он сам определит направление в зависимости от языка и переведет его в другой.

Функция так же по умолчанию заменяет пробелы на "_", если это не нужно, вторым параметром, необходимо передать false

```php
use dastanaron\translit\Translit;

$str = 'Привет МИР';

$translit = new Translit();

echo $translit->translit($str, true, 'ru-en');

```
