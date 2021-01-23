<?php

namespace Exceptions\Helpers;

/**
 * ExceptionHelpers Trait
 *
 * A simple trait that should assist in throwing specific exceptions
 * from within classes
 *
 * @package Exceptions\Helpers
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
trait ExceptionHelpers
{
    /**
     * A utility function used to help throw new exception classes
     * without the need to import them
     *
     * USAGE:
     * class ClassName
     * {
     *     use \Exceptions\Helpers\ExceptionHelpers;
     *
     *     public function methodName()
     *     {
     *         // Using sub-namespaces ...
     *         self::throwNew('FileNotFoundException', 'FileSystem');
     *
     *         // Or, using the main namespace ...
     *         self::throwNew('RangeException');
     *     }
     * }
     *
     * @param string      $message   The message for the exception
     * @param string      $exception The exception class to throw
     * @param string|null $namespace The optional sub-namespace that exists within 
     *                               the \Exceptions namespace
     */
    protected static function throwNew(string $message, string $exception = 'RuntimeException', ?string $namespace = null): void
    {
        $class = $namespace !== null
            ? '\Exceptions\\' . $namespace . '\\' . $exception
            : '\Exceptions\\' . $exception;

        throw new $class($message);
    }
}
