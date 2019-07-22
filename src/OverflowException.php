<?php namespace Exceptions {

    /**
     * This exception is thrown when adding an element to a full container.
     *
     * @package Exceptions
     */
    class OverflowException extends \LogicException implements ExceptionInterface
    {
        // ...
    }
}
