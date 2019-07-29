<?php namespace Exceptions {

    /**
     * BadFunctionCallException class
     *
     * This exception is thrown if a callback refers to
     * an undefined function or if some arguments are missing.
     *
     * @package Exceptions
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class BadFunctionCallException extends \BadFunctionCallException implements ExceptionInterface
    {
        // ...
    }
}
