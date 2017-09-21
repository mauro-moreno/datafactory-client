<?php

namespace MauroMoreno\DataFactory\Entity;

/**
 * Class Category
 *
 * @package MauroMoreno\DataFactory\Entity
 */
class Team
{

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $country_id;

    /**
     * @var int
     */
    public $goals;

    /**
     * @var int
     */
    public $penalty_goals;

    /**
     * @var string
     */
    public $short_name;

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
     * @return Team
     */
    public function setId(int $id): Team
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->country_id;
    }

    /**
     * @param int $country_id
     *
     * @return Team
     */
    public function setCountryId(int $country_id): Team
    {
        $this->country_id = $country_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getGoals(): int
    {
        return $this->goals;
    }

    /**
     * @param int $goals
     *
     * @return Team
     */
    public function setGoals(int $goals): Team
    {
        $this->goals = $goals;
        return $this;
    }

    /**
     * @return int
     */
    public function getPenaltyGoals(): int
    {
        return $this->penalty_goals;
    }

    /**
     * @param int $penalty_goals
     *
     * @return Team
     */
    public function setPenaltyGoals(int $penalty_goals): Team
    {
        $this->penalty_goals = $penalty_goals;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortName(): string
    {
        return $this->short_name;
    }

    /**
     * @param string $short_name
     *
     * @return Team
     */
    public function setShortName(string $short_name): Team
    {
        $this->short_name = $short_name;
        return $this;
    }

}
