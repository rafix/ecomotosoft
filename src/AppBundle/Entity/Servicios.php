<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Servicios
 *
 * @ORM\Table(name="servicios", uniqueConstraints={@ORM\UniqueConstraint(name="referencia", columns={"referencia"}), @ORM\UniqueConstraint(name="servicio_1", columns={"servicio_1"}), @ORM\UniqueConstraint(name="servicio_2", columns={"servicio_2"}), @ORM\UniqueConstraint(name="servicio_3", columns={"servicio_3"}), @ORM\UniqueConstraint(name="servicio_4", columns={"servicio_4"}), @ORM\UniqueConstraint(name="servicio_5", columns={"servicio_5"}), @ORM\UniqueConstraint(name="servicio_6", columns={"servicio_6"})})
 * @ORM\Entity
 * @Rest\Resource(name="servicios")
 */
class Servicios
{
    /**
     * @var string
     *
     * @ORM\Column(name="referencia", type="string", length=15, nullable=false)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="servicio_1", type="string", length=50, nullable=false)
     */
    private $servicio1;

    /**
     * @var string
     *
     * @ORM\Column(name="servicio_2", type="string", length=50, nullable=true)
     */
    private $servicio2;

    /**
     * @var string
     *
     * @ORM\Column(name="servicio_3", type="string", length=50, nullable=true)
     */
    private $servicio3;

    /**
     * @var string
     *
     * @ORM\Column(name="servicio_4", type="string", length=50, nullable=true)
     */
    private $servicio4;

    /**
     * @var string
     *
     * @ORM\Column(name="servicio_5", type="string", length=50, nullable=true)
     */
    private $servicio5;

    /**
     * @var string
     *
     * @ORM\Column(name="servicio_6", type="string", length=50, nullable=true)
     */
    private $servicio6;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_servicio", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idServicio;



    /**
     * Set referencia
     *
     * @param string $referencia
     * @return Servicios
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set servicio1
     *
     * @param string $servicio1
     * @return Servicios
     */
    public function setServicio1($servicio1)
    {
        $this->servicio1 = $servicio1;

        return $this;
    }

    /**
     * Get servicio1
     *
     * @return string 
     */
    public function getServicio1()
    {
        return $this->servicio1;
    }

    /**
     * Set servicio2
     *
     * @param string $servicio2
     * @return Servicios
     */
    public function setServicio2($servicio2)
    {
        $this->servicio2 = $servicio2;

        return $this;
    }

    /**
     * Get servicio2
     *
     * @return string 
     */
    public function getServicio2()
    {
        return $this->servicio2;
    }

    /**
     * Set servicio3
     *
     * @param string $servicio3
     * @return Servicios
     */
    public function setServicio3($servicio3)
    {
        $this->servicio3 = $servicio3;

        return $this;
    }

    /**
     * Get servicio3
     *
     * @return string 
     */
    public function getServicio3()
    {
        return $this->servicio3;
    }

    /**
     * Set servicio4
     *
     * @param string $servicio4
     * @return Servicios
     */
    public function setServicio4($servicio4)
    {
        $this->servicio4 = $servicio4;

        return $this;
    }

    /**
     * Get servicio4
     *
     * @return string 
     */
    public function getServicio4()
    {
        return $this->servicio4;
    }

    /**
     * Set servicio5
     *
     * @param string $servicio5
     * @return Servicios
     */
    public function setServicio5($servicio5)
    {
        $this->servicio5 = $servicio5;

        return $this;
    }

    /**
     * Get servicio5
     *
     * @return string 
     */
    public function getServicio5()
    {
        return $this->servicio5;
    }

    /**
     * Set servicio6
     *
     * @param string $servicio6
     * @return Servicios
     */
    public function setServicio6($servicio6)
    {
        $this->servicio6 = $servicio6;

        return $this;
    }

    /**
     * Get servicio6
     *
     * @return string 
     */
    public function getServicio6()
    {
        return $this->servicio6;
    }

    /**
     * Get idServicio
     *
     * @return integer 
     */
    public function getIdServicio()
    {
        return $this->idServicio;
    }
}
