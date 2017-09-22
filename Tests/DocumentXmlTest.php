<?php

namespace MauroMoreno\DataFactory\Tests;

use JMS\Serializer\SerializerBuilder;
use MauroMoreno\DataFactory\Document;
use MauroMoreno\DataFactory\Entity\Category;
use MauroMoreno\DataFactory\Entity\Channel;
use MauroMoreno\DataFactory\Entity\ChannelBag;
use MauroMoreno\DataFactory\Entity\Error;
use MauroMoreno\DataFactory\Entity\MatchSheet;
use MauroMoreno\DataFactory\Entity\Sheet;
use MauroMoreno\DataFactory\Entity\Sport;
use MauroMoreno\DataFactory\Entity\Status;
use MauroMoreno\DataFactory\Entity\Team;
use MauroMoreno\DataFactory\Entity\Tournament;
use PHPUnit\Framework\TestCase;

class DocumentXmlTest extends TestCase
{

    /**
     * @var Document
     */
    private $document;

    public function setUp()
    {
        $serializer = SerializerBuilder::create()
            ->addMetadataDir(__DIR__ . '/../resources/config/serializer')
            ->build();
        $this->document = new Document($serializer);
    }

    public function test_parse_channels()
    {
        $xml_string = $this->getXml('channels.xml');
        $response = $this->document->parseChannels($xml_string);
        $channelBag = (new ChannelBag)
            ->setChannels([
                (new Channel)
                    ->setValue('deportes.futbol.eliminatorias.ficha.2381890'),
                (new Channel)
                    ->setValue('deportes.futbol.eliminatorias.ficha.2381887'),
                (new Channel)
                    ->setValue('deportes.futbol.eliminatorias.ficha.2381895'),
                (new Channel)
                    ->setValue('deportes.futbol.eliminatorias.ficha.2381894'),
                (new Channel)
                    ->setValue('deportes.futbol.eliminatorias.ficha.2381892'),
                (new Channel)
                    ->setValue('deportes.futbol.libertadores.ficha.384631'),
                (new Channel)
                    ->setValue('deportes.futbol.nacionalb.ficha.415569'),
                (new Channel)
                    ->setValue('deportes.futbol.nacionalb.ficha.415561'),
                (new Channel)
                    ->setValue('deportes.futbol.nacionalb.ficha.415567'),
                (new Channel)
                    ->setValue('deportes.futbol.italia.ficha.414256'),
                (new Channel)
                    ->setValue('deportes.futbol.copaargentina.ficha.387073'),
                (new Channel)
                    ->setValue('deportes.futbol.italia.ficha.414262'),
                (new Channel)
                    ->setValue('deportes.futbol.italia.ficha.414263'),
                (new Channel)
                    ->setValue('deportes.futbol.italia.ficha.414258'),
                (new Channel)
                    ->setValue('deportes.futbol.italia.ficha.414260'),
                (new Channel)
                    ->setValue('deportes.futbol.italia.ficha.414264'),
                (new Channel)
                    ->setValue('deportes.todos.agenda.diaadia'),
                (new Channel)
                    ->setValue('deportes.futbol.espana.ficha.412117'),
                (new Channel)
                    ->setValue('deportes.futbol.italia.ficha.414255'),
                (new Channel)
                    ->setValue('deportes.futbol.italia.ficha.414261'),
                (new Channel)
                    ->setValue('deportes.futbol.espana.ficha.412121'),
                (new Channel)
                    ->setValue('deportes.futbol.espana.ficha.412123'),
            ]);
        $this->assertEquals($channelBag, $response);
    }

    public function test_parse_error()
    {
        $xml_string = $this->getXml('channel_error.xml');
        $response = $this->document->parseError($xml_string);
        $this->assertEquals((new Error)->setValue('Ud. no tiene permisos para acceder a este canal'),
            $response);
    }

    public function test_parse_channel_ok()
    {
        $xml_string = $this->getXml('channel_ok.xml');
        $response = $this->document->parseChannel($xml_string);
        $teams = [];
        $teams[] = (new Team)->setId(6348)
            ->setShortName('Benevento')
            ->setGoals(0)
            ->setPenaltyGoals(0)
            ->setCountryId(3);
        $teams[] = (new Team)->setId(61)
            ->setShortName('Roma')
            ->setGoals(4)
            ->setPenaltyGoals(0)
            ->setCountryId(3);
        $match_sheet = (new MatchSheet)->setId(414256)
            ->setInstance('Fecha 5')
            ->setType('')
            ->setDate(20170920)
            ->setDay('Miércoles')
            ->setHour('13:00')
            ->setTimezone(-3)
            ->setTeams($teams)
            ->setStatus((new Status)->setId(2)->setValue('Finalizado'))
            ->setHourStatus('14:50:17');
        $sheet = (new Sheet)
            ->setSport((new Sport)->setId(1)->setValue('Fútbol'))
            ->setCategory((new Category)->setId(6)
                ->setValue('Italia - Primera División'))
            ->setTournament((new Tournament)->setId(4685)
                ->setValue('Italia - Serie A 2017-2018'))
            ->setTournamentAltName((new Tournament)->setId(4685)
                ->setValue('Italia 2017 2018'))
            ->setMatchSheet($match_sheet);
        $this->assertEquals($sheet, $response);
    }

    private function getXml($file_name)
    {
        return file_get_contents(__DIR__ . '/examples/' . $file_name);
    }

}
