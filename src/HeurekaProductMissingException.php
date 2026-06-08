<?php

declare(strict_types=1);

namespace Baraja\HeurekaBiddingApi;


final class HeurekaProductMissingException extends HeurekaException
{

	public static function forEmptyResponse(): self
	{
		return new self('Product does not exist (because empty response).');
	}
}
