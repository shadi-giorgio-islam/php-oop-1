<?php

class Movie{
  public $titolo;
  public $dataUscita;
  public $genere;
  public $durata;
  public $descrizione;
  public $regista;
  public $vote;
  public $quality;
  public function getYears($dataUscita)
  {
    return 2021 - $dataUscita;
  }
  public function __construct($userVote)
  {
    $this->vote = $userVote;
    if ($userVote > 70) {
      $this->quality = 'High';
    }
    elseif ($userVote >= 30 && $userVote <= 70) {
      $this->quality = 'Medium';
    }
    else {
      $this->quality = 'Low';
    }
  }
}

$movieUno = new Movie(56);
$movieUno->titolo = 'The Flash';
$movieUno->dataUscita = 2014;
$movieUno->genere = 'Dramma';
$movieUno->durata = '44m';
$movieUno->descrizione = 'Barry Allen, un assistente di scena del crimine legale per il dipartimento di polizia di Central City, viene colpito da un fulmine durante un temporale generatosi dall esplosione di un acceleratore di particelle dello STAR Labs. In coma per nove mesi, Barry si risveglia nello STAR Labs, sotto le cure del suo idolo scienziato, il dottor Harrison Wells, insieme ai suoi collaboratori, la dottoressa Caitlin Snow e Cisco Ramon. Barry impara rapidamente che può muoversi a velocità straordinarie, e che oltre a lui ci sono altri "metaumani" creati dall esplosione.';
$movieUno->regista = 'Andrew Kreisberg';

var_dump($movieUno);
echo $movieUno->titolo .' è uscito ' .$movieUno->getYears($movieUno->dataUscita) .' anni fa';

$movieDue = new Movie(3);
$movieDue->titolo = 'Joker';
$movieDue->dataUscita = 2019;
$movieDue->genere = 'Crime';
$movieDue->durata = '2h 2m';
$movieDue->descrizione = 'Arthur Fleck vive con l anziana madre in un palazzone fatiscente e sbarca il lunario facendo pubblicità per la strada travestito da clown, in attesa di avere il giusto materiale per realizzare il desiderio di fare il comico. La sua vita, però, è una tragedia: ignorato, calpestato, bullizzato, preso in giro da da chiunque, ha sviluppato un tic nervoso che lo fa ridere a sproposito incontrollabilmente, rendendolo inquietante e allontanando ulteriormente da lui ogni possibile relazione sociale. Ma un giorno Arthur non ce la fa più e reagisce violentemente, pistola alla mano. Mentre la polizia di Gotham City dà la caccia al clown killer, la popolazione lo elegge a eroe metropolitano, simbolo della rivolta degli oppressi contro l arroganza dei ricchi.';
$movieDue->regista = 'Todd Phillips';

var_dump($movieDue);
echo $movieDue->titolo .' è uscito ' .$movieDue->getYears($movieDue->dataUscita) .' anni fa';
