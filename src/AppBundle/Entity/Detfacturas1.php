<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Detfacturas1
 *
 * @ORM\Table(name="detfacturas1", indexes={@ORM\Index(name="id_factura", columns={"id_factura"}), @ORM\Index(name="id_producto", columns={"id_producto"})})
 * @ORM\Entity
 *
 */
class Detfacturas1
{
    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_detfactura1", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDetfactura1;

    /**
     * @var \AppBundle\Entity\Productos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_producto", referencedColumnName="id_producto")
     * })
     */
    private $idProducto;

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
     * Set cantidad
     *
     * @param string $cantidad
     * @return Detfacturas1
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Get idDetfactura1
     *
     * @return integer 
     */
    public function getIdDetfactura1()
    {
        return $this->idDetfactura1;
    }

    /**
     * Set idProducto
     *
     * @param \AppBundle\Entity\Productos $idProducto
     * @return Detfacturas1
     */
    public function setIdProducto(\AppBundle\Entity\Productos $idProducto = null)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return \AppBundle\Entity\Productos 
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set idFactura
     *
     * @param \AppBundle\Entity\Facturas $idFactura
     * @return Detfacturas1
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

    public function __toString()
    {
        return (string)$this->getIdDetfactura1();
    }
}
