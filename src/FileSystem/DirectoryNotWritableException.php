<?php

namespace Exceptions\FileSystem;

/**
 * DirectoryNotWritableException class
 *
 * The DirectoryNotWritableException indicates that a directory
 * is not writable
 *
 * @package Exceptions\FileSystem
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class DirectoryNotWritableException extends FileSystemException
{
    /**
     * The exception message
     *
     * @var string $message The exception message
     */
    protected $message = 'Specified directory is not writable';
}
