<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Detpresupuestos2
 *
 * @ORM\Table(name="detpresupuestos2", indexes={@ORM\Index(name="id_presupuesto", columns={"id_presupuesto"}), @ORM\Index(name="id_servicio", columns={"id_servicio"})})
 * @ORM\Entity
 * @Rest\Resource(name="detpresupuestos2")
 */
class Detpresupuestos2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_detpresupuesto2", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDetpresupuesto2;

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
     * @var \AppBundle\Entity\Presupuestos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Presupuestos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_presupuesto", referencedColumnName="id_presupuesto")
     * })
     */
    private $idPresupuesto;



    /**
     * Get idDetpresupuesto2
     *
     * @return integer 
     */
    public function getIdDetpresupuesto2()
    {
        return $this->idDetpresupuesto2;
    }

    /**
     * Set idServicio
     *
     * @param \AppBundle\Entity\Servicios $idServicio
     * @return Detpresupuestos2
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
     * Set idPresupuesto
     *
     * @param \AppBundle\Entity\Presupuestos $idPresupuesto
     * @return Detpresupuestos2
     */
    public function setIdPresupuesto(\AppBundle\Entity\Presupuestos $idPresupuesto = null)
    {
        $this->idPresupuesto = $idPresupuesto;

        return $this;
    }

    /**
     * Get idPresupuesto
     *
     * @return \AppBundle\Entity\Presupuestos 
     */
    public function getIdPresupuesto()
    {
        return $this->idPresupuesto;
    }
}
