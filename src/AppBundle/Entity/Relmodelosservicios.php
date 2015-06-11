<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Relmodelosservicios
 *
 * @ORM\Table(name="relmodelosservicios", indexes={@ORM\Index(name="id_modelo", columns={"id_modelo"}), @ORM\Index(name="id_servicio", columns={"id_servicio"})})
 * @ORM\Entity
 * @Rest\Resource(name="relmodelosservicios")
 */
class Relmodelosservicios
{
    /**
     * @var string
     *
     * @ORM\Column(name="horas", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $horas;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_relmodeloservicio", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRelmodeloservicio;

    /**
     * @var \AppBundle\Entity\Servicios
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Servicios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_servicio", referencedColumnName="id_servicio")
     * })
     */
    private $idServicio;

    /**
     * @var \AppBundle\Entity\Modelos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Modelos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modelo", referencedColumnName="id_modelo")
     * })
     */
    private $idModelo;



    /**
     * Set horas
     *
     * @param string $horas
     * @return Relmodelosservicios
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get horas
     *
     * @return string 
     */
    public function getHoras()
    {
        return $this->horas;
    }

    /**
     * Get idRelmodeloservicio
     *
     * @return integer 
     */
    public function getIdRelmodeloservicio()
    {
        return $this->idRelmodeloservicio;
    }

    /**
     * Set idServicio
     *
     * @param \AppBundle\Entity\Servicios $idServicio
     * @return Relmodelosservicios
     */
    public function setIdServicio(\AppBundle\Entity\Servicios $idServicio = null)
    {
        $this->idServicio = $idServicio;

        return $this;
    }

    /**
     * Get idServicio
     *
     * @return \AppBundle\Entity\Servicios 
     */
    public function getIdServicio()
    {
        return $this->idServicio;
    }

    /**
     * Set idModelo
     *
     * @param \AppBundle\Entity\Modelos $idModelo
     * @return Relmodelosservicios
     */
    public function setIdModelo(\AppBundle\Entity\Modelos $idModelo = null)
    {
        $this->idModelo = $idModelo;

        return $this;
    }

    /**
     * Get idModelo
     *
     * @return \AppBundle\Entity\Modelos 
     */
    public function getIdModelo()
    {
        return $this->idModelo;
    }
}
