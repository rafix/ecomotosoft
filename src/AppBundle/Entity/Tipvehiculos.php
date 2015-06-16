<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tipvehiculos
 *
 * @ORM\Table(name="tipvehiculos", uniqueConstraints={@ORM\UniqueConstraint(name="tipvehiculo_1", columns={"tipvehiculo_1"}), @ORM\UniqueConstraint(name="clasificacion", columns={"clasificacion"}), @ORM\UniqueConstraint(name="tipvehiculo_2", columns={"tipvehiculo_2"}), @ORM\UniqueConstraint(name="tipvehiculo_3", columns={"tipvehiculo_3"}), @ORM\UniqueConstraint(name="tipvehiculo_4", columns={"tipvehiculo_4"}), @ORM\UniqueConstraint(name="tipvehiculo_5", columns={"tipvehiculo_5"}), @ORM\UniqueConstraint(name="tipvehiculo_6", columns={"tipvehiculo_6"})})
 * @ORM\Entity
 *
 */
class Tipvehiculos
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipvehiculo_1", type="string", length=20, nullable=false)
     */
    private $tipvehiculo1;

    /**
     * @var string
     *
     * @ORM\Column(name="tipvehiculo_2", type="string", length=20, nullable=true)
     */
    private $tipvehiculo2;

    /**
     * @var string
     *
     * @ORM\Column(name="tipvehiculo_3", type="string", length=20, nullable=true)
     */
    private $tipvehiculo3;

    /**
     * @var string
     *
     * @ORM\Column(name="tipvehiculo_4", type="string", length=20, nullable=true)
     */
    private $tipvehiculo4;

    /**
     * @var string
     *
     * @ORM\Column(name="tipvehiculo_5", type="string", length=20, nullable=true)
     */
    private $tipvehiculo5;

    /**
     * @var string
     *
     * @ORM\Column(name="tipvehiculo_6", type="string", length=20, nullable=true)
     */
    private $tipvehiculo6;

    /**
     * @var string
     *
     * @ORM\Column(name="clasificacion", type="string", length=4, nullable=false)
     */
    private $clasificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipvehiculo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipvehiculo;



    /**
     * Set tipvehiculo1
     *
     * @param string $tipvehiculo1
     * @return Tipvehiculos
     */
    public function setTipvehiculo1($tipvehiculo1)
    {
        $this->tipvehiculo1 = $tipvehiculo1;

        return $this;
    }

    /**
     * Get tipvehiculo1
     *
     * @return string 
     */
    public function getTipvehiculo1()
    {
        return $this->tipvehiculo1;
    }

    /**
     * Set tipvehiculo2
     *
     * @param string $tipvehiculo2
     * @return Tipvehiculos
     */
    public function setTipvehiculo2($tipvehiculo2)
    {
        $this->tipvehiculo2 = $tipvehiculo2;

        return $this;
    }

    /**
     * Get tipvehiculo2
     *
     * @return string 
     */
    public function getTipvehiculo2()
    {
        return $this->tipvehiculo2;
    }

    /**
     * Set tipvehiculo3
     *
     * @param string $tipvehiculo3
     * @return Tipvehiculos
     */
    public function setTipvehiculo3($tipvehiculo3)
    {
        $this->tipvehiculo3 = $tipvehiculo3;

        return $this;
    }

    /**
     * Get tipvehiculo3
     *
     * @return string 
     */
    public function getTipvehiculo3()
    {
        return $this->tipvehiculo3;
    }

    /**
     * Set tipvehiculo4
     *
     * @param string $tipvehiculo4
     * @return Tipvehiculos
     */
    public function setTipvehiculo4($tipvehiculo4)
    {
        $this->tipvehiculo4 = $tipvehiculo4;

        return $this;
    }

    /**
     * Get tipvehiculo4
     *
     * @return string 
     */
    public function getTipvehiculo4()
    {
        return $this->tipvehiculo4;
    }

    /**
     * Set tipvehiculo5
     *
     * @param string $tipvehiculo5
     * @return Tipvehiculos
     */
    public function setTipvehiculo5($tipvehiculo5)
    {
        $this->tipvehiculo5 = $tipvehiculo5;

        return $this;
    }

    /**
     * Get tipvehiculo5
     *
     * @return string 
     */
    public function getTipvehiculo5()
    {
        return $this->tipvehiculo5;
    }

    /**
     * Set tipvehiculo6
     *
     * @param string $tipvehiculo6
     * @return Tipvehiculos
     */
    public function setTipvehiculo6($tipvehiculo6)
    {
        $this->tipvehiculo6 = $tipvehiculo6;

        return $this;
    }

    /**
     * Get tipvehiculo6
     *
     * @return string 
     */
    public function getTipvehiculo6()
    {
        return $this->tipvehiculo6;
    }

    /**
     * Set clasificacion
     *
     * @param string $clasificacion
     * @return Tipvehiculos
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return string 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Get idTipvehiculo
     *
     * @return integer 
     */
    public function getIdTipvehiculo()
    {
        return $this->idTipvehiculo;
    }
}
