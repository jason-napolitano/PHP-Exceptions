<?php namespace Exceptions {

    /**
     * UnderflowException class
     *
     * This exception is thrown when performing
     * an invalid operation on an empty container, such as removing an element.
     *
     * @package Exceptions
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class UnderflowException extends \UnderflowException implements ExceptionInterface
    {
        // ...
    }
}
