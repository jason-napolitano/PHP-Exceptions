<?php namespace Exceptions {

    /**
     * TypeError class
     *
     * There are three scenarios where a TypeError may be thrown.
     * The first is where the argument type being passed to a function does not
     * match its corresponding declared parameter type.
     * The second is where a value being returned from a function does not
     * match the declared function return type.
     * The third is where an invalid number of arguments are passed to a built-in
     * PHP function (strict mode only).
     *
     * @package Exceptions
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.3
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class TypeError extends \TypeError implements ExceptionInterface
    {
        // ...
    }
}
