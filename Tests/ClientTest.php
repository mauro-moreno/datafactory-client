<?php

namespace MauroMoreno\DataFactory\Tests;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Response;
use MauroMoreno\DataFactory\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{

    public function test_valid_client()
    {
        $client = new Client();
        $this->assertInstanceOf(GuzzleClient::class,
            $client->getGuzzleClient());
        $this->assertEquals(Client::BASE_URI,
            $client->getGuzzleClient()->getConfig('base_uri'));
    }

    public function test_get_channels_ok()
    {
        $client = new Client();
        $mock = new MockHandler([
            new Response(200, [],
                Psr7\stream_for($this->getFileContents('channels.xml'))),
        ]);
        $client->getGuzzleClient()->getConfig('handler')->setHandler($mock);
        $response = $client->getChannels();
        $this->assertEquals(200, $response->getStatusCode());
        $expected_xml = $this->getXml('channels.xml');
        $this->assertEquals($expected_xml,
            simplexml_load_string($response->getBody()->getContents()));
    }

    public function test_get_channel_error()
    {
        $client = new Client();
        $mock = new MockHandler([
            new Response(200, [],
                Psr7\stream_for($this->getFileContents('channel_error.xml'))),
        ]);
        $client->getGuzzleClient()->getConfig('handler')->setHandler($mock);
        $response = $client->getChannel('wrong_channel');
        $this->assertEquals(200, $response->getStatusCode());
        $expected_xml = $this->getXml('channel_error.xml');
        $this->assertEquals($expected_xml,
            simplexml_load_string($response->getBody()->getContents()));
    }

    public function test_get_channel_ok()
    {
        $client = new Client();
        $mock = new MockHandler([
            new Response(200, [],
                Psr7\stream_for($this->getFileContents('channel_ok.xml'))),
        ]);
        $client->getGuzzleClient()->getConfig('handler')->setHandler($mock);
        $response = $client->getChannel('deportes.futbol.italia.ficha.414256');
        $this->assertEquals(200, $response->getStatusCode());
        $expected_xml = $this->getXml('channel_ok.xml');
        $this->assertEquals($expected_xml,
            simplexml_load_string($response->getBody()->getContents()));
    }

    public function getXml(string $file_name)
    {
        return simplexml_load_string($this->getFileContents($file_name));
    }

    public function getFileContents(string $file_name)
    {
        return file_get_contents(__DIR__ . '/examples/' . $file_name);
    }
}
