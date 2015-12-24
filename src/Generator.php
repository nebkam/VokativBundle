<?php

namespace Nebkam\Vokativ;

class Generator
	{
	/**
	 * @var array
	 * 	key - lowercase nominativ
	 *  value - null (no suffix) or array (number of characters to strip,suffix)
	 */
	protected $suffixes = array(
		'žarko' => null,
		'aleksa' => null,
		'aleksandra' => null,
		'ana' => null,
		'biljana' => null,
		'borivoje' => null,
		'branko' => null,
		'darko' => null,
		'dimitrije' => null,
		'đorđe' => null,
		'dragana' => null,
		'drago' => null,
		'gojko' => null,
		'gordana' => null,
		'jasmina' => null,
		'jelena' => null,
		'katarina' => null,
		'ljiljana' => null,
		'ljubiša' => null,
		'marijana' => null,
		'marina' => null,
		'marko' => null,
		'mihailo' => null,
		'mihajlo' => null,
		'mile' => null,
		'milena' => null,
		'milojko' => null,
		'mirko' => null,
		'momčilo' => null,
		'nebojša' => null,
		'nemanja' => null,
		'ostoja' => null,
		'pavle' => null,
		'rastko' => null,
		'sanja' => null,
		'slađana' => null,
		'snežana' => null,
		'sonja' => null,
		'stojanka' => null,
		'svetlana' => null,
		'tanja' => null,
		'tatjana' => null,
		'vera' => null,
		'vesna' => null,
		'zorana' => null,
		'slavko' => null,
		'radoje' => null,
		'boško' => null,
		'miško' => null,
		'vidoje' => null,
		'stanko' => null,
		'stanoje' => null,
		'zoki' => null,
		'nataša' => null,
		'natalija' => null,
		'tijana' => null,
		'luka' => null,
		'staša' => null,
		'anka' => null,
		'anda' => null,
		'branislava' => null,
		'bratislava' => null,
		'varvara' => null,
		'vojislava' => null,
		'veroslava' => null,
		'višeslava' => null,
		'dragoslava' => null,
		'eleonora' => null,
		'živoslava' => null,
		'zorislava' => null,
		'isidora' => null,
		'ivka' => null,
		'jagoda' => null,
		'krunoslava' => null,
		'leposava' => null,
		'ljeposava' => null,
		'leonida' => null,
		'leonora' => null,
		'matej' => null,
		'mateja' => null,
		'mileva' => null,
		'milesa' => null,
		'melisa' => null,
		'melita' => null,
		'mirosava' => null,
		'miroslava' => null,
		'ninoslava' => null,
		'negosava' => null,
		'olja' => null,
		'petra' => null,
		'prvoslava' => null,
		'roksanda' => null,
		'srbislava' => null,
		'svetislava' => null,
		'stanislava' => null,
		'simonida' => null,
		'tamara' => null,
		'teodora' => null,
		'todora' => null,
		'cane' => null,
		'hranislava' => null,
		'aleksandar' => [-2,'re'],
		'boban' => [0,'e'],
		'bogoljub' => [0,'e'],
		'bojan' => [0,'e'],
		'boris' => [0,'e'],
		'borislav' => [0,'e'],
		'dragan' => [0,'e'],
		'dragica' => [-1,'e'],
		'dragoljub' => [0,'e'],
		'dragomir' => [0,'e'],
		'dragoslav' => [0,'e'],
		'dušan' => [0,'e'],
		'dušica' => [-1,'e'],
		'fahrudin' => [0,'e'],
		'faruk' => [-1,'če'],
		'filip' => [0,'e'],
		'goran' => [0,'e'],
		'ivan' => [0,'e'],
		'ivica' => [-1,'e'],
		'jovan' => [0,'e'],
		'jovica' => [-1,'e'],
		'jugoslav' => [0,'e'],
		'ljubica' => [-1,'e'],
		'maja' => [-1,'o'],
		'marica' => [-1,'e'],
		'miladin' => [0,'e'],
		'milan' => [0,'e'],
		'milica' => [-1,'e'],
		'miloš' => [0,'e'],
		'milomir' => [0,'e'],
		'miodrag' => [-1,'že'],
		'milodrag' => [-1,'že'],
		'miroljub' => [0,'e'],
		'momir' => [0,'e'],
		'muhamed' => [0,'e'],
		'nenad' => [0,'e'],
		'osman' => [0,'e'],
		'petar' => [-2,'re'],
		'predrag' => [-2,'že'],
		'radojica' => [-1,'e'],
		'radomir' => [0,'e'],
		'radoslav' => [0,'e'],
		'senad' => [0,'e'],
		'slađan' => [0,'e'],
		'slavica' => [-1,'e'],
		'slobodan' => [0,'e'],
		'srboljub' => [0,'e'],
		'srđan' => [0,'e'],
		'stojan' => [0,'e'],
		'tomislav' => [0,'e'],
		'vladimir' => [0,'e'],
		'vladislav' => [0,'e'],
		'vojin' => [0,'e'],
		'vojislav' => [0,'e'],
		'vojkan' => [0,'e'],
		'vuk' => [-1,'če'],
		'zoran' => [0,'e'],
		'milutin' => [0,'e'],
		'dobrica' => [-1,'e'],
		'milojica' => [-1,'e'],
		'božidar' => [0,'e'],
		'mića' => [-1,'o'],
		'pera' => [-1,'o'],
		'bora' => [-1,'o'],
		'bogdan' => [0,'e'],
		'mitar' => [-2,'re'],
		'paja' => [-1,'o'],
		'srba' => [-1,'o'],
		'desimir' => [-1,'e'],
		'nata' => [-1,'o'],
		'damjan' => [0,'e'],
		'branislav' => [0,'e'],
		'aca' => [-1,'o'],
		'ratar' => [0,'e'],
		'peca' => [-1,'o'],
		'jela' => [-1,'o'],
		'ceca' => [-1,'o'],
		'mica' => [-1,'o'],
		'avram' => [0,'e'],
		'blaža' => [-1,'o'],
		'gavra' => [-1,'o'],
		'gaša' => [-1,'o'],
		'goga' => [-1,'o'],
		'dositej' => [0,'u'],
		'đura' => [-1,'o'],
		'zaga' => [-1,'o'],
		'zlata' => [-1,'o'],
		'jana' => [-1,'o'],
		'jevta' => [-1,'o'],
		'krsta' => [-1,'o'],
		'kruna' => [-1,'o'],
		'laza' => [-1,'o'],
		'mata' => [-1,'o'],
		'moša' => [-1,'o'],
		'mira' => [-1,'o'],
		'ruža' => [-1,'o'],
		'stavra' => [-1,'o'],
		'sima' => [-1,'o'],
		'stana' => [-1,'o'],
		'spira' => [-1,'o'],
		'špira' => [-1,'o'],
		'spiridon' => [0,'e'],
		'toma' => [-1,'o'],
		'tomica' => [-1,'e'],
		'toša' => [-1,'o'],
		'todor' => [0,'e'],
		'cana' => [-1,'o'],
		'ćira' => [-1,'o'],
		'cveta' => [-1,'o'],
		'šana' => [-1,'o'],
	);

	/**
	 * @param string $nominativ
	 * @return string
	 */
	public function generate($nominativ)
		{
		mb_internal_encoding("UTF-8");

		$normalized = mb_strtolower($nominativ);
		if (array_key_exists($normalized,$this->suffixes))
			{
			$modify = $this->suffixes[$normalized];
			if (is_null($modify))
				{
				return $nominativ;
				}
			else
				{
				$offset = $modify[0];
				$suffix = $modify[1];
				if ($offset === 0)
					{
					return $nominativ.$suffix;
					}
				else
					{
					return substr_replace($nominativ,$suffix,$offset);
					}
				}
			}

		if (mb_substr($normalized, -3) == 'tar' || mb_substr($normalized, -3) == 'dar') //PETAR, ALEKSANDAR
			{
			$vokativ = substr_replace($nominativ, 're', -2);
			}
		elseif(mb_substr($normalized, -3) == 'ica' && strlen($nominativ) > 4)	//MILICA , LJUBICA ALI NE  I MICA i CICA
			{
			$vokativ = substr_replace($nominativ, 'ce', -2);
			}
		elseif(mb_substr($normalized, -2) == 'ca')	//MACA, CECA...
			{
			$vokativ = substr_replace($nominativ, 'co', -2);
			}
		elseif(mb_substr($normalized, -2) == 'sa')	//PERSA, BOSA
			{
			$vokativ = substr_replace($nominativ, 'so', -2);
			}
		elseif(mb_substr($normalized, -4) == 'olac')    //KOLAC
			{
			$vokativ = substr_replace($nominativ, 'oče', -4);
			}
		elseif(mb_substr($normalized, -4) == 'alac')    //ZNALAC
			{
			$vokativ = substr_replace($nominativ, 'alče', -4);
			}
		elseif(mb_substr($normalized, -4) == 'ilac')    //MISLILAC
			{
			$vokativ = substr_replace($nominativ, 'ioče', -4);
			}
		elseif(mb_substr($normalized, -4) == 'elac')    //ŽETELAC
			{
			$vokativ = substr_replace($nominativ, 'eoče', -4);
			}
		elseif(mb_substr($normalized, -3) == 'sac')    //PISAC
			{
			$vokativ = substr_replace($nominativ, 'šče', -3);
			}
		elseif(mb_substr($normalized, -3) == 'rac')    //MUDRAC
			{
			$vokativ = substr_replace($nominativ, 'rče', -3);
			}
		elseif(mb_substr($normalized, -3) == 'vac')    //VALJEVAC
			{
			$vokativ = substr_replace($nominativ, 'vče', -3);
			}
		elseif((mb_substr($normalized, -2) == 'ka') && (strlen($nominativ) > 4))  //DARINKA, MILKA, BORKA, ALI NE I RAKA, MIKA
			{
			$vokativ = $nominativ;
			}
		elseif(mb_substr($normalized, -2) == 'ja' && mb_substr($normalized, -3) != 'ija' && mb_substr($normalized, -3) != 'dja' && mb_substr($normalized, -3) != 'nja') //MAJA ALI NE I MARIJA, SANJA, NITI PEDJA (NE PEĐA)
			{
			$vokativ = substr_replace($nominativ, 'jo', -2);
			}
		elseif(mb_substr($normalized, -2) == 'va' || mb_substr($normalized, -2) == 'da' || mb_substr($normalized, -2) == 'ba' || mb_substr($normalized, -2) == 'ka') //SAVA, DADA, SLOBA, RAKA
			{
			$vokativ = substr_replace($nominativ, 'o', -1);
			}
		elseif(mb_substr($normalized, -3) == 'ara' || mb_substr($normalized, -3) == 'era' || mb_substr($normalized, -3) == 'ora') //PERA, DARA, BORA
			{
			$vokativ = substr_replace($nominativ, 'ro', -2);
			}
		elseif(mb_substr($normalized, -1) == 'k') 	//CUTUK
			{
			$vokativ = substr_replace($nominativ, 'č', -1).'e';
			}
		elseif(mb_substr($normalized, -1) == 'g')		//PREDRAG
			{
			$vokativ = substr_replace($nominativ, 'ž', -1).'e';
			}
		//ć, đ, č, dž, š, ž, lj, nj, j
		elseif(mb_substr($normalized, -1) == 'ć' || mb_substr($normalized, -1) == 'đ' || mb_substr($normalized, -1) == 'č' || mb_substr($normalized, -2) == 'dž' || mb_substr($normalized, -1) == 'ž' || mb_substr($normalized, -2) == 'lj' || mb_substr($normalized, -2) == 'nj' || mb_substr($normalized, -1) == 'j')
			{
			$vokativ = $nominativ.'u';
			}
		elseif(mb_substr($normalized, -1) == 'a' || mb_substr($normalized, -1) == 'o' || mb_substr($normalized, -1) == 'e' || mb_substr($normalized, -1) == 'i') //VANJA, MARKO, MILE, MIKI
			{
			$vokativ = $nominativ;
			}
		else
			{
			$vokativ = $nominativ.'e';
			}
			
		return $vokativ;
		}
	}
