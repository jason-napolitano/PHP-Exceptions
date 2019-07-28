<?php namespace Exceptions\Collection {

    class InvalidJSONException extends \Exceptions\JsonException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'A collection error was encountered';
    }
} 