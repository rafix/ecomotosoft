<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Detordenestrabajos1
 *
 * @ORM\Table(name="detordenestrabajos1", indexes={@ORM\Index(name="id_ordentrabajo", columns={"id_ordentrabajo"}), @ORM\Index(name="id_producto", columns={"id_producto"})})
 * @ORM\Entity
 *
 */
class Detordenestrabajos1
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
     * @ORM\Column(name="id_detordentrabajo1", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDetordentrabajo1;

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
     * @var \AppBundle\Entity\Ordenestrabajos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ordenestrabajos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordentrabajo", referencedColumnName="id_ordentrabajo")
     * })
     */
    private $idOrdentrabajo;



    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return Detordenestrabajos1
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
     * Get idDetordentrabajo1
     *
     * @return integer 
     */
    public function getIdDetordentrabajo1()
    {
        return $this->idDetordentrabajo1;
    }

    /**
     * Set idProducto
     *
     * @param \AppBundle\Entity\Productos $idProducto
     * @return Detordenestrabajos1
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
     * Set idOrdentrabajo
     *
     * @param \AppBundle\Entity\Ordenestrabajos $idOrdentrabajo
     * @return Detordenestrabajos1
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

    public function __toString()
    {
        return (string)$this->getIdDetordentrabajo1();
    }
}
