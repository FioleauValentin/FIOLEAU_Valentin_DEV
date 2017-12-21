<?php

class Arme {
    private $name;

    private $pa;

    public function __construct(string $name, int $pa) {
        $this->name = $name;
        $this->pa = $pa;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getPa(): int
    {
        return $this->pa;
    }

    /**
     * @param int $pa
     */
    public function setPa(int $pa)
    {
        $this->pa = $pa;
    }
}
