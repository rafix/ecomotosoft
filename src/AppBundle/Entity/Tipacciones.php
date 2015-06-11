<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tipacciones
 *
 * @ORM\Table(name="tipacciones", uniqueConstraints={@ORM\UniqueConstraint(name="tipaccion_1", columns={"tipaccion_1"}), @ORM\UniqueConstraint(name="tipaccion_2", columns={"tipaccion_2"}), @ORM\UniqueConstraint(name="tipaccion_3", columns={"tipaccion_3"}), @ORM\UniqueConstraint(name="tipaccion_4", columns={"tipaccion_4"}), @ORM\UniqueConstraint(name="tipaccion_5", columns={"tipaccion_5"}), @ORM\UniqueConstraint(name="tipaccion_6", columns={"tipaccion_6"})})
 * @ORM\Entity
 * @Rest\Resource(name="tipacciones")
 */
class Tipacciones
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipaccion_1", type="string", length=20, nullable=false)
     */
    private $tipaccion1;

    /**
     * @var string
     *
     * @ORM\Column(name="tipaccion_2", type="string", length=20, nullable=true)
     */
    private $tipaccion2;

    /**
     * @var string
     *
     * @ORM\Column(name="tipaccion_3", type="string", length=20, nullable=true)
     */
    private $tipaccion3;

    /**
     * @var string
     *
     * @ORM\Column(name="tipaccion_4", type="string", length=20, nullable=true)
     */
    private $tipaccion4;

    /**
     * @var string
     *
     * @ORM\Column(name="tipaccion_5", type="string", length=20, nullable=true)
     */
    private $tipaccion5;

    /**
     * @var string
     *
     * @ORM\Column(name="tipaccion_6", type="string", length=20, nullable=true)
     */
    private $tipaccion6;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipaccion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipaccion;



    /**
     * Set tipaccion1
     *
     * @param string $tipaccion1
     * @return Tipacciones
     */
    public function setTipaccion1($tipaccion1)
    {
        $this->tipaccion1 = $tipaccion1;

        return $this;
    }

    /**
     * Get tipaccion1
     *
     * @return string 
     */
    public function getTipaccion1()
    {
        return $this->tipaccion1;
    }

    /**
     * Set tipaccion2
     *
     * @param string $tipaccion2
     * @return Tipacciones
     */
    public function setTipaccion2($tipaccion2)
    {
        $this->tipaccion2 = $tipaccion2;

        return $this;
    }

    /**
     * Get tipaccion2
     *
     * @return string 
     */
    public function getTipaccion2()
    {
        return $this->tipaccion2;
    }

    /**
     * Set tipaccion3
     *
     * @param string $tipaccion3
     * @return Tipacciones
     */
    public function setTipaccion3($tipaccion3)
    {
        $this->tipaccion3 = $tipaccion3;

        return $this;
    }

    /**
     * Get tipaccion3
     *
     * @return string 
     */
    public function getTipaccion3()
    {
        return $this->tipaccion3;
    }

    /**
     * Set tipaccion4
     *
     * @param string $tipaccion4
     * @return Tipacciones
     */
    public function setTipaccion4($tipaccion4)
    {
        $this->tipaccion4 = $tipaccion4;

        return $this;
    }

    /**
     * Get tipaccion4
     *
     * @return string 
     */
    public function getTipaccion4()
    {
        return $this->tipaccion4;
    }

    /**
     * Set tipaccion5
     *
     * @param string $tipaccion5
     * @return Tipacciones
     */
    public function setTipaccion5($tipaccion5)
    {
        $this->tipaccion5 = $tipaccion5;

        return $this;
    }

    /**
     * Get tipaccion5
     *
     * @return string 
     */
    public function getTipaccion5()
    {
        return $this->tipaccion5;
    }

    /**
     * Set tipaccion6
     *
     * @param string $tipaccion6
     * @return Tipacciones
     */
    public function setTipaccion6($tipaccion6)
    {
        $this->tipaccion6 = $tipaccion6;

        return $this;
    }

    /**
     * Get tipaccion6
     *
     * @return string 
     */
    public function getTipaccion6()
    {
        return $this->tipaccion6;
    }

    /**
     * Get idTipaccion
     *
     * @return integer 
     */
    public function getIdTipaccion()
    {
        return $this->idTipaccion;
    }
}
