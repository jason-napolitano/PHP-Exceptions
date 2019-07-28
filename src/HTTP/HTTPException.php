<?php namespace Exceptions\HTTP {

    use Exceptions\DomainException;

    /**
     * HTTPException class
     *
     * A base class for more generic HTTP request/response related exceptions
     * to extend
     *
     * @package Exceptions\HTTP
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class HTTPException extends DomainException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'An HTTP error was encountered';
    }
}
