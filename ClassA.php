<?php

class A
{
    private $name;

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
