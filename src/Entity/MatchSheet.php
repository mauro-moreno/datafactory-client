<?php

namespace MauroMoreno\DataFactory\Entity;

/**
 * Class MatchSheet
 *
 * @package MauroMoreno\DataFactory\Entity
 */
class MatchSheet
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $date;

    /**
     * @var string
     */
    private $day;

    /**
     * @var string
     */
    private $hour;

    /**
     * @var string
     */
    private $hour_status;

    /**
     * @var Incidence[]
     */
    private $incidences;

    /**
     * @var string
     */
    private $instance;

    /**
     * @var string
     */
    private $level;

    /**
     * @var Status
     */
    private $status;

    /**
     * @var Team[]
     */
    private $teams;

    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $timezone;

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
     * @return MatchSheet
     */
    public function setId(int $id): MatchSheet
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @param int $date
     *
     * @return MatchSheet
     */
    public function setDate(int $date): MatchSheet
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getDay(): string
    {
        return $this->day;
    }

    /**
     * @param string $day
     *
     * @return MatchSheet
     */
    public function setDay(string $day): MatchSheet
    {
        $this->day = $day;
        return $this;
    }

    /**
     * @return string
     */
    public function getHour(): string
    {
        return $this->hour;
    }

    /**
     * @param string $hour
     *
     * @return MatchSheet
     */
    public function setHour(string $hour): MatchSheet
    {
        $this->hour = $hour;
        return $this;
    }

    /**
     * @return string
     */
    public function getHourStatus(): string
    {
        return $this->hour_status;
    }

    /**
     * @param string $hour_status
     *
     * @return MatchSheet
     */
    public function setHourStatus(string $hour_status): MatchSheet
    {
        $this->hour_status = $hour_status;
        return $this;
    }

    /**
     * @return Incidence[]
     */
    public function getIncidences(): array
    {
        return $this->incidences;
    }

    /**
     * @param \MauroMoreno\DataFactory\Entity\Incidence[] $incidences
     *
     * @return MatchSheet
     */
    public function setIncidences(array $incidences): MatchSheet
    {
        $this->incidences = $incidences;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstance(): string
    {
        return $this->instance;
    }

    /**
     * @param string $instance
     *
     * @return MatchSheet
     */
    public function setInstance(string $instance): MatchSheet
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * @param string $level
     *
     * @return MatchSheet
     */
    public function setLevel(string $level): MatchSheet
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * @param Status $status
     *
     * @return MatchSheet
     */
    public function setStatus(Status $status): MatchSheet
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Team[]
     */
    public function getTeams(): array
    {
        return $this->teams;
    }

    /**
     * @param \MauroMoreno\DataFactory\Entity\Team[] $teams
     *
     * @return MatchSheet
     */
    public function setTeams(array $teams): MatchSheet
    {
        $this->teams = $teams;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimezone(): int
    {
        return $this->timezone;
    }

    /**
     * @param int $timezone
     *
     * @return MatchSheet
     */
    public function setTimezone(int $timezone): MatchSheet
    {
        $this->timezone = $timezone;
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
     * @return MatchSheet
     */
    public function setType(string $type): MatchSheet
    {
        $this->type = $type;
        return $this;
    }

}
