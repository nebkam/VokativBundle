<?php

namespace Nebkam\Vokativ;

class Generator
	{
	/**
	 * @param string $nominativ
	 * @return string
	 */
	public function generate($nominativ)
		{
		mb_internal_encoding("UTF-8");

		if (mb_substr($nominativ, -3) == 'tar' || mb_substr($nominativ, -3) == 'dar') //PETAR, ALEKSANDAR
			{
			$vokativ = substr_replace($nominativ, 're', -2);
			}
		elseif(mb_substr($nominativ, -3) == 'ica' && strlen($nominativ) > 4)	//MILICA , LJUBICA ALI NE  I MICA i CICA
			{
			$vokativ = substr_replace($nominativ, 'ce', -2);
			}
		elseif(mb_substr($nominativ, -2) == 'ca')	//MACA, CECA...
			{
			$vokativ = substr_replace($nominativ, 'co', -2);
			}
		elseif(mb_substr($nominativ, -2) == 'sa')	//PERSA, BOSA
			{
			$vokativ = substr_replace($nominativ, 'SO', -2);
			}
		elseif(mb_substr($nominativ, -4) == 'olac')    //KOLAC
			{
			$vokativ = substr_replace($nominativ, 'oče', -4);
			}
		elseif(mb_substr($nominativ, -4) == 'alac')    //ZNALAC
			{
			$vokativ = substr_replace($nominativ, 'alče', -4);
			}
		elseif(mb_substr($nominativ, -4) == 'ilac')    //MISLILAC
			{
			$vokativ = substr_replace($nominativ, 'ioče', -4);
			}
		elseif(mb_substr($nominativ, -4) == 'elac')    //ŽETELAC
			{
			$vokativ = substr_replace($nominativ, 'eoče', -4);
			}
		elseif(mb_substr($nominativ, -3) == 'sac')    //PISAC
			{
			$vokativ = substr_replace($nominativ, 'šče', -3);
			}
		elseif(mb_substr($nominativ, -3) == 'rac')    //MUDRAC
			{
			$vokativ = substr_replace($nominativ, 'rče', -3);
			}
		elseif(mb_substr($nominativ, -3) == 'vac')    //VALJEVAC
			{
			$vokativ = substr_replace($nominativ, 'vče', -3);
			}
		elseif((mb_substr($nominativ, -2) == 'ka') && (strlen($nominativ) > 4))  //DARINKA, MILKA, BORKA, ALI NE I RAKA, MIKA
			{
			$vokativ = $nominativ;
			}
		elseif(mb_substr($nominativ, -2) == 'ja' && mb_substr($nominativ, -3) != 'ija' && mb_substr($nominativ, -3) != 'dja' && mb_substr($nominativ, -3) != 'nja') //MAJA ALI NE I MARIJA, SANJA, NITI PEDJA (NE PEĐA)
			{
			$vokativ = substr_replace($nominativ, 'jo', -2);
			}
		elseif(mb_substr($nominativ, -2) == 'va' || mb_substr($nominativ, -2) == 'da' || mb_substr($nominativ, -2) == 'ba' || mb_substr($nominativ, -2) == 'ka') //SAVA, DADA, SLOBA, RAKA
			{
			$vokativ = substr_replace($nominativ, 'o', -1);
			}
		elseif(mb_substr($nominativ, -3) == 'ara' || mb_substr($nominativ, -3) == 'era' || mb_substr($nominativ, -3) == 'ora') //PERA, DARA, BORA
			{
			$vokativ = substr_replace($nominativ, 'ro', -2);
			}
		elseif(mb_substr($nominativ, -1) == 'k') 	//CUTUK
			{
			$vokativ = substr_replace($nominativ, 'č', -1).'e';
			}
		elseif(mb_substr($nominativ, -1) == 'g')		//PREDRAG
			{
			$vokativ = substr_replace($nominativ, 'ž', -1).'e';
			}
		//ć, đ, č, dž, š, ž, lj, nj, j
		elseif(mb_substr($nominativ, -1) == 'ć' || mb_substr($nominativ, -1) == 'đ' || mb_substr($nominativ, -1) == 'č' || mb_substr($nominativ, -2) == 'dž' || mb_substr($nominativ, -1) == 'š' || mb_substr($nominativ, -1) == 'ž' || mb_substr($nominativ, -2) == 'lj' || mb_substr($nominativ, -2) == 'nj' || mb_substr($nominativ, -1) == 'j')
			{
			$vokativ = $nominativ.'u';
			}
		elseif(mb_substr($nominativ, -1) == 'a' || mb_substr($nominativ, -1) == 'o' || mb_substr($nominativ, -1) == 'e' || mb_substr($nominativ, -1) == 'i') //VANJA, MARKO, MILE, MIKI
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
