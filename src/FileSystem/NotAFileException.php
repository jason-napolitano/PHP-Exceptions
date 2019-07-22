<?php namespace Exceptions\FileSystem {

    /**
     * NotAFileException class
     *
     * The NotAFileException indicates that a path
     * is not file
     *
     * @package Exceptions\FileSystem
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class NotAFileException extends FileSystemException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'Specified path is not a file';
    }
}
