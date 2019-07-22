<?php namespace Exceptions {

    /**
     * This exception is thrown if a callback refers to
     * an undefined function or if some arguments are missing.
     *
     * @package Exceptions
     */
    class BadFunctionCallException extends \BadFunctionCallException implements ExceptionInterface
    {
        // ...
    }
}
