<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Monedas
 *
 * @ORM\Table(name="monedas", uniqueConstraints={@ORM\UniqueConstraint(name="moneda", columns={"moneda"})})
 * @ORM\Entity
 *
 */
class Monedas
{
    /**
     * @var string
     *
     * @ORM\Column(name="moneda", type="string", length=30, nullable=false)
     */
    private $moneda;

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
     * Set moneda
     *
     * @param string $moneda
     * @return Monedas
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
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

    public function __toString()
    {
        return $this->getMoneda();
    }
}
