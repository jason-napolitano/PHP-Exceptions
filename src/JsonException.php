<?php namespace Exceptions {

    /**
     * JsonException class
     *
     *Thrown if JSON_THROW_ON_ERROR option is set for json_encode() or json_decode() code
     * contains the error type, for possible values <@see \json_last_error()>.
     *
     * @package Exceptions
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class JsonException extends \JsonException implements ExceptionInterface
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'A JSON error was encountered';
    }
} 