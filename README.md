# PHP Exceptions

[![Latest Stable Version](https://poser.pugx.org/jason-napolitano/php-exceptions/version)](https://packagist.org/packages/jason-napolitano/php-exceptions)
[![Total Downloads](https://poser.pugx.org/jason-napolitano/php-exceptions/downloads)](https://packagist.org/packages/jason-napolitano/php-exceptions)
[![License](https://poser.pugx.org/jason-napolitano/php-exceptions/license)](https://packagist.org/packages/jason-napolitano/php-exceptions)
[![Build Status](https://travis-ci.com/jason-napolitano/PHP-Exceptions.svg?branch=master)](https://travis-ci.com/jason-napolitano/PHP-Exceptions)
[![Coverage Status](https://coveralls.io/repos/github/jason-napolitano/PHP-Exceptions/badge.svg?branch=master)](https://coveralls.io/github/jason-napolitano/PHP-Exceptions?branch=development)

## Synopsis
`PHP Exceptions` is an attempt to encapsulate a larger variation of exception classes that do not exist 
within PHP's SPL, and separate them in an orchestrated fashion by containing them within their own 
`\Exceptions` namespace.

As said by [Arnout Boks](https://www.moxio.com/blog/34/best-practices-for-php-exception-handling):

"_Proper exception handling takes quite some effort, but will eventually result in a much more stable 
application._ **A sensible exception handling strategy makes it clear what exceptions should be expected 
(and thus handled!) at a given point in the code.** _Moreover it will maintain the encapsulation and 
abstraction you carefully applied to your object-oriented design. Last but not least, it should make 
debugging a breeze._"

Proper Exception handling is a **must** in PHP applications, and application development in general. 
This library hopes to encourage developers to properly handle exceptions, by giving them new and more 
tailored exception classes to work with. This package adds a new variety and flavor when
building applications. For example, there are now exceptions for:

The File System
```php
throw new \Exceptions\FileSystem\FileNotFoundException();
```
```php
throw new \Exceptions\FileSystem\DirectoryAlreadyExistsException();
```

Arrays, objects & JSON
```php
throw new \Exceptions\Collection\ArrayNotExistsException();
```
```php
throw new \Exceptions\Collection\ObjectAlreadyExistsException();
```
```php
throw new \Exceptions\Collection\InvalidJSONException();
```

Arithmetic
```php
throw new \Exceptions\Operation\DivideByNegativeNumberException();
```

Revised PHP SPL's
```php
throw new \Exceptions\JsonException();
```
```php
throw new \Exceptions\RuntimeException();
```
```php
throw new \Exceptions\DomainException();
```

And quite a few more with new ones being implemented all the time. All tested with PHPUnit 8+. And take 
note that these may be treated just like any standard PHP exceptions since they in fact `extend` these same
standard PHP exceptions. Meaning that an optional message, code, etc may be passed into the `__construct()`.
Framework versions will be available shortly after the official v.1.0 release.

## Table of contents
 - [Synopsis](https://github.com/jason-napolitano/PHP-Exceptions/blob/master/README.md#synopsis)
 - [Contributing](https://github.com/jason-napolitano/PHP-Exceptions/blob/master/CONTRIBUTING.md)
 - [Useful Links](https://github.com/jason-napolitano/PHP-Exceptions/blob/master/README.md#useful-links)
 - [Requirements](https://github.com/jason-napolitano/PHP-Exceptions/blob/master/README.md#requirements)
 - [Installation](https://github.com/jason-napolitano/PHP-Exceptions/blob/master/README.md#installation)
 - [License](https://github.com/jason-napolitano/PHP-Exceptions/blob/master/README.md#license)
 
### Class Blueprint
Take a look at the following class blueprint ([PHP.net](https://www.php.net/manual/en/class.exception.php)):

```php
namespace Exceptions\NamespaceName;
    
class ExampleException extends \RuntimeException
{
    /* Properties */
    protected string $message;
    protected int $code;
    protected string $file;
    protected int $line;

    /* Methods */
    public __construct ([ string $message = "" [, int $code = 0 [, Throwable $previous = NULL ]]] )
    final public getMessage ( void ) : string
    final public getPrevious ( void ) : Throwable
    final public getCode ( void ) : mixed
    final public getFile ( void ) : string
    final public getLine ( void ) : int
    final public getTrace ( void ) : array
    final public getTraceAsString ( void ) : string
    public __toString ( void ) : string
    final private __clone ( void ) : void
}

```

## Useful Links
 - [Package Tests](https://github.com/jason-napolitano/PHP-Exceptions/tree/master/tests)
 - PHP Links:
   - [PHP Exceptions](https://www.php.net/manual/en/language.exceptions.php)
   - [PHP SPL](https://www.php.net/manual/en/spl.exceptions.php)
 - PHP FIG:
   - [PHP-FIG PSR4](https://www.php-fig.org/psr/psr-4/)
 - Composer:
   - [Get Composer](https://getcomposer.org/)
   
 ## Requirements
  - PHP >= 7.4 and [`ext-json`](https://www.php.net/manual/en/book.json.php)
    - Due to the use of [`\JsonException`](https://www.php.net/manual/en/class.jsonexception.php) and the use of typed properties [[link]](https://www.php.net/manual/en/migration74.new-features.php).
  - Composer
 
 ## Installation
 ```php
 composer require jason-napolitano/php-exceptions
 ```
 
 ## Basic Usage
 ```php
// Require composer's autoloader
require_once = '/path/to/vendor/autoload.php';
 
try {
	$person = [
		'name' => 'My Name',
		'age'  => 21,
		'city' => null
	];
	if ( array_key_exists('gender', $person) ) {
	    return $person['gender'];
	    
	} else {
		throw new \Exceptions\Collection\ArrayKeyNotExistsException();
	}
} catch (Exception $e) {
	echo 'Caught Exception: ',  $e->getMessage(), "\n";
}
```

### OOP Usage:
 * _Don't forget your composer `autoload.php` file_
```php
class ClassName
{
    use \Exceptions\Helpers\ExceptionHelpers;

    public function methodName()
    {
        // Using a namespace
        self::throwNew('FileNotFoundException', 'FileSystem');

        // Using default namespace
        self::throwNew('RangeException');

        // Using the default \Exceptions\RuntimeException
        self::throwNew();
    }
}
```

 ## License
 ### MIT License
 
 #### Copyright (c) 2019 Jason Napolitano
 
 Permission is hereby granted, free of charge, to any person obtaining a copy
 of this software and associated documentation files (the "Software"), to deal
 in the Software without restriction, including without limitation the rights
 to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:
 
 The above copyright notice and this permission notice shall be included in all
 copies or substantial portions of the Software.
 
 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 SOFTWARE.
