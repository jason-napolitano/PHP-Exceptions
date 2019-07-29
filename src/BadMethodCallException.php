<?php namespace Exceptions {

    /**
     * BadMethodCallException class
     *
     * This exception is thrown if a callback refers to
     * an undefined method or if some arguments are missing.
     *
     * @package Exceptions
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class BadMethodCallException extends \BadMethodCallException implements ExceptionInterface
    {
        // ...
    }
}
