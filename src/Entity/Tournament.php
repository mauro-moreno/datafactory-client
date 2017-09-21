<?php

namespace MauroMoreno\DataFactory\Entity;

/**
 * Class Tournament
 *
 * @package MauroMoreno\DataFactory\Entity
 */
class Tournament
{

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $value;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Tournament
     */
    public function setId(int $id): Tournament
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getChannel(): string
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     *
     * @return Tournament
     */
    public function setChannel(string $channel): Tournament
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return Tournament
     */
    public function setValue(string $value): Tournament
    {
        $this->value = $value;
        return $this;
    }

}
