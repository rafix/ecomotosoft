<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Monedas
 *
 * @ORM\Table(name="monedas", uniqueConstraints={@ORM\UniqueConstraint(name="moneda_1", columns={"moneda_1"}), @ORM\UniqueConstraint(name="moneda_2", columns={"moneda_2"}), @ORM\UniqueConstraint(name="moneda_3", columns={"moneda_3"}), @ORM\UniqueConstraint(name="moneda_4", columns={"moneda_4"}), @ORM\UniqueConstraint(name="moneda_5", columns={"moneda_5"}), @ORM\UniqueConstraint(name="moneda_6", columns={"moneda_6"})})
 * @ORM\Entity
 * @Rest\Resource(name="monedas")
 */
class Monedas
{
    /**
     * @var string
     *
     * @ORM\Column(name="moneda_1", type="string", length=30, nullable=false)
     */
    private $moneda1;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda_2", type="string", length=30, nullable=true)
     */
    private $moneda2;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda_3", type="string", length=30, nullable=true)
     */
    private $moneda3;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda_4", type="string", length=30, nullable=true)
     */
    private $moneda4;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda_5", type="string", length=30, nullable=true)
     */
    private $moneda5;

    /**
     * @var string
     *
     * @ORM\Column(name="moneda_6", type="string", length=30, nullable=true)
     */
    private $moneda6;

    /**
     * @var string
     *
     * @ORM\Column(name="simbolo", type="string", length=5, nullable=false)
     */
    private $simbolo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcambio", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $tipcambio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_moneda", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMoneda;



    /**
     * Set moneda1
     *
     * @param string $moneda1
     * @return Monedas
     */
    public function setMoneda1($moneda1)
    {
        $this->moneda1 = $moneda1;

        return $this;
    }

    /**
     * Get moneda1
     *
     * @return string 
     */
    public function getMoneda1()
    {
        return $this->moneda1;
    }

    /**
     * Set moneda2
     *
     * @param string $moneda2
     * @return Monedas
     */
    public function setMoneda2($moneda2)
    {
        $this->moneda2 = $moneda2;

        return $this;
    }

    /**
     * Get moneda2
     *
     * @return string 
     */
    public function getMoneda2()
    {
        return $this->moneda2;
    }

    /**
     * Set moneda3
     *
     * @param string $moneda3
     * @return Monedas
     */
    public function setMoneda3($moneda3)
    {
        $this->moneda3 = $moneda3;

        return $this;
    }

    /**
     * Get moneda3
     *
     * @return string 
     */
    public function getMoneda3()
    {
        return $this->moneda3;
    }

    /**
     * Set moneda4
     *
     * @param string $moneda4
     * @return Monedas
     */
    public function setMoneda4($moneda4)
    {
        $this->moneda4 = $moneda4;

        return $this;
    }

    /**
     * Get moneda4
     *
     * @return string 
     */
    public function getMoneda4()
    {
        return $this->moneda4;
    }

    /**
     * Set moneda5
     *
     * @param string $moneda5
     * @return Monedas
     */
    public function setMoneda5($moneda5)
    {
        $this->moneda5 = $moneda5;

        return $this;
    }

    /**
     * Get moneda5
     *
     * @return string 
     */
    public function getMoneda5()
    {
        return $this->moneda5;
    }

    /**
     * Set moneda6
     *
     * @param string $moneda6
     * @return Monedas
     */
    public function setMoneda6($moneda6)
    {
        $this->moneda6 = $moneda6;

        return $this;
    }

    /**
     * Get moneda6
     *
     * @return string 
     */
    public function getMoneda6()
    {
        return $this->moneda6;
    }

    /**
     * Set simbolo
     *
     * @param string $simbolo
     * @return Monedas
     */
    public function setSimbolo($simbolo)
    {
        $this->simbolo = $simbolo;

        return $this;
    }

    /**
     * Get simbolo
     *
     * @return string 
     */
    public function getSimbolo()
    {
        return $this->simbolo;
    }

    /**
     * Set tipcambio
     *
     * @param string $tipcambio
     * @return Monedas
     */
    public function setTipcambio($tipcambio)
    {
        $this->tipcambio = $tipcambio;

        return $this;
    }

    /**
     * Get tipcambio
     *
     * @return string 
     */
    public function getTipcambio()
    {
        return $this->tipcambio;
    }

    /**
     * Get idMoneda
     *
     * @return integer 
     */
    public function getIdMoneda()
    {
        return $this->idMoneda;
    }
}
