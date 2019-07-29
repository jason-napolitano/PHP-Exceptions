<?php namespace Exceptions\Helpers {

    /**
     * ExceptionHelpers Trait
     *
     * A simple trait that should assist in throwing specific exceptions
     * from within classes
     *
     * @package Tests
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
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
         *         self::throw_new('FileNotFoundException', 'FileSystem');
         *
         *         // Or, using the main namespace ...
         *         self::throw_new('RangeException');
         *     }
         * }
         *
         * @param string      $exception
         * @param string|null $namespace
         */
        protected static function throw_new(string $exception = 'RuntimeException', ?string $namespace = null): void
        {
            $class = $namespace !== null
                ? '\Exceptions\\' . $namespace . '\\' . $exception
                : '\Exceptions\\' . $exception;
            throw new $class();
        }
    }
}
