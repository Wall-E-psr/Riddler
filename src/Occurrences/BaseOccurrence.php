<?php

namespace DeGraciaMathieu\Riddler\Occurrences;

abstract class BaseOccurrence
{
    public function parse(array $dictionary)
    {
        $tmp = [];

        for ($i=0; $i < $this->size; $i++) {

            shuffle($dictionary);

            $tmp[] = $dictionary[0];
        }

       return $tmp;
    }

    /**
     * Retourne la taille de l'occurence
     *
     * @return integer
     */
    public function size()
    {
        return $this->size;
    }
}
