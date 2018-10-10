<?php

namespace Digbang\FraudService\Tests;

use Digbang\FraudService\Channel;
use Digbang\FraudService\Data;
use Digbang\FraudService\Sender;
use PHPUnit\Framework\TestCase;

class SenderTest extends TestCase
{
    public function test_change_status_valid_transition()
    {
        $sender = new Sender();
        $sender->send(new Data('123', 32145, new \DateTime(), Channel::offline()));
    }
}
