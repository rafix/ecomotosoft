<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Servicios
 *
 * @ORM\Table(name="servicios", uniqueConstraints={@ORM\UniqueConstraint(name="referencia", columns={"referencia"}), @ORM\UniqueConstraint(name="servicio", columns={"servicio"})})
 * @ORM\Entity
 *
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
     * @ORM\Column(name="servicio", type="string", length=50, nullable=false)
     */
    private $servicio;

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
     * Set servicio
     *
     * @param string $servicio
     * @return Servicios
     */
    public function setServicio($servicio)
    {
        $this->servicio = $servicio;

        return $this;
    }

    /**
     * Get servicio
     *
     * @return string 
     */
    public function getServicio()
    {
        return $this->servicio;
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

    public function __toString()
    {
        return $this->getServicio();
    }
}
