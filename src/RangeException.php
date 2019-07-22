<?php namespace Exceptions {

    /**
     * RangeException class
     *
     * This exception is thrown to indicate range errors during program execution.
     * Normally this means there was an arithmetic error other than under/overflow.
     * This is the runtime version of DomainException.
     *
     * @package Exceptions
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class RangeException extends \RangeException implements ExceptionInterface
    {
        // ...
    }
}
