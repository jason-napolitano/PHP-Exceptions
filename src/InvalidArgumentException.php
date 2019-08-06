<?php

namespace Exceptions;

/**
 * InvalidArgumentException class
 *
 * This exception is thrown if an argument is not of the expected type.
 *
 * @package Exceptions
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class InvalidArgumentException extends \InvalidArgumentException implements ExceptionInterface
{
    // ...
}
