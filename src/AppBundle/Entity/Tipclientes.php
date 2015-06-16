<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tipclientes
 *
 * @ORM\Table(name="tipclientes", uniqueConstraints={@ORM\UniqueConstraint(name="tipcliente_2", columns={"tipcliente_2"}), @ORM\UniqueConstraint(name="tipcliente_3", columns={"tipcliente_3"}), @ORM\UniqueConstraint(name="tipcliente_4", columns={"tipcliente_4"}), @ORM\UniqueConstraint(name="tipcliente_5", columns={"tipcliente_5"}), @ORM\UniqueConstraint(name="tipcliente_6", columns={"tipcliente_6"})})
 * @ORM\Entity
 *
 */
class Tipclientes
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipcliente_1", type="string", length=20, nullable=false)
     */
    private $tipcliente1;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcliente_2", type="string", length=20, nullable=true)
     */
    private $tipcliente2;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcliente_3", type="string", length=20, nullable=true)
     */
    private $tipcliente3;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcliente_4", type="string", length=20, nullable=true)
     */
    private $tipcliente4;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcliente_5", type="string", length=20, nullable=true)
     */
    private $tipcliente5;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcliente_6", type="string", length=20, nullable=true)
     */
    private $tipcliente6;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipcliente", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipcliente;



    /**
     * Set tipcliente1
     *
     * @param string $tipcliente1
     * @return Tipclientes
     */
    public function setTipcliente1($tipcliente1)
    {
        $this->tipcliente1 = $tipcliente1;

        return $this;
    }

    /**
     * Get tipcliente1
     *
     * @return string 
     */
    public function getTipcliente1()
    {
        return $this->tipcliente1;
    }

    /**
     * Set tipcliente2
     *
     * @param string $tipcliente2
     * @return Tipclientes
     */
    public function setTipcliente2($tipcliente2)
    {
        $this->tipcliente2 = $tipcliente2;

        return $this;
    }

    /**
     * Get tipcliente2
     *
     * @return string 
     */
    public function getTipcliente2()
    {
        return $this->tipcliente2;
    }

    /**
     * Set tipcliente3
     *
     * @param string $tipcliente3
     * @return Tipclientes
     */
    public function setTipcliente3($tipcliente3)
    {
        $this->tipcliente3 = $tipcliente3;

        return $this;
    }

    /**
     * Get tipcliente3
     *
     * @return string 
     */
    public function getTipcliente3()
    {
        return $this->tipcliente3;
    }

    /**
     * Set tipcliente4
     *
     * @param string $tipcliente4
     * @return Tipclientes
     */
    public function setTipcliente4($tipcliente4)
    {
        $this->tipcliente4 = $tipcliente4;

        return $this;
    }

    /**
     * Get tipcliente4
     *
     * @return string 
     */
    public function getTipcliente4()
    {
        return $this->tipcliente4;
    }

    /**
     * Set tipcliente5
     *
     * @param string $tipcliente5
     * @return Tipclientes
     */
    public function setTipcliente5($tipcliente5)
    {
        $this->tipcliente5 = $tipcliente5;

        return $this;
    }

    /**
     * Get tipcliente5
     *
     * @return string 
     */
    public function getTipcliente5()
    {
        return $this->tipcliente5;
    }

    /**
     * Set tipcliente6
     *
     * @param string $tipcliente6
     * @return Tipclientes
     */
    public function setTipcliente6($tipcliente6)
    {
        $this->tipcliente6 = $tipcliente6;

        return $this;
    }

    /**
     * Get tipcliente6
     *
     * @return string 
     */
    public function getTipcliente6()
    {
        return $this->tipcliente6;
    }

    /**
     * Get idTipcliente
     *
     * @return integer 
     */
    public function getIdTipcliente()
    {
        return $this->idTipcliente;
    }

    public function __toString()
    {
        return $this->getTipcliente1();
    }
}
