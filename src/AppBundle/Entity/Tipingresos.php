<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tipingresos
 *
 * @ORM\Table(name="tipingresos", uniqueConstraints={@ORM\UniqueConstraint(name="tipingreso_1", columns={"tipingreso_1"}), @ORM\UniqueConstraint(name="tipingreso_2", columns={"tipingreso_2"}), @ORM\UniqueConstraint(name="tipingreso_3", columns={"tipingreso_3"}), @ORM\UniqueConstraint(name="tipingreso_4", columns={"tipingreso_4"}), @ORM\UniqueConstraint(name="tipingreso_5", columns={"tipingreso_5"}), @ORM\UniqueConstraint(name="tipingreso_6", columns={"tipingreso_6"})})
 * @ORM\Entity
 * @Rest\Resource(name="tipingresos")
 */
class Tipingresos
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipingreso_1", type="string", length=20, nullable=false)
     */
    private $tipingreso1;

    /**
     * @var string
     *
     * @ORM\Column(name="tipingreso_2", type="string", length=20, nullable=true)
     */
    private $tipingreso2;

    /**
     * @var string
     *
     * @ORM\Column(name="tipingreso_3", type="string", length=20, nullable=true)
     */
    private $tipingreso3;

    /**
     * @var string
     *
     * @ORM\Column(name="tipingreso_4", type="string", length=20, nullable=true)
     */
    private $tipingreso4;

    /**
     * @var string
     *
     * @ORM\Column(name="tipingreso_5", type="string", length=20, nullable=true)
     */
    private $tipingreso5;

    /**
     * @var string
     *
     * @ORM\Column(name="tipingreso_6", type="string", length=20, nullable=true)
     */
    private $tipingreso6;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipingreso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipingreso;



    /**
     * Set tipingreso1
     *
     * @param string $tipingreso1
     * @return Tipingresos
     */
    public function setTipingreso1($tipingreso1)
    {
        $this->tipingreso1 = $tipingreso1;

        return $this;
    }

    /**
     * Get tipingreso1
     *
     * @return string 
     */
    public function getTipingreso1()
    {
        return $this->tipingreso1;
    }

    /**
     * Set tipingreso2
     *
     * @param string $tipingreso2
     * @return Tipingresos
     */
    public function setTipingreso2($tipingreso2)
    {
        $this->tipingreso2 = $tipingreso2;

        return $this;
    }

    /**
     * Get tipingreso2
     *
     * @return string 
     */
    public function getTipingreso2()
    {
        return $this->tipingreso2;
    }

    /**
     * Set tipingreso3
     *
     * @param string $tipingreso3
     * @return Tipingresos
     */
    public function setTipingreso3($tipingreso3)
    {
        $this->tipingreso3 = $tipingreso3;

        return $this;
    }

    /**
     * Get tipingreso3
     *
     * @return string 
     */
    public function getTipingreso3()
    {
        return $this->tipingreso3;
    }

    /**
     * Set tipingreso4
     *
     * @param string $tipingreso4
     * @return Tipingresos
     */
    public function setTipingreso4($tipingreso4)
    {
        $this->tipingreso4 = $tipingreso4;

        return $this;
    }

    /**
     * Get tipingreso4
     *
     * @return string 
     */
    public function getTipingreso4()
    {
        return $this->tipingreso4;
    }

    /**
     * Set tipingreso5
     *
     * @param string $tipingreso5
     * @return Tipingresos
     */
    public function setTipingreso5($tipingreso5)
    {
        $this->tipingreso5 = $tipingreso5;

        return $this;
    }

    /**
     * Get tipingreso5
     *
     * @return string 
     */
    public function getTipingreso5()
    {
        return $this->tipingreso5;
    }

    /**
     * Set tipingreso6
     *
     * @param string $tipingreso6
     * @return Tipingresos
     */
    public function setTipingreso6($tipingreso6)
    {
        $this->tipingreso6 = $tipingreso6;

        return $this;
    }

    /**
     * Get tipingreso6
     *
     * @return string 
     */
    public function getTipingreso6()
    {
        return $this->tipingreso6;
    }

    /**
     * Get idTipingreso
     *
     * @return integer 
     */
    public function getIdTipingreso()
    {
        return $this->idTipingreso;
    }
}
