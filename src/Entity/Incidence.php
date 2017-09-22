<?php

namespace MauroMoreno\DataFactory\Entity;

/**
 * Class Incidence
 *
 * @package MauroMoreno\DataFactory\Entity
 */
class Incidence
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $incidence_id;

    /**
     * @var int
     */
    private $minute;

    /**
     * @var int
     */
    private $second;

    /**
     * @var int
     */
    private $order;

    /**
     * @var string
     */
    private $time;

    /**
     * @var string
     */
    private $type;

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
     * @return Incidence
     */
    public function setId(int $id): Incidence
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getIncidenceId(): int
    {
        return $this->incidence_id;
    }

    /**
     * @param int $incidence_id
     *
     * @return Incidence
     */
    public function setIncidenceId(int $incidence_id): Incidence
    {
        $this->incidence_id = $incidence_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinute(): int
    {
        return $this->minute;
    }

    /**
     * @param int $minute
     *
     * @return Incidence
     */
    public function setMinute(int $minute): Incidence
    {
        $this->minute = $minute;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @param int $order
     *
     * @return Incidence
     */
    public function setOrder(int $order): Incidence
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return int
     */
    public function getSecond(): int
    {
        return $this->second;
    }

    /**
     * @param int $second
     *
     * @return Incidence
     */
    public function setSecond(int $second): Incidence
    {
        $this->second = $second;
        return $this;
    }

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }

    /**
     * @param string $time
     *
     * @return Incidence
     */
    public function setTime(string $time): Incidence
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Incidence
     */
    public function setType(string $type): Incidence
    {
        $this->type = $type;
        return $this;
    }

}
