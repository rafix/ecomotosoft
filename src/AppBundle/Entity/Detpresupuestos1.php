<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Detpresupuestos1
 *
 * @ORM\Table(name="detpresupuestos1", indexes={@ORM\Index(name="id_presupuesto", columns={"id_presupuesto"}), @ORM\Index(name="id_producto", columns={"id_producto"})})
 * @ORM\Entity
 *
 */
class Detpresupuestos1
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
     * @ORM\Column(name="id_detpresupuesto1", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDetpresupuesto1;

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
     * @var \AppBundle\Entity\Presupuestos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Presupuestos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_presupuesto", referencedColumnName="id_presupuesto")
     * })
     */
    private $idPresupuesto;



    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return Detpresupuestos1
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
     * Get idDetpresupuesto1
     *
     * @return integer 
     */
    public function getIdDetpresupuesto1()
    {
        return $this->idDetpresupuesto1;
    }

    /**
     * Set idProducto
     *
     * @param \AppBundle\Entity\Productos $idProducto
     * @return Detpresupuestos1
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
     * Set idPresupuesto
     *
     * @param \AppBundle\Entity\Presupuestos $idPresupuesto
     * @return Detpresupuestos1
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

    public function __toString()
    {
        return (string)$this->getIdDetpresupuesto1();
    }
}
