<?php

namespace MauroMoreno\DataFactory\Entity;

/**
 * Class Status
 *
 * @package MauroMoreno\DataFactory\Entity
 */
class Status
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $value;

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
     * @return Status
     */
    public function setId(int $id): Status
    {
        $this->id = $id;
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
     * @return Status
     */
    public function setValue(string $value): Status
    {
        $this->value = $value;
        return $this;
    }

}
