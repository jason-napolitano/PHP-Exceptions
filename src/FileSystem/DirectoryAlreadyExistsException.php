<?php namespace Exceptions\FileSystem {

    /**
     * DirectoryAlreadyExistsException
     *
     * The DirectoryAlreadyExistsException indicates that a directory
     * already exists
     *
     * @package Exceptions\FileSystem
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class DirectoryAlreadyExistsException extends FileSystemException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'Specified directory already exists';
    }
}
