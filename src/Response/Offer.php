<?php

declare(strict_types=1);

namespace Baraja\HeurekaBiddingApi\Response;


final class Offer extends BaseResponse
{

    private int $id;

    private string $itemId;

    private string $name;

    private ?float $averageDeliveryDays;

    private float $price;

    private float $minDeliveryPrice;

    private bool $shoppingCart;

    /** @var mixed[] */
    private array $attributes;

    /** @var mixed[] */
    private array $gifts;

    /** @var mixed[] */
    private array $availability;

    /**
     * @param mixed[] $haystack
     */
    public function __construct(array $haystack)
    {
        $this->id = $haystack['id'];
        $this->itemId = $haystack['item_id'];
        $this->name = $haystack['name'];
        $this->averageDeliveryDays = $haystack['average_delivery_days'];
        $this->price = (float) $haystack['price'];
        $this->minDeliveryPrice = (float) $haystack['min_delivery_price'];
        $this->shoppingCart = $haystack['shopping_cart'];
        $this->attributes = $haystack['attributes'];
        $this->gifts = $haystack['gifts'];
        $this->availability = $haystack['availability'];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getItemId(): string
    {
        return $this->itemId;
    }

    public function setItemId(string $itemId): void
    {
        $this->itemId = $itemId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAverageDeliveryDays(): ?int
    {
        return $this->averageDeliveryDays;
    }

    public function setAverageDeliveryDays(int $averageDeliveryDays): void
    {
        $this->averageDeliveryDays = $averageDeliveryDays;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getMinDeliveryPrice(): float
    {
        return $this->minDeliveryPrice;
    }

    public function setMinDeliveryPrice(float $minDeliveryPrice): void
    {
        $this->minDeliveryPrice = $minDeliveryPrice;
    }

    public function getShoppingCart(): bool
    {
        return $this->shoppingCart;
    }

    public function setShoppingCart(bool $shoppingCart): void
    {
        $this->shoppingCart = $shoppingCart;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    public function getGifts(): array
    {
        return $this->gifts;
    }

    public function setGifts(array $gifts): void
    {
        $this->gifts = $gifts;
    }

    public function getAvailability(): array
    {
        return $this->availability;
    }

    public function setAvailability(array $availability): void
    {
        $this->availability = $availability;
    }

}
