<?php
/**
 * Created by PhpStorm.
 * User: nickleus
 * Date: 20/12/17
 * Time: 14:03
 */

class Hero
{
    private $arme;
    private $name;
    private $pv = 100;
    protected $defence;

    /**
     * @return mixed
     */
    public function getArme()
    {
        return $this->arme;
    }

    /**
     * @param mixed $arme
     */
    public function setArme(Arme $arme)
    {
        $this->arme = $arme;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getPv(): int
    {
        return $this->pv;
    }

    /**
     * @param int $pv
     */
    public function setPv(int $pv)
    {
        $this->pv = $pv;
    }

    /**
     * @return mixed
     */
    public function getAttaque()
    {
        var_dump("PA => " . $this->arme->getPa());
        return $this->arme->getPa();
    }

    /**
     * @return mixed
     */
    public function getDefence()
    {
        return $this->defence;
    }

    /**
     * @param mixed $defence
     */
    public function setDefence($defence)
    {
        $this->defence = $defence;
    }

    public function attaque(int $pa) {
        var_dump($this->getName());
        var_dump("def =>" . $this->getDefence());
        var_dump("PA => " . $pa);
        if($pa > $this->getDefence()) {
            $this->setPv($this->getPv() - ($pa - $this->getDefence()));
        }
        var_dump($this->getPv());
        var_dump($this->getDefence());
    }
}