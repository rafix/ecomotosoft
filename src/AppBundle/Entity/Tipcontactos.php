<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tipcontactos
 *
 * @ORM\Table(name="tipcontactos", uniqueConstraints={@ORM\UniqueConstraint(name="tipcontacto_1", columns={"tipcontacto_1"}), @ORM\UniqueConstraint(name="tipcontacto_2", columns={"tipcontacto_2"}), @ORM\UniqueConstraint(name="tipcontacto_3", columns={"tipcontacto_3"}), @ORM\UniqueConstraint(name="tipcontacto_4", columns={"tipcontacto_4"}), @ORM\UniqueConstraint(name="tipcontacto_5", columns={"tipcontacto_5"}), @ORM\UniqueConstraint(name="tipcontacto_6", columns={"tipcontacto_6"})})
 * @ORM\Entity
 * @Rest\Resource(name="tipcontactos")
 */
class Tipcontactos
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipcontacto_1", type="string", length=20, nullable=false)
     */
    private $tipcontacto1;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcontacto_2", type="string", length=20, nullable=true)
     */
    private $tipcontacto2;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcontacto_3", type="string", length=20, nullable=true)
     */
    private $tipcontacto3;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcontacto_4", type="string", length=20, nullable=true)
     */
    private $tipcontacto4;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcontacto_5", type="string", length=20, nullable=true)
     */
    private $tipcontacto5;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcontacto_6", type="string", length=20, nullable=true)
     */
    private $tipcontacto6;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipcontacto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipcontacto;



    /**
     * Set tipcontacto1
     *
     * @param string $tipcontacto1
     * @return Tipcontactos
     */
    public function setTipcontacto1($tipcontacto1)
    {
        $this->tipcontacto1 = $tipcontacto1;

        return $this;
    }

    /**
     * Get tipcontacto1
     *
     * @return string 
     */
    public function getTipcontacto1()
    {
        return $this->tipcontacto1;
    }

    /**
     * Set tipcontacto2
     *
     * @param string $tipcontacto2
     * @return Tipcontactos
     */
    public function setTipcontacto2($tipcontacto2)
    {
        $this->tipcontacto2 = $tipcontacto2;

        return $this;
    }

    /**
     * Get tipcontacto2
     *
     * @return string 
     */
    public function getTipcontacto2()
    {
        return $this->tipcontacto2;
    }

    /**
     * Set tipcontacto3
     *
     * @param string $tipcontacto3
     * @return Tipcontactos
     */
    public function setTipcontacto3($tipcontacto3)
    {
        $this->tipcontacto3 = $tipcontacto3;

        return $this;
    }

    /**
     * Get tipcontacto3
     *
     * @return string 
     */
    public function getTipcontacto3()
    {
        return $this->tipcontacto3;
    }

    /**
     * Set tipcontacto4
     *
     * @param string $tipcontacto4
     * @return Tipcontactos
     */
    public function setTipcontacto4($tipcontacto4)
    {
        $this->tipcontacto4 = $tipcontacto4;

        return $this;
    }

    /**
     * Get tipcontacto4
     *
     * @return string 
     */
    public function getTipcontacto4()
    {
        return $this->tipcontacto4;
    }

    /**
     * Set tipcontacto5
     *
     * @param string $tipcontacto5
     * @return Tipcontactos
     */
    public function setTipcontacto5($tipcontacto5)
    {
        $this->tipcontacto5 = $tipcontacto5;

        return $this;
    }

    /**
     * Get tipcontacto5
     *
     * @return string 
     */
    public function getTipcontacto5()
    {
        return $this->tipcontacto5;
    }

    /**
     * Set tipcontacto6
     *
     * @param string $tipcontacto6
     * @return Tipcontactos
     */
    public function setTipcontacto6($tipcontacto6)
    {
        $this->tipcontacto6 = $tipcontacto6;

        return $this;
    }

    /**
     * Get tipcontacto6
     *
     * @return string 
     */
    public function getTipcontacto6()
    {
        return $this->tipcontacto6;
    }

    /**
     * Get idTipcontacto
     *
     * @return integer 
     */
    public function getIdTipcontacto()
    {
        return $this->idTipcontacto;
    }

    public function __toString()
    {
        return $this->getTipcontacto1();
    }
}
