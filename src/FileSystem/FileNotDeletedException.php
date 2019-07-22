<?php namespace Exceptions\FileSystem {

    /**
     * FileNotDeletedException
     *
     * The FileNotDeletedException indicates that a file
     * was not deleted
     *
     * @package Exceptions\FileSystem
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.1
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class FileNotDeletedException extends FileSystemException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'Specified file was not deleted';
    }
}
