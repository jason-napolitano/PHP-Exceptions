<?php namespace Exceptions\Collection {

    /**
     * JSONDecodeException class
     *
     * Thrown if the specified JSON could not be decoded
     *
     * @package Exceptions\Collection
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.3
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class JSONDecodeException extends InvalidJSONException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'The specified JSON could not be decoded';
    }
} 