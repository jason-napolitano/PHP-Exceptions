<?php namespace Exceptions\Collection {

	/**
	 * ObjectAlreadyExistsException class
	 *
	 * Indicates that a specified object already exists
	 *
	 * @package Exceptions\Collection
	 *
	 * @author  Jason Napolitano <https://github.com/jason-napolitano>
	 * @version 0.0.3
	 * @since   0.0.1
	 * @license MIT <https://opensource.org/licenses/MIT>
	 */
	class ObjectAlreadyExistsException extends CollectionException
	{
		/**
		 * The exception message
		 *
		 * @var string $message The exception message
		 */
		protected $message = 'The specified object already exists';
	}
}
