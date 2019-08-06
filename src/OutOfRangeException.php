<?php

namespace Exceptions;

/**
 * OutOfRangeException class
 *
 * This exception is thrown when an illegal index was requested.
 *
 * @package Exceptions
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class OutOfRangeException extends \OutOfRangeException implements ExceptionInterface
{
    // ...
}
