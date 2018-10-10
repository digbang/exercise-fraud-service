<?php


namespace Digbang\FraudService;


class Data
{
    /** @var string */
    private $clientUniqueIdentificationCode;

    /** @var int */
    private $movementAmount;

    /** @var \DateTimeInterface */
    private $date;

    /** @var Channel */
    private $channel;

    public function __construct(
        string $clientUniqueIdentificationCode,
        int $movementAmountInCents,
        \DateTimeInterface $date,
        Channel $channel
    ) {
        $this->clientUniqueIdentificationCode = $clientUniqueIdentificationCode;
        $this->movementAmount = $movementAmountInCents;
        $this->date = $date;
        $this->channel = $channel;
    }

    public function __toString()
    {
        return $this->clientUniqueIdentificationCode . '|' . $this->channel->getValue() . '|' . $this->date->format('c') . '|' . $this->movementAmount;
    }
}