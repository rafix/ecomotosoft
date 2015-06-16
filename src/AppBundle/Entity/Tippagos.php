<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tippagos
 *
 * @ORM\Table(name="tippagos", uniqueConstraints={@ORM\UniqueConstraint(name="tippago_1", columns={"tippago_1"}), @ORM\UniqueConstraint(name="tippago_2", columns={"tippago_2"}), @ORM\UniqueConstraint(name="tippago_3", columns={"tippago_3"}), @ORM\UniqueConstraint(name="tippago_4", columns={"tippago_4"}), @ORM\UniqueConstraint(name="tippago_5", columns={"tippago_5"}), @ORM\UniqueConstraint(name="tippago_6", columns={"tippago_6"})})
 * @ORM\Entity
 *
 */
class Tippagos
{
    /**
     * @var string
     *
     * @ORM\Column(name="tippago_1", type="string", length=30, nullable=false)
     */
    private $tippago1;

    /**
     * @var string
     *
     * @ORM\Column(name="tippago_2", type="string", length=30, nullable=true)
     */
    private $tippago2;

    /**
     * @var string
     *
     * @ORM\Column(name="tippago_3", type="string", length=30, nullable=true)
     */
    private $tippago3;

    /**
     * @var string
     *
     * @ORM\Column(name="tippago_4", type="string", length=30, nullable=true)
     */
    private $tippago4;

    /**
     * @var string
     *
     * @ORM\Column(name="tippago_5", type="string", length=30, nullable=true)
     */
    private $tippago5;

    /**
     * @var string
     *
     * @ORM\Column(name="tippago_6", type="string", length=30, nullable=true)
     */
    private $tippago6;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tippago", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTippago;



    /**
     * Set tippago1
     *
     * @param string $tippago1
     * @return Tippagos
     */
    public function setTippago1($tippago1)
    {
        $this->tippago1 = $tippago1;

        return $this;
    }

    /**
     * Get tippago1
     *
     * @return string 
     */
    public function getTippago1()
    {
        return $this->tippago1;
    }

    /**
     * Set tippago2
     *
     * @param string $tippago2
     * @return Tippagos
     */
    public function setTippago2($tippago2)
    {
        $this->tippago2 = $tippago2;

        return $this;
    }

    /**
     * Get tippago2
     *
     * @return string 
     */
    public function getTippago2()
    {
        return $this->tippago2;
    }

    /**
     * Set tippago3
     *
     * @param string $tippago3
     * @return Tippagos
     */
    public function setTippago3($tippago3)
    {
        $this->tippago3 = $tippago3;

        return $this;
    }

    /**
     * Get tippago3
     *
     * @return string 
     */
    public function getTippago3()
    {
        return $this->tippago3;
    }

    /**
     * Set tippago4
     *
     * @param string $tippago4
     * @return Tippagos
     */
    public function setTippago4($tippago4)
    {
        $this->tippago4 = $tippago4;

        return $this;
    }

    /**
     * Get tippago4
     *
     * @return string 
     */
    public function getTippago4()
    {
        return $this->tippago4;
    }

    /**
     * Set tippago5
     *
     * @param string $tippago5
     * @return Tippagos
     */
    public function setTippago5($tippago5)
    {
        $this->tippago5 = $tippago5;

        return $this;
    }

    /**
     * Get tippago5
     *
     * @return string 
     */
    public function getTippago5()
    {
        return $this->tippago5;
    }

    /**
     * Set tippago6
     *
     * @param string $tippago6
     * @return Tippagos
     */
    public function setTippago6($tippago6)
    {
        $this->tippago6 = $tippago6;

        return $this;
    }

    /**
     * Get tippago6
     *
     * @return string 
     */
    public function getTippago6()
    {
        return $this->tippago6;
    }

    /**
     * Get idTippago
     *
     * @return integer 
     */
    public function getIdTippago()
    {
        return $this->idTippago;
    }

    public function __toString()
    {
        return $this->getTippago1();
    }
}
