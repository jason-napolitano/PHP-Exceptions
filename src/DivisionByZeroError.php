<?php namespace Exceptions {

    /**
     * DivisionByZeroError class
     *
     * This exception is thrown to indicate that an attempt
     * is made to divide a number by zero
     *
     * @package Exceptions
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class DivisionByZeroError extends \DivisionByZeroError implements ExceptionInterface
    {
        // ...
    }
}
