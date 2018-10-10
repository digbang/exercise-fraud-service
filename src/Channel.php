<?php

namespace Digbang\FraudService;

class Channel
{
    protected const ONLINE = 'online';
    protected const OFFLINE = 'offline';

    /** @var string */
    protected $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function online(): self
    {
        return new static(static::ONLINE);
    }
    public static function offline(): self
    {
        return new static(static::OFFLINE);
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
