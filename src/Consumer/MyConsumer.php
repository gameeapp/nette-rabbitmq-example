<?php

declare(strict_types=1);

namespace App\Consumer;

use Bunny\Message;
use Gamee\RabbitMQ\Consumer\IConsumer;

final class MyConsumer implements IConsumer
{

	public function consume(Message $message): int
	{
		$messageData = json_decode($message->content);

		$headers = $message->headers;

		/**
		 * @todo Some logic here...
		 */

		return IConsumer::MESSAGE_ACK; // Or ::MESSAGE_NACK || ::MESSAGE_REJECT
	}
}
