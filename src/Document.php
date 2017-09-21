<?php

namespace MauroMoreno\DataFactory;

use JMS\Serializer\SerializerInterface;
use MauroMoreno\DataFactory\Entity\ChannelBag;
use MauroMoreno\DataFactory\Entity\Error;
use MauroMoreno\DataFactory\Entity\Sheet;

/**
 * Class Document
 *
 * @package MauroMoreno\DataFactory
 */
class Document
{

    /**
     * @var \JMS\Serializer\SerializerInterface
     */
    private $serializer;

    /**
     * Document constructor.
     *
     * @param \JMS\Serializer\SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param $errorData
     *
     * @return array|\JMS\Serializer\scalar|object
     */
    public function parseError($errorData)
    {
        return $this->serializer->deserialize($errorData, Error::class, 'xml');
    }

    /**
     * @param $channelsData
     *
     * @return array|\JMS\Serializer\scalar|object
     */
    public function parseChannels($channelsData)
    {
        return $this->serializer
            ->deserialize($channelsData, ChannelBag::class, 'xml');
    }

    /**
     * @param $channelData
     *
     * @return array|\JMS\Serializer\scalar|object
     */
    public function parseChannel($channelData)
    {
        return $this->serializer
            ->deserialize($channelData, Sheet::class, 'xml');
    }

}
