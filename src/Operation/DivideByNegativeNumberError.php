<?php namespace Exceptions\Operation {

    /**
     * DivideByNegativeNumberError class
     *
     * This exception is thrown to indicate that an attempt
     * is made to divide a number by a negative number
     *
     * @package Exceptions\Operation
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class DivideByNegativeNumberError extends \ArithmeticError
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'Cannot divide by a negative number';
    }
}
