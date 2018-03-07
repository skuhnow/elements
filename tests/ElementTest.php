<?php

namespace SKuhnow\Elements\Tests;

use PHPUnit\Framework\TestCase;
use SKuhnow\Elements\Element;

class ElementTest extends TestCase
{

    public function testAddElement()
    {
        $element = new Element('Hydrogen', 'H', 1, 5);

        $this->assertSame('Hydrogen', $element->getName());
        $this->assertSame('H', $element->getSymbol());
        $this->assertSame(1, $element->getAtomicNumber());
        $this->assertSame(5, $element->getAtomicMass());
    }
}
