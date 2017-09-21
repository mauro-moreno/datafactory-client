<?php

namespace MauroMoreno\DataFactory\Tests\Entity;

use MauroMoreno\DataFactory\Entity\Category;
use MauroMoreno\DataFactory\Entity\Sheet;
use MauroMoreno\DataFactory\Entity\Sport;
use MauroMoreno\DataFactory\Entity\Tournament;
use PHPUnit\Framework\TestCase;

class SheetTest extends TestCase
{

    public function test_getters_and_setters_ok()
    {
        $category = new Category;
        $sheet = new Sheet;
        $sport = new Sport;
        $tournament = new Tournament;

        $this->assertEquals($sheet, $sheet->setSport($sport));
        $this->assertEquals($sport, $sheet->getSport());
        $this->assertEquals($sheet, $sheet->setCategory($category));
        $this->assertEquals($category, $sheet->getCategory());
        $this->assertEquals($sheet, $sheet->setTournament($tournament));
        $this->assertEquals($tournament, $sheet->getTournament());
    }

}
