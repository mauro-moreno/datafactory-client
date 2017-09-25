<?php

namespace MauroMoreno\DataFactory\Entity;

/**
 * Class IncidenceKey
 *
 * @package MauroMoreno\DataFactory\Entity
 */
class IncidenceKey
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
     * @return IncidenceKey
     */
    public function setId(int $id): IncidenceKey
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
     * @return IncidenceKey
     */
    public function setValue(string $value): IncidenceKey
    {
        $this->value = $value;
        return $this;
    }

}