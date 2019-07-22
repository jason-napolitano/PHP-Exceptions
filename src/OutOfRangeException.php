<?php namespace Exceptions {

    /**
     * This exception is thrown when an illegal index was requested.
     *
     * @package Exceptions
     */
    class OutOfRangeException extends \OutOfRangeException implements ExceptionInterface
    {
        // ...
    }
}
