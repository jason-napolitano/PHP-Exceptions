<?php

namespace Exceptions\Collection;

/**
 * JSONEncodeException class
 *
 * Thrown if the specified JSON could not be encoded
 *
 * @package Exceptions\Collection
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class JSONEncodeException extends InvalidJSONException
{
    /**
     * The exception message
     *
     * @var string $message The exception message
     */
    protected $message = 'The specified JSON could not be encoded';
}
