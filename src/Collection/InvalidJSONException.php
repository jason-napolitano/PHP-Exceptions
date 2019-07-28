<?php namespace Exceptions\Collection {

    use Exceptions\JsonException;

    /**
     * InvalidJSONException class
     *
     * Thrown if provided JSON is not valid JSON
     *
     * @package Exceptions\Collection
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class InvalidJSONException extends JsonException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'The specified JSON is invalid';
    }
} 