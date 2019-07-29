<?php namespace Exceptions\FileSystem {

    /**
     * FileNotWritableException class
     *
     * The FileNotWritableException indicates that a file
     * is not writable
     *
     * @package Exceptions\FileSystem
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class FileNotWritableException extends FileSystemException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'Specified file is not writable';
    }
}
