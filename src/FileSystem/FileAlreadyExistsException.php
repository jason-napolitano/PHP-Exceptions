<?php namespace Exceptions\FileSystem {

    /**
     * FileAlreadyExistsException class
     *
     * The DirectoryAlreadyExistsException indicates that a file
     * already exists
     *
     * @package Exceptions\FileSystem
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class FileAlreadyExistsException extends FileSystemException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'Specified file(s) already exist';
    }
}
