<?php

namespace MauroMoreno\DataFactory\Entity;

/**
 * Class Sport
 *
 * @package MauroMoreno\DataFactory\Entity
 */
class Sport
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
     * @return Sport
     */
    public function setId(int $id): Sport
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
     * @return Sport
     */
    public function setValue(string $value): Sport
    {
        $this->value = $value;
        return $this;
    }

}