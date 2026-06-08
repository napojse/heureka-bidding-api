<?php

declare(strict_types=1);

namespace Baraja\HeurekaBiddingApi;


final class HeurekaCategoryMissingException extends HeurekaException
{

	public static function forEmptyResponse(): self
	{
		return new self('Category does not exist (because empty response).');
	}
}
