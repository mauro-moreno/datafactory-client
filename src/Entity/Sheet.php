<?php

namespace MauroMoreno\DataFactory\Entity;

/**
 * Class Sheet
 *
 * @package MauroMoreno\DataFactory\Entity
 */
class Sheet
{

    /**
     * @var Category
     */
    private $category;

    /**
     * @var MatchSheet
     */
    private $match_sheet;

    /**
     * @var Sport
     */
    private $sport;

    /**
     * @var Tournament
     */
    private $tournament;

    /**
     * @var Tournament
     */
    private $tournament_alt_name;

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @param Category $category
     *
     * @return Sheet
     */
    public function setCategory(Category $category): Sheet
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMatchSheet()
    {
        return $this->match_sheet;
    }

    /**
     * @param MatchSheet $match_sheet
     *
     * @return Sheet
     */
    public function setMatchSheet(MatchSheet $match_sheet): Sheet
    {
        $this->match_sheet = $match_sheet;
        return $this;
    }

    /**
     * @return Sport
     */
    public function getSport(): Sport
    {
        return $this->sport;
    }

    /**
     * @param Sport $sport
     *
     * @return Sheet
     */
    public function setSport(Sport $sport): Sheet
    {
        $this->sport = $sport;
        return $this;
    }

    /**
     * @return Tournament
     */
    public function getTournament(): Tournament
    {
        return $this->tournament;
    }

    /**
     * @param Tournament $tournament
     *
     * @return Sheet
     */
    public function setTournament(Tournament $tournament): Sheet
    {
        $this->tournament = $tournament;
        return $this;
    }

    /**
     * @return Tournament
     */
    public function getTournamentAltName(): Tournament
    {
        return $this->tournament_alt_name;
    }

    /**
     * @param Tournament $tournament
     *
     * @return Sheet
     */
    public function setTournamentAltName(Tournament $tournament): Sheet
    {
        $this->tournament_alt_name = $tournament;
        return $this;
    }

}
