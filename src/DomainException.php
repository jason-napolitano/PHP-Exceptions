<?php namespace Exceptions {

    /**
     * This exception is thrown if a value
     * does not adhere to a defined valid data domain.
     *
     * @package Exceptions
     */
    class DomainException extends \DomainException implements ExceptionInterface
    {
        // ...
    }
}
