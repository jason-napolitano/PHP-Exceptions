# Practical Exceptions
 
## Synopsis
Practical Exceptions is an attempt to contain all different kinds of generic exceptions 
that are not within PHP's SPL and separate them in an orchestrated fashion. This repo takes
inspiration from [`crazycodr/standard-exceptions`](https://github.com/crazycodr/standard-exceptions). 
Framework versions will be available shortly after the official v.1.0 release.

As said by [Arnout Boks](https://www.moxio.com/blog/34/best-practices-for-php-exception-handling):
"Proper exception handling takes quite some effort, but will eventually result in a much more stable 
application. A sensible exception handling strategy makes it clear what exceptions should be expected 
(and thus handled!) at a given point in the code. Moreover it will maintain the encapsulation and 
abstraction you carefully applied to your object-oriented design. Last but not least, it should make 
debugging a breeze."

Proper Exception handling is a must in PHP applications, and application development in general. 
This library hopes to encourage developers to properly handle exceptions, by giving them a variety of
new, more tailored exception classes to work with.

## Table of contents
 - [Synopsis](https://github.com/jason-napolitano/PHP-Exceptions/blob/master/README.md#synopsis)
 - [Useful Links](https://github.com/jason-napolitano/PHP-Exceptions/blob/master/README.md#useful-links)
 - [Requirements](https://github.com/jason-napolitano/PHP-Exceptions/blob/master/README.md#requirements)
 - [Installation](https://github.com/jason-napolitano/PHP-Exceptions/blob/master/README.md#installation)
 - [TODO](https://github.com/jason-napolitano/PHP-Exceptions/blob/master/README.md#todo)
 - [License](https://github.com/jason-napolitano/PHP-Exceptions/blob/master/README.md#license)
 
## Useful Links
 - [API Documentation](https://github.com/jason-napolitano/PHP-Exceptions/tree/master/docs)
 - [Package Tests](https://github.com/jason-napolitano/PHP-Exceptions/tree/master/tests)
 - PHP Links:
   - [PHP Exceptions](https://www.php.net/manual/en/language.exceptions.php)
   - [PHP SPL](https://www.php.net/manual/en/spl.exceptions.php)
 - PHP FIG:
   - [PHP-FIG PSR4](https://www.php-fig.org/psr/psr-4/)
 - Composer:
   - [Get Composer](https://getcomposer.org/)
   
 ## Requirements
  - PHP >= 7.2
  - Composer
 
 ## Installation
 By requiring the file via CLI/Terminal
 
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
	if (!array_key_exists('gender', $person)) {
		throw new \Exceptions\Collection\ArrayKeyNotExistsException();
	}
} catch (Exception $e) {
	echo 'Caught Exception: ',  $e->getMessage(), "\n";
}
```

## TODO
Hopefully I can dish these out and release v 1.0.0:

  - Finish Unit Testing
    - [x] Finish current `ExceptionTest` tests
    - [x] Finish current `Collection\\` tests
    - [x] Finish current `Operation\\` tests
    - [ ] Finish current `FileSystem\\` tests
    
  - Finish the following exceptions
    - [ ] `\Exceptions\HTTP`
    - [ ] `\Exceptions\Intl`
    - [ ] Add tests for the above
    
  - Create new exception namespaces
    - [ ] `\Exceptions\Authentication\*`
    - [ ] `\Exceptions\Authorization\*`
    - [ ] `\Exceptions\Encryption\*`
    - [ ] Add tests for the above
    
  - Create helper files (Traits)
    - [ ] Create `Exceptions\Authentication\HelperTrait`
    - [ ] Create `Exceptions\Authorization\HelperTrait`
    - [ ] Create `Exceptions\FileSystem\HelperTrait`
    - [ ] Create `Exceptions\Collection\HelperTrait`
    - [ ] Create `Exceptions\Encryption\HelperTrait`
    - [ ] Create `Exceptions\Operation\HelperTrait`
    - [ ] Create `Exceptions\HTTP\HelperTrait`
    - [ ] Create `Exceptions\Intl\HelperTrait`
    - [ ] Create `Exceptions\HelperTrait`

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
