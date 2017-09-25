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
     * @var string
     */
    private $extra_code;

    /**
     * @var int
     */
    private $incidence_id;

    /**
     * @var IncidenceKey
     */
    private $key;

    /**
     * @var int
     */
    private $minute;

    /**
     * @var IncidencePlayer
     */
    private $player;

    /**
     * @var IncidencePlayer
     */
    private $player_in;

    /**
     * @var IncidencePlayer
     */
    private $player_out;

    /**
     * @var int
     */
    private $second;

    /**
     * @var string
     */
    private $subtype;

    /**
     * @var int
     */
    private $order;

    /**
     * @var string
     */
    private $team_short_name;

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
     * @return string
     */
    public function getExtraCode(): string
    {
        return $this->extra_code;
    }

    /**
     * @param string $extra_code
     *
     * @return Incidence
     */
    public function setExtraCode(string $extra_code): Incidence
    {
        $this->extra_code = $extra_code;
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
     * @return IncidenceKey
     */
    public function getKey(): IncidenceKey
    {
        return $this->key;
    }

    /**
     * @param IncidenceKey $key
     *
     * @return Incidence
     */
    public function setKey(IncidenceKey $key): Incidence
    {
        $this->key = $key;
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
     * @return IncidencePlayer
     */
    public function getPlayer(): IncidencePlayer
    {
        return $this->player;
    }

    /**
     * @param IncidencePlayer $player
     *
     * @return Incidence
     */
    public function setPlayer(IncidencePlayer $player): Incidence
    {
        $this->player = $player;
        return $this;
    }

    /**
     * @return IncidencePlayer
     */
    public function getPlayerIn(): IncidencePlayer
    {
        return $this->player_in;
    }

    /**
     * @param IncidencePlayer $player
     *
     * @return Incidence
     */
    public function setPlayerIn(IncidencePlayer $player): Incidence
    {
        $this->player_in = $player;
        return $this;
    }

    /**
     * @return IncidencePlayer
     */
    public function getPlayerOut(): IncidencePlayer
    {
        return $this->player_out;
    }

    /**
     * @param IncidencePlayer $player
     *
     * @return Incidence
     */
    public function setPlayerOut(IncidencePlayer $player): Incidence
    {
        $this->player_out = $player;
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
    public function getSubtype(): string
    {
        return $this->subtype;
    }

    /**
     * @param string $subtype
     *
     * @return Incidence
     */
    public function setSubtype(string $subtype): Incidence
    {
        $this->subtype = $subtype;
        return $this;
    }

    /**
     * @return string
     */
    public function getTeamShortName(): string
    {
        return $this->team_short_name;
    }

    /**
     * @param string $team_short_name
     *
     * @return Incidence
     */
    public function setTeamShortName(string $team_short_name): Incidence
    {
        $this->team_short_name = $team_short_name;
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
