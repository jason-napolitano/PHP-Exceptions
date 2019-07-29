<?php namespace Exceptions {

    /**
     * DomainException class
     *
     * This exception is thrown if a value
     * does not adhere to a defined valid data domain.
     *
     * @package Exceptions
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class DomainException extends \DomainException implements ExceptionInterface
    {
        // ...
    }
}
