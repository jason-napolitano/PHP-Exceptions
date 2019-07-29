<?php namespace Exceptions\Operation {

    use Exceptions\ArithmeticError;

    /**
     * OperationException class
     *
     * A base class for more generic operation/arithmetic related exceptions
     * to extend
     *
     * @package Exceptions\Operation
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class OperationException extends ArithmeticError
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'An error in this arithmetic operation was encountered';
    }
}
