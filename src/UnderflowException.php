<?php namespace Exceptions {

    /**
     * This exception is thrown when performing
     * an invalid operation on an empty container, such as removing an element.
     *
     * @package Exceptions
     */
    class UnderflowException extends \UnderflowException implements ExceptionInterface
    {
        // ...
    }
}
