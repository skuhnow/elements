<?php

namespace SKuhnow\Elements;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;

class Table
{

    /**
     * @var Collection
     */
    private $elements;

    public function __construct()
    {
        $this->elements = new ArrayCollection();
    }

    public function addElement(Element $element)
    {
        $this->elements->add($element);
    }

    /**
     * @return Collection
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param $symbol
     *
     * @return Element
     */
    public function getElementBySymbol($symbol)
    {
        $criteria = Criteria::create()
            ->where(Criteria::expr()->eq('symbol', $symbol))
            ->setFirstResult(0)
            ->setMaxResults(1);

        return $this->getElements()->matching($criteria)->first();
    }

    public function getElementByAtomicNumber($atomicNumber)
    {
        $criteria = Criteria::create()
            ->where(Criteria::expr()->eq('atomicNumber', $atomicNumber))
            ->setFirstResult(0)
            ->setMaxResults(1);

        return $this->getElements()->matching($criteria)->first();
    }
}
