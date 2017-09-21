<?php

namespace MauroMoreno\DataFactory\Tests\Entity;

use MauroMoreno\DataFactory\Entity\Channel;
use PHPUnit\Framework\TestCase;

class ChannelTest extends TestCase
{

    public function test_getters_and_setters_ok()
    {
        $channel = new Channel;
        $this->assertEquals($channel, $channel->setValue('channel_value'));
        $this->assertEquals('channel_value', $channel->getValue());
    }

}
