<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Detfacturas2
 *
 * @ORM\Table(name="detfacturas2", indexes={@ORM\Index(name="id_factura", columns={"id_factura"}), @ORM\Index(name="id_servicio", columns={"id_servicio"})})
 * @ORM\Entity
 *
 */
class Detfacturas2
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_detfactura2", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDetfactura2;

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
     * @var \AppBundle\Entity\Facturas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Facturas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_factura", referencedColumnName="id_factura")
     * })
     */
    private $idFactura;



    /**
     * Get idDetfactura2
     *
     * @return integer 
     */
    public function getIdDetfactura2()
    {
        return $this->idDetfactura2;
    }

    /**
     * Set idServicio
     *
     * @param \AppBundle\Entity\Servicios $idServicio
     * @return Detfacturas2
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
     * Set idFactura
     *
     * @param \AppBundle\Entity\Facturas $idFactura
     * @return Detfacturas2
     */
    public function setIdFactura(\AppBundle\Entity\Facturas $idFactura = null)
    {
        $this->idFactura = $idFactura;

        return $this;
    }

    /**
     * Get idFactura
     *
     * @return \AppBundle\Entity\Facturas 
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }
}
