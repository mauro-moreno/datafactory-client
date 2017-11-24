<?php

namespace MauroMoreno\DataFactory\Tests;

use JMS\Serializer\SerializerBuilder;
use MauroMoreno\DataFactory\Document;
use MauroMoreno\DataFactory\Entity\Category;
use MauroMoreno\DataFactory\Entity\Channel;
use MauroMoreno\DataFactory\Entity\ChannelBag;
use MauroMoreno\DataFactory\Entity\Error;
use MauroMoreno\DataFactory\Entity\Incidence;
use MauroMoreno\DataFactory\Entity\IncidenceKey;
use MauroMoreno\DataFactory\Entity\IncidencePlayer;
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
        $incidences = [
            (new Incidence)
                ->setType("gol")
                ->setSubtype("gol de jugada")
                ->setId(18906618)
                ->setOrder(1)
                ->setIncidenceId(9)
                ->setMinute(21)
                ->setSecond(31)
                ->setTime("PT")
                ->setPlayer((new IncidencePlayer)->setId(25189)
                    ->setName("Edin Dzeko "))
                ->setTeamShortName("ROM")
                ->setKey((new IncidenceKey)->setId(61)->setValue("roma")),
            (new Incidence)
                ->setType("gol")
                ->setSubtype("gol en contra")
                ->setId(18906642)
                ->setOrder(2)
                ->setIncidenceId(10)
                ->setMinute(34)
                ->setSecond(30)
                ->setTime("PT")
                ->setPlayer((new IncidencePlayer)->setId(189402)
                    ->setName("Fabio Lucioni (EC)"))
                ->setExtraCode("(EC)")
                ->setTeamShortName("BEN")
                ->setKey((new IncidenceKey)->setId(61)->setValue("roma")),
            (new Incidence)
                ->setType("cambio")
                ->setId(18906717)
                ->setOrder(3)
                ->setIncidenceId(6)
                ->setMinute(0)
                ->setSecond(0)
                ->setTime("ST")
                ->setPlayerIn((new IncidencePlayer)->setId(75568)
                    ->setName("Stephan El Shaarawy"))
                ->setPlayerOut((new IncidencePlayer)->setId(103788)
                    ->setName("Cengiz Ünder"))
                ->setTeamShortName("ROM")
                ->setKey((new IncidenceKey)->setId(61)->setValue("roma")),
            (new Incidence)
                ->setType("gol")
                ->setSubtype("gol de jugada")
                ->setId(18906745)
                ->setOrder(4)
                ->setIncidenceId(9)
                ->setMinute(6)
                ->setSecond(17)
                ->setTime("ST")
                ->setPlayer((new IncidencePlayer)->setId(25189)
                    ->setName("Edin Dzeko "))
                ->setTeamShortName("ROM")
                ->setKey((new IncidenceKey)->setId(61)->setValue("roma")),
            (new Incidence)
                ->setType("amonestado")
                ->setId(18906770)
                ->setOrder(5)
                ->setIncidenceId(3)
                ->setMinute(11)
                ->setSecond(0)
                ->setTime("ST")
                ->setPlayer((new IncidencePlayer)->setId(189313)
                    ->setName("Gianluca Di Chiara "))
                ->setTeamShortName("BEN")
                ->setKey((new IncidenceKey)->setId(6348)
                    ->setValue("benevento")),
            (new Incidence)
                ->setType("cambio")
                ->setId(18906808)
                ->setOrder(6)
                ->setIncidenceId(6)
                ->setMinute(18)
                ->setSecond(7)
                ->setTime("ST")
                ->setPlayerIn((new IncidencePlayer)->setId(138364)
                    ->setName("Vittorio Parigini"))
                ->setPlayerOut((new IncidencePlayer)->setId(127342)
                    ->setName("Achraf Lazaar"))
                ->setTeamShortName("BEN")
                ->setKey((new IncidenceKey)->setId(6348)
                    ->setValue("benevento")),
            (new Incidence)
                ->setType("cambio")
                ->setId(18906816)
                ->setOrder(7)
                ->setIncidenceId(6)
                ->setMinute(22)
                ->setSecond(7)
                ->setTime("ST")
                ->setPlayerIn((new IncidencePlayer)->setId(147762)
                    ->setName("Gérson"))
                ->setPlayerOut((new IncidencePlayer)->setId(145166)
                    ->setName("Lorenzo Pellegrini"))
                ->setTeamShortName("ROM")
                ->setKey((new IncidenceKey)->setId(61)->setValue("roma")),
            (new Incidence)
                ->setType("gol")
                ->setSubtype("gol en contra")
                ->setId(18906828)
                ->setOrder(8)
                ->setIncidenceId(10)
                ->setMinute(28)
                ->setSecond(17)
                ->setTime("ST")
                ->setPlayer((new IncidencePlayer)->setId(138393)
                    ->setName("Lorenzo Venuti (EC)"))
                ->setExtraCode("(EC)")
                ->setTeamShortName("BEN")
                ->setKey((new IncidenceKey)->setId(61)->setValue("roma")),
            (new Incidence)
                ->setType("cambio")
                ->setId(18906829)
                ->setOrder(9)
                ->setIncidenceId(6)
                ->setMinute(29)
                ->setSecond(20)
                ->setTime("ST")
                ->setPlayerIn((new IncidencePlayer)->setId(55202)
                    ->setName("Samuel Armenteros"))
                ->setPlayerOut((new IncidencePlayer)->setId(37356)
                    ->setName("Massimo Coda"))
                ->setTeamShortName("BEN")
                ->setKey((new IncidenceKey)->setId(6348)
                    ->setValue("benevento")),
            (new Incidence)
                ->setType("cambio")
                ->setId(18906831)
                ->setOrder(10)
                ->setIncidenceId(6)
                ->setMinute(29)
                ->setSecond(37)
                ->setTime("ST")
                ->setPlayerIn((new IncidencePlayer)->setId(70219)
                    ->setName("Alessandro Florenzi"))
                ->setPlayerOut((new IncidencePlayer)->setId(44263)
                    ->setName("Diego Perotti"))
                ->setTeamShortName("ROM")
                ->setKey((new IncidenceKey)->setId(61)->setValue("roma")),
            (new Incidence)
                ->setType("amonestado")
                ->setId(18906864)
                ->setOrder(11)
                ->setIncidenceId(3)
                ->setMinute(38)
                ->setSecond(57)
                ->setTime("ST")
                ->setPlayer((new IncidencePlayer)->setId(138364)
                    ->setName("Vittorio Parigini "))
                ->setTeamShortName("BEN")
                ->setKey((new IncidenceKey)->setId(6348)
                    ->setValue("benevento")),
        ];
        $teams = [];
        $teams[] = (new Team)->setId(6348)
            ->setShortName('Benevento')
            ->setGoals(0)
            ->setPenaltyGoals(0)
            ->setCountryId(3)
            ->setIncidences([]);
        $teams[] = (new Team)->setId(61)
            ->setShortName('Roma')
            ->setGoals(4)
            ->setPenaltyGoals(0)
            ->setCountryId(3)
            ->setIncidences([]);
        $match_sheet = (new MatchSheet)->setId(414256)
            ->setInstance('Fecha 5')
            ->setType('')
            ->setDate(20170920)
            ->setDay('Miércoles')
            ->setHour('13:00')
            ->setTimezone(-3)
            ->setTeams($teams)
            ->setStatus((new Status)->setId(2)->setValue('Finalizado'))
            ->setHourStatus('14:50:17')
            ->setLevel('Temporada Regular')
            ->setIncidences($incidences);
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

    public function test_parse_channel_tenis_ok()
    {
        $xml_string = $this->getXml('channel_tenis_ok.xml');
        $response = $this->document->parseChannel($xml_string);
        $teams = [
            (new Team)->setId(148472)
                ->setCountryId(172)
                ->setShortName('D. Popko')
                ->setService('N')
                ->setIncidences([
                    (new Incidence)->setDescription(5)
                ]),
            (new Team)->setId(89972)
                ->setCountryId(1)
                ->setShortName('G. Pella')
                ->setService('N')
                ->setIncidences([
                    (new Incidence)->setDescription(7)
                ]),
        ];
        $match_sheet = (new MatchSheet)
            ->setId(402493)
            ->setDate(20170917)
            ->setDay('Domingo')
            ->setHour('08:40')
            ->setInstance('Kazajistan vs Argentina - Partido 5')
            ->setType('vuelta')
            ->setTimezone(-3)
            ->setStatus((new Status)->setId(7)
                ->setValue('Finalizado por abandono'))
            ->setIncidences([])
            ->setLevel('Repechaje')
            ->setTeams($teams);
        $sheet = (new Sheet)
            ->setCategory((new Category)->setId(28)->setValue('Copa Davis'))
            ->setSport((new Sport)->setId(5)->setValue('Tenis'))
            ->setTournament((new Tournament)->setId(4513)
                ->setValue('Copa Davis 2017'))
            ->setTournamentAltName((new Tournament)->setId(4513)
                ->setValue('Copa Davis'))
            ->setMatchSheet($match_sheet);
        $this->assertEquals($sheet, $response);
    }

    private function getXml($file_name)
    {
        return file_get_contents(__DIR__ . '/examples/' . $file_name);
    }

}
