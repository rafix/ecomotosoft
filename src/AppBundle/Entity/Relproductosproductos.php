<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Relproductosproductos
 *
 * @ORM\Table(name="relproductosproductos", indexes={@ORM\Index(name="id_producto1", columns={"id_producto1"}), @ORM\Index(name="id_producto2", columns={"id_producto2"})})
 * @ORM\Entity
 *
 */
class Relproductosproductos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_relproductoproducto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRelproductoproducto;

    /**
     * @var \AppBundle\Entity\Productos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_producto2", referencedColumnName="id_producto")
     * })
     */
    private $idProducto2;

    /**
     * @var \AppBundle\Entity\Productos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Productos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_producto1", referencedColumnName="id_producto")
     * })
     */
    private $idProducto1;



    /**
     * Get idRelproductoproducto
     *
     * @return integer 
     */
    public function getIdRelproductoproducto()
    {
        return $this->idRelproductoproducto;
    }

    /**
     * Set idProducto2
     *
     * @param \AppBundle\Entity\Productos $idProducto2
     * @return Relproductosproductos
     */
    public function setIdProducto2(\AppBundle\Entity\Productos $idProducto2 = null)
    {
        $this->idProducto2 = $idProducto2;

        return $this;
    }

    /**
     * Get idProducto2
     *
     * @return \AppBundle\Entity\Productos 
     */
    public function getIdProducto2()
    {
        return $this->idProducto2;
    }

    /**
     * Set idProducto1
     *
     * @param \AppBundle\Entity\Productos $idProducto1
     * @return Relproductosproductos
     */
    public function setIdProducto1(\AppBundle\Entity\Productos $idProducto1 = null)
    {
        $this->idProducto1 = $idProducto1;

        return $this;
    }

    /**
     * Get idProducto1
     *
     * @return \AppBundle\Entity\Productos 
     */
    public function getIdProducto1()
    {
        return $this->idProducto1;
    }
}
