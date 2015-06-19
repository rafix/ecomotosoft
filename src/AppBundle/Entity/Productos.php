<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Productos
 *
 * @ORM\Table(name="productos", indexes={@ORM\Index(name="id_marca", columns={"id_marca"}), @ORM\Index(name="id_familia", columns={"id_familia"})})
 * @ORM\Entity
 *
 */
class Productos
{
    /**
     * @var string
     *
     * @ORM\Column(name="referencia", type="string", length=50, nullable=true)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="ean13", type="string", length=20, nullable=true)
     */
    private $ean13;

    /**
     * @var string
     *
     * @ORM\Column(name="pvp", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $pvp;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen1", type="string", length=255, nullable=true)
     */
    private $imagen1;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen2", type="string", length=255, nullable=true)
     */
    private $imagen2;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_producto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Familias
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Familias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_familia", referencedColumnName="id_familia")
     * })
     */
    private $familia;

    /**
     * @var \AppBundle\Entity\Marcas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Marcas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_marca", referencedColumnName="id_marca")
     * })
     */
    private $marca;



    /**
     * Set referencia
     *
     * @param string $referencia
     * @return Productos
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Productos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }


    /**
     * Set ean13
     *
     * @param string $ean13
     * @return Productos
     */
    public function setEan13($ean13)
    {
        $this->ean13 = $ean13;

        return $this;
    }

    /**
     * Get ean13
     *
     * @return string
     */
    public function getEan13()
    {
        return $this->ean13;
    }

    /**
     * Set pvp
     *
     * @param string $pvp
     * @return Productos
     */
    public function setPvp($pvp)
    {
        $this->pvp = $pvp;

        return $this;
    }

    /**
     * Get pvp
     *
     * @return string 
     */
    public function getPvp()
    {
        return $this->pvp;
    }

    /**
     * Set imagen1
     *
     * @param string $imagen1
     * @return Productos
     */
    public function setImagen1($imagen1)
    {
        $this->imagen1 = $imagen1;

        return $this;
    }

    /**
     * Get imagen1
     *
     * @return string 
     */
    public function getImagen1()
    {
        return $this->imagen1;
    }

    /**
     * Set imagen2
     *
     * @param string $imagen2
     * @return Productos
     */
    public function setImagen2($imagen2)
    {
        $this->imagen2 = $imagen2;

        return $this;
    }

    /**
     * Get imagen2
     *
     * @return string 
     */
    public function getImagen2()
    {
        return $this->imagen2;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Productos
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set familia
     *
     * @param \AppBundle\Entity\Familias $familia
     * @return Productos
     */
    public function setFamilia(\AppBundle\Entity\Familias $familia = null)
    {
        $this->familia = $familia;

        return $this;
    }

    /**
     * Get familia
     *
     * @return \AppBundle\Entity\Familias 
     */
    public function getFamilia()
    {
        return $this->familia;
    }

    /**
     * Set marca
     *
     * @param \AppBundle\Entity\Marcas $marca
     * @return Productos
     */
    public function setMarca(\AppBundle\Entity\Marcas $marca = null)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return \AppBundle\Entity\Marcas 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    public function __toString()
    {
        return $this->getDescripcion();
    }
}
