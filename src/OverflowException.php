<?php namespace Exceptions {

    /**
     * OverflowException class
     *
     * This exception is thrown when adding an element to a full container.
     *
     * @package Exceptions
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class OverflowException extends \LogicException implements ExceptionInterface
    {
        // ...
    }
}
