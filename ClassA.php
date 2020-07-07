<?php

class A
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
