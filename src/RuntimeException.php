<?php

namespace Exceptions;

/**
 * RuntimeException class
 *
 * This exception is thrown if an error which can only be found on runtime
 * occurs.
 *
 * @package Exceptions
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class RuntimeException extends \RuntimeException implements ExceptionInterface
{
    // ...
}
