<?php

declare(strict_types=1);

namespace App\Queue;

use Bunny\Message;
use Gamee\RabbitMQ\Producer\Producer;

final class MyQueue
{

	/**
	 * @var Producer
	 */
	private $myProducer;


	public function __construct(Producer $myProducer)
	{
		$this->myProducer = $myProducer;
	}


	public function add(string $something): void
	{
		$this->myProducer->publish(
			json_encode(['something' => $something])
		);
	}
}
