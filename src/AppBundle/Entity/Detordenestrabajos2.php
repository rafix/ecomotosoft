<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Detordenestrabajos2
 *
 * @ORM\Table(name="detordenestrabajos2", indexes={@ORM\Index(name="id_ordentrabajo", columns={"id_ordentrabajo"}), @ORM\Index(name="id_servicio", columns={"id_servicio"})})
 * @ORM\Entity
 *
 */
class Detordenestrabajos2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_detordentrabajo2", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDetordentrabajo2;

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
     * @var \AppBundle\Entity\Ordenestrabajos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ordenestrabajos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordentrabajo", referencedColumnName="id_ordentrabajo")
     * })
     */
    private $idOrdentrabajo;



    /**
     * Get idDetordentrabajo2
     *
     * @return integer 
     */
    public function getIdDetordentrabajo2()
    {
        return $this->idDetordentrabajo2;
    }

    /**
     * Set idServicio
     *
     * @param \AppBundle\Entity\Servicios $idServicio
     * @return Detordenestrabajos2
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
     * Set idOrdentrabajo
     *
     * @param \AppBundle\Entity\Ordenestrabajos $idOrdentrabajo
     * @return Detordenestrabajos2
     */
    public function setIdOrdentrabajo(\AppBundle\Entity\Ordenestrabajos $idOrdentrabajo = null)
    {
        $this->idOrdentrabajo = $idOrdentrabajo;

        return $this;
    }

    /**
     * Get idOrdentrabajo
     *
     * @return \AppBundle\Entity\Ordenestrabajos 
     */
    public function getIdOrdentrabajo()
    {
        return $this->idOrdentrabajo;
    }
}
