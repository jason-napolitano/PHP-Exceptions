<?php namespace Exceptions\Collection {

    /**
     * ArrayKeyAlreadyExistsException class
     *
     * Indicates that a specified array key already exists
     *
     * @package Exceptions\Collection
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class ArrayKeyAlreadyExistsException extends CollectionException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'The specified array key already exists';
    }
}
