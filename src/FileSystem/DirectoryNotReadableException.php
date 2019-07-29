<?php namespace Exceptions\FileSystem {

    /**
     * DirectoryNotReadableException class
     *
     * The DirectoryNotReadableException indicates that a directory
     * not readable
     *
     * @package Exceptions\FileSystem
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class DirectoryNotReadableException extends FileSystemException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'Specified directory is not readable';
    }
}
