<?php

class Mots implements IteratorAggregate {
    private array $mots = [];
    public function getItems(): array
    {
        return $this->mots;
    }
    public function addItem($mot): void
    {
        $this->mots[] = $mot;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->mots);
    }
}