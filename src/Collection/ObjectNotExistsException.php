<?php namespace Exceptions\Collection {

    /**
     * ObjectNotExistsException class
     *
     * Indicates that a specified object does not exist
     *
     * @package Exceptions\Collection
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class ObjectNotExistsException extends CollectionException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'The specified object does not exist';
    }
}
