<?php

namespace SKuhnow\Elements\Tests;

use PHPUnit\Framework\TestCase;
use SKuhnow\Elements\Element;
use SKuhnow\Elements\Table;

class TableTest extends TestCase
{

    public function testAddElement()
    {
        $table = new Table();

        $elementHydrogen = new Element('Hydrogen', 'H', 1, 1.008);
        $elementHelium = new Element('Helium', 'He', 2, 4.002602);

        $table->addElement($elementHydrogen);
        $table->addElement($elementHelium);

        $this->assertCount(2, $table->getElements());
        $this->assertSame($elementHelium, $table->getElementBySymbol('He'));
        $this->assertSame($elementHelium, $table->getElementByAtomicNumber(2));
    }
}
