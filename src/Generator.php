<?php

namespace Nebkam\Vokativ;

class Generator
	{
	/**
	 * @param string $ime
	 * @return string
	 */
	public function generate($ime)
		{
		if (substr($ime, -3) == 'tar' || substr($ime, -3) == 'dar') //PETAR, ALEKSANDAR
			{
			$vokativ = substr_replace($ime, 're', -2);
			}
		elseif(substr($ime, -3) == 'ica' && strlen($ime) > 4)	//MILICA , LJUBICA ALI NE  I MICA i CICA
			{
			$vokativ = substr_replace($ime, 'ce', -2);
			}
		elseif(substr($ime, -2) == 'ca')	//MACA, CECA...
			{
			$vokativ = substr_replace($ime, 'co', -2);
			}
		elseif(substr($ime, -2) == 'sa')	//PERSA, BOSA
			{
			$vokativ = substr_replace($ime, 'SO', -2);
			}
		elseif(substr($ime, -4) == 'olac')    //KOLAC
			{
			$vokativ = substr_replace($ime, 'oče', -4);
			}
		elseif(substr($ime, -4) == 'alac')    //ZNALAC
			{
			$vokativ = substr_replace($ime, 'alče', -4);
			}
		elseif(substr($ime, -4) == 'ilac')    //MISLILAC
			{
			$vokativ = substr_replace($ime, 'ioče', -4);
			}
		elseif(substr($ime, -4) == 'elac')    //ŽETELAC
			{
			$vokativ = substr_replace($ime, 'eoče', -4);
			}
		elseif(substr($ime, -3) == 'sac')    //PISAC
			{
			$vokativ = substr_replace($ime, 'šče', -3);
			}
		elseif(substr($ime, -3) == 'rac')    //MUDRAC
			{
			$vokativ = substr_replace($ime, 'rče', -3);
			}
		elseif(substr($ime, -3) == 'vac')    //VALJEVAC
			{
			$vokativ = substr_replace($ime, 'vče', -3);
			}
		elseif((substr($ime, -2) == 'ka') && (strlen($ime) > 4))  //DARINKA, MILKA, BORKA, ALI NE I RAKA, MIKA
			{
			$vokativ = $ime;
			}
		elseif(substr($ime, -2) == 'ja' && substr($ime, -3) != 'ija' && substr($ime, -3) != 'dja' && substr($ime, -3) != 'nja') //MAJA ALI NE I MARIJA, SANJA, NITI PEDJA (NE PEĐA)
			{
			$vokativ = substr_replace($ime, 'jo', -2);
			}
		elseif(substr($ime, -2) == 'va' || substr($ime, -2) == 'da' || substr($ime, -2) == 'ba' || substr($ime, -2) == 'ka') //SAVA, DADA, SLOBA, RAKA
			{
			$vokativ = substr_replace($ime, 'o', -1);
			}
		elseif(substr($ime, -3) == 'ara' || substr($ime, -3) == 'era' || substr($ime, -3) == 'ora') //PERA, DARA, BORA
			{
			$vokativ = substr_replace($ime, 'ro', -2);
			}
		elseif(substr($ime, -1) == 'k') 	//CUTUK
			{
			$vokativ = substr_replace($ime, 'č', -1).'e';
			}
		elseif(substr($ime, -1) == 'g')		//PREDRAG
			{
			$vokativ = substr_replace($ime, 'ž', -1).'e';
			}
		//ć, đ, č, dž, š, ž, lj, nj, j
		elseif($this->my_substr($ime, -1) == 'ć' || $this->my_substr($ime, -1) == 'đ' || $this->my_substr($ime, -1) == 'č' || $this->my_substr($ime, -2) == 'dž' || $this->my_substr($ime, -1) == 'š' || $this->my_substr($ime, -1) == 'ž' || $this->my_substr($ime, -2) == 'lj' || $this->my_substr($ime, -2) == 'nj' || $this->my_substr($ime, -1) == 'j')
			{
			$vokativ = $ime.'u';
			}
		elseif(substr($ime, -1) == 'a' || substr($ime, -1) == 'o' || substr($ime, -1) == 'e' || substr($ime, -1) == 'i') //VANJA, MARKO, MILE, MIKI
			{
			$vokativ = $ime;
			}
		else
			{
			$vokativ = $ime.'e';
			}
			
		return $vokativ;
		}
	}
