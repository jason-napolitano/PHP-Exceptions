<?php namespace Exceptions\Collection {

	use Exceptions\ExceptionInterface;

	/**
	 * CollectionException
	 *
	 * A base class for more generic collection related exceptions
	 * to extend
	 *
	 * @package Exceptions\Collection
	 *
	 * @author  Jason Napolitano <https://github.com/jason-napolitano>
	 * @version 0.0.1
	 * @since   0.0.1
	 * @license MIT <https://opensource.org/licenses/MIT>
	 */
	class CollectionException extends \RuntimeException implements ExceptionInterface
	{
		/**
		 * The exception message
		 *
		 * @var string $message The exception message
		 */
		protected $message = 'A collection error was encountered';
	}
}
