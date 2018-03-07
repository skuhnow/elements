<?php

namespace SKuhnow\Elements\Tests\Factory;

use PHPUnit\Framework\TestCase;
use SKuhnow\Elements\Factory\TableFactory;
use SKuhnow\Elements\Table;

class TableFactoryTest extends TestCase
{

    public function testCreate()
    {
        $table = TableFactory::createTable();

        $this->assertInstanceOf(Table::class, $table);
    }
}
