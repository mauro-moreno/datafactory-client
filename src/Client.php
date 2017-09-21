<?php

namespace MauroMoreno\DataFactory;

use GuzzleHttp\Client as GuzzleClient;

/**
 * Class Client
 *
 * @package MauroMoreno\DataFactory
 */
class Client
{

    // URL Datafactory.la
    const BASE_URI = 'http://feed.datafactory.la';

    /**
     * @var \GuzzleHttp\Client
     */
    private $guzzleClient;

    /**
     * Client constructor.
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $defaults['base_uri'] = self::BASE_URI;
        $config = array_merge($defaults, $config);
        $this->guzzleClient = new GuzzleClient($config);
    }

    /**
     * Get Channels
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getChannels()
    {
        return $this->getGuzzleClient()->get('/');
    }

    /**
     * Get Channel
     *
     * @param string $channel
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getChannel(string $channel)
    {
        $params = [
            'canal' => $channel
        ];
        return $this->getGuzzleClient()->get('/', ['query' => $params]);
    }

    /**
     * Get Guzzle Client
     *
     * @return \GuzzleHttp\Client
     */
    public function getGuzzleClient()
    {
        return $this->guzzleClient;
    }

}
