<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tipempleados
 *
 * @ORM\Table(name="tipempleados", uniqueConstraints={@ORM\UniqueConstraint(name="tipempleado_1", columns={"tipempleado_1"}), @ORM\UniqueConstraint(name="tipempleado_2", columns={"tipempleado_2"}), @ORM\UniqueConstraint(name="tipempleado_3", columns={"tipempleado_3"}), @ORM\UniqueConstraint(name="tipempleado_4", columns={"tipempleado_4"}), @ORM\UniqueConstraint(name="tipempleado_5", columns={"tipempleado_5"}), @ORM\UniqueConstraint(name="tipempleado_6", columns={"tipempleado_6"})})
 * @ORM\Entity
 *
 */
class Tipempleados
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipempleado_1", type="string", length=20, nullable=false)
     */
    private $tipempleado1;

    /**
     * @var string
     *
     * @ORM\Column(name="tipempleado_2", type="string", length=20, nullable=true)
     */
    private $tipempleado2;

    /**
     * @var string
     *
     * @ORM\Column(name="tipempleado_3", type="string", length=20, nullable=true)
     */
    private $tipempleado3;

    /**
     * @var string
     *
     * @ORM\Column(name="tipempleado_4", type="string", length=20, nullable=true)
     */
    private $tipempleado4;

    /**
     * @var string
     *
     * @ORM\Column(name="tipempleado_5", type="string", length=20, nullable=true)
     */
    private $tipempleado5;

    /**
     * @var string
     *
     * @ORM\Column(name="tipempleado_6", type="string", length=20, nullable=true)
     */
    private $tipempleado6;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipempleado", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipempleado;



    /**
     * Set tipempleado1
     *
     * @param string $tipempleado1
     * @return Tipempleados
     */
    public function setTipempleado1($tipempleado1)
    {
        $this->tipempleado1 = $tipempleado1;

        return $this;
    }

    /**
     * Get tipempleado1
     *
     * @return string 
     */
    public function getTipempleado1()
    {
        return $this->tipempleado1;
    }

    /**
     * Set tipempleado2
     *
     * @param string $tipempleado2
     * @return Tipempleados
     */
    public function setTipempleado2($tipempleado2)
    {
        $this->tipempleado2 = $tipempleado2;

        return $this;
    }

    /**
     * Get tipempleado2
     *
     * @return string 
     */
    public function getTipempleado2()
    {
        return $this->tipempleado2;
    }

    /**
     * Set tipempleado3
     *
     * @param string $tipempleado3
     * @return Tipempleados
     */
    public function setTipempleado3($tipempleado3)
    {
        $this->tipempleado3 = $tipempleado3;

        return $this;
    }

    /**
     * Get tipempleado3
     *
     * @return string 
     */
    public function getTipempleado3()
    {
        return $this->tipempleado3;
    }

    /**
     * Set tipempleado4
     *
     * @param string $tipempleado4
     * @return Tipempleados
     */
    public function setTipempleado4($tipempleado4)
    {
        $this->tipempleado4 = $tipempleado4;

        return $this;
    }

    /**
     * Get tipempleado4
     *
     * @return string 
     */
    public function getTipempleado4()
    {
        return $this->tipempleado4;
    }

    /**
     * Set tipempleado5
     *
     * @param string $tipempleado5
     * @return Tipempleados
     */
    public function setTipempleado5($tipempleado5)
    {
        $this->tipempleado5 = $tipempleado5;

        return $this;
    }

    /**
     * Get tipempleado5
     *
     * @return string 
     */
    public function getTipempleado5()
    {
        return $this->tipempleado5;
    }

    /**
     * Set tipempleado6
     *
     * @param string $tipempleado6
     * @return Tipempleados
     */
    public function setTipempleado6($tipempleado6)
    {
        $this->tipempleado6 = $tipempleado6;

        return $this;
    }

    /**
     * Get tipempleado6
     *
     * @return string 
     */
    public function getTipempleado6()
    {
        return $this->tipempleado6;
    }

    /**
     * Get idTipempleado
     *
     * @return integer 
     */
    public function getIdTipempleado()
    {
        return $this->idTipempleado;
    }

    public function __toString()
    {
        return $this->getTipempleado1();
    }
}
