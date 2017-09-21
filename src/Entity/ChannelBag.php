<?php

namespace MauroMoreno\DataFactory\Entity;

/**
 * Class ChannelBag
 *
 * @package MauroMoreno\DataFactory\Entity
 */
class ChannelBag
{

    /**
     * @var Channel[]
     */
    private $channels = [];

    /**
     * @return Channel[]
     */
    public function getChannels(): array
    {
        return $this->channels;
    }

    /**
     * @param Channel[] $channels
     *
     * @return $this
     */
    public function setChannels(array $channels)
    {
        $this->channels = $channels;
        return $this;
    }

}