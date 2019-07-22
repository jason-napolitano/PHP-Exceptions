<?php namespace Exceptions {

    /**
     * This exception is thrown if an error which can only be found on runtime
     * occurs.
     *
     * @package Exceptions
     */
    class RuntimeException extends \RangeException implements ExceptionInterface
    {
        // ...
    }
}
