<?php

namespace SKuhnow\Elements;

class Element
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $symbol;

    /**
     * @var int
     */
    private $atomicNumber;

    private $atomicMass;

    /**
     * Element constructor.
     *
     * @param $name
     * @param $symbol
     * @param $atomicNumber
     * @param $atomicMass
     */
    public function __construct(
        $name,
        $symbol,
        $atomicNumber,
        $atomicMass
    ) {
        $this->name = $name;
        $this->symbol = $symbol;
        $this->atomicNumber = $atomicNumber;
        $this->atomicMass = $atomicMass;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @return int
     */
    public function getAtomicNumber()
    {
        return $this->atomicNumber;
    }

    /**
     * @return float
     */
    public function getAtomicMass()
    {
        return $this->atomicMass;
    }
}
