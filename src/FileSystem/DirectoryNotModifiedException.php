<?php

namespace Exceptions\FileSystem;

/**
 * DirectoryNotModifiedException class
 *
 * The DirectoryNotModifiedException indicates that a directory
 * was not modified
 *
 * @package Exceptions\FileSystem
 *
 * @author  Jason Napolitano <https://github.com/jason-napolitano>
 * @version 0.0.3
 * @since   0.0.1
 * @license MIT <https://opensource.org/licenses/MIT>
 */
class DirectoryNotModifiedException extends FileSystemException
{
    /**
     * The exception message
     *
     * @var string $message The exception message
     */
    protected $message = 'Specified directory was not modified';
}
