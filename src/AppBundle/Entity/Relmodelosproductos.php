<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Relmodelosproductos
 *
 * @ORM\Table(name="relmodelosproductos", indexes={@ORM\Index(name="id_modelo", columns={"id_modelo"}), @ORM\Index(name="id_producto", columns={"id_producto"})})
 * @ORM\Entity
 *
 */
class Relmodelosproductos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_relmodeloproducto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRelmodeloproducto;

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
     * @var \AppBundle\Entity\Modelos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Modelos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modelo", referencedColumnName="id_modelo")
     * })
     */
    private $idModelo;



    /**
     * Get idRelmodeloproducto
     *
     * @return integer 
     */
    public function getIdRelmodeloproducto()
    {
        return $this->idRelmodeloproducto;
    }

    /**
     * Set idProducto
     *
     * @param \AppBundle\Entity\Productos $idProducto
     * @return Relmodelosproductos
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
     * Set idModelo
     *
     * @param \AppBundle\Entity\Modelos $idModelo
     * @return Relmodelosproductos
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

    public function __toString()
    {
        return (string)$this->getIdRelmodeloproducto();
    }
}
