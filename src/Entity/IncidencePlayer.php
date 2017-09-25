<?php

namespace MauroMoreno\DataFactory\Entity;

/**
 * Class IncidencePlayer
 *
 * @package MauroMoreno\DataFactory\Entity
 */
class IncidencePlayer
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

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
     * @return IncidencePlayer
     */
    public function setId(int $id): IncidencePlayer
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return IncidencePlayer
     */
    public function setName(string $name): IncidencePlayer
    {
        $this->name = $name;
        return $this;
    }

}
