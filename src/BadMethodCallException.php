<?php namespace Exceptions {

    /**
     * This exception is thrown if a callback refers to
     * an undefined method or if some arguments are missing.
     *
     * @package Exceptions
     */
    class BadMethodCallException extends \BadMethodCallException implements ExceptionInterface
    {
        // ...
    }
}
