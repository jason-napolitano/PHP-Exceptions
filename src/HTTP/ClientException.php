<?php

namespace Exceptions\HTTP;

use Exceptions\DomainException;

/**
 * HTTPException class
 *
 * A base class for more generic HTTP client 4xx error exceptions
 * to extend
 *
 * @package Exceptions\HTTP
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class ClientException extends DomainException
{
    /**
     * The exception message
     *
     * @var string $message The exception message
     */
    protected $message = 'An HTTP error was encountered';

    /**
     * The HTTP status code
     *
     * @var int $statusCode The HTTP status code
     */
    protected $statusCode = 400;

    /**
     * Constructor for ClientException
     *
     * @param string $statusCode
     * @param string $message
     */
    public function __construct(int $statusCode, string $message)
    {
        $this->statusCode = $statusCode;
        $this->message = $message;
    }
}
