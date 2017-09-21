<?php

namespace MauroMoreno\DataFactory\Entity;

/**
 * Class Category
 *
 * @package MauroMoreno\DataFactory\Entity
 */
class Category
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
     * @return Category
     */
    public function setId(int $id): Category
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
     * @return Category
     */
    public function setChannel(string $channel): Category
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
     * @return Category
     */
    public function setValue(string $value): Category
    {
        $this->value = $value;
        return $this;
    }

}
