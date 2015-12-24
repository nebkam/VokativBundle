<?php

namespace Nebkam\Vokativ\Twig;

use Nebkam\Vokativ\Generator;

class VokativExtension extends \Twig_Extension
	{
	protected $generator;

	public function __construct(Generator $generator)
		{
		$this->generator = $generator;
		}

	public function getFilters()
		{
		return array(
			new \Twig_SimpleFilter('vokativ', array($this, 'generateVokativ')),
			);
		}

	public function generateVokativ($nominativ)
		{
		return $this->generator->generate($nominativ);
		}

	public function getName()
		{
		return 'vokativ_extension';
		}
	}