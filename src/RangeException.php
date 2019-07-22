<?php namespace Exceptions {

    /**
     * This exception is thrown to indicate range errors during program execution.
     * Normally this means there was an arithmetic error other than under/overflow.
     * This is the runtime version of DomainException.
     *
     * @package Exceptions
     */
    class RangeException extends \RangeException implements ExceptionInterface
    {
        // ...
    }
}
