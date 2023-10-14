<?php

namespace clone;

class Shop
{
    private $theme;
    public function __clone()
    {
        $this->theme = clone $this->theme;
    }

    public function setTheme(string $theme): void
    {
        $this->theme = $theme;
    }
    public function getTheme(): string
    {
        return $this->theme;
    }
}