<?php namespace Exceptions\Collection {

    /**
     * ArrayNotExistsException class
     *
     * Indicates that a specified array does not exist
     *
     * @package Exceptions\Collection
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class ArrayNotExistsException extends CollectionException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'The specified array does not exist';
    }
}
