# Practical Exceptions
 
## Synopsis
Practical Exceptions is an attempt to contain all different kinds of generic exceptions 
that are not within PHP's SPL and separate them in an orchestrated fashion. This repo takes
inspiration from [`crazycodr/standard-exceptions`](https://github.com/crazycodr/standard-exceptions). 
Framework versions will be available shortly after the official v.1.0 release.

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
  - Finish Unit Testing
    - [x] Finish current `ExceptionTest` tests
    - [x] Finish current `Operation\\` tests
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
