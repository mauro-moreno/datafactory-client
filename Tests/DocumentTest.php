<?php

namespace MauroMoreno\DataFactory\Tests;

use JMS\Serializer\SerializerInterface;
use MauroMoreno\DataFactory\Document;
use MauroMoreno\DataFactory\Entity\ChannelBag;
use MauroMoreno\DataFactory\Entity\Error;
use MauroMoreno\DataFactory\Entity\Sheet;
use PHPUnit\Framework\TestCase;

class DocumentTest extends TestCase
{
    public function test_parse_channels_ok()
    {
        $serializer = $this->mockSerializer();
        $serializer->expects(
            new \PHPUnit_Framework_MockObject_Matcher_InvokedCount(1)
        )->method('deserialize')->willReturn((new ChannelBag));
        $response = (new Document($serializer))->parseChannels('');
        $this->assertInstanceOf(ChannelBag::class, $response);
    }

    public function test_parse_channel_ok()
    {
        $serializer = $this->mockSerializer();
        $serializer->expects(
            new \PHPUnit_Framework_MockObject_Matcher_InvokedCount(1)
        )->method('deserialize')->willReturn((new Sheet));
        $response = (new Document($serializer))->parseChannel('');
        $this->assertInstanceOf(Sheet::class, $response);
    }

    public function test_parse_error_ok()
    {
        $serializer = $this->mockSerializer();
        $serializer->expects(
            new \PHPUnit_Framework_MockObject_Matcher_InvokedCount(1)
        )->method('deserialize')->willReturn((new Error));
        $response = (new Document($serializer))->parseError('');
        $this->assertInstanceOf(Error::class, $response);
    }

    private function mockSerializer()
    {
        return $this->getMockBuilder(SerializerInterface::class)->getMock();
    }
}