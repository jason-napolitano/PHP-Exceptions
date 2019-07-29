<?php namespace Exceptions\FileSystem {

    /**
     * DirectoryNotDeletedException class
     *
     * The DirectoryNotDeletedException indicates that a directory
     * was not deleted
     *
     * @package Exceptions\FileSystem
     *
     * @author  Jason Napolitano <https://github.com/jason-napolitano>
     * @version 0.0.2
     * @since   0.0.1
     * @license MIT <https://opensource.org/licenses/MIT>
     */
    class DirectoryNotDeletedException extends FileSystemException
    {
        /**
         * The exception message
         *
         * @var string $message The exception message
         */
        protected $message = 'Specified directory was not deleted';
    }
}
