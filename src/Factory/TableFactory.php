<?php

namespace SKuhnow\Elements\Factory;

use SKuhnow\Elements\Element;
use SKuhnow\Elements\Table;

class TableFactory
{

    /**
     * @return Table
     */
    public static function createTable()
    {
        $jsonContent = file_get_contents(__DIR__ . '/../../res/elements.json');
        $elements = json_decode($jsonContent, true);
        $elements = $elements['elements'];

        $table = new Table();

        foreach ($elements as $element) {
            $element = new Element(
                $element['name'],
                $element['symbol'],
                $element['number'],
                $element['atomic_mass']
            );

            $table->addElement($element);
        }

        return $table;
    }
}
