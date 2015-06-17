<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tipvehiculos
 *
 * @ORM\Table(name="tipvehiculos", uniqueConstraints={@ORM\UniqueConstraint(name="tipvehiculo", columns={"tipvehiculo"})})
 * @ORM\Entity
 *
 */
class Tipvehiculos
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipvehiculo", type="string", length=20, nullable=false)
     */
    private $tipvehiculo;

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
     * Set tipvehiculo
     *
     * @param string $tipvehiculo
     * @return Tipvehiculos
     */
    public function setTipvehiculo($tipvehiculo)
    {
        $this->tipvehiculo = $tipvehiculo;

        return $this;
    }

    /**
     * Get tipvehiculo
     *
     * @return string 
     */
    public function getTipvehiculo()
    {
        return $this->tipvehiculo;
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

    public function __toString()
    {
        return $this->getTipvehiculo();
    }
}
