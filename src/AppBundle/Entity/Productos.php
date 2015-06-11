<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Productos
 *
 * @ORM\Table(name="productos", uniqueConstraints={@ORM\UniqueConstraint(name="descripcion_1", columns={"descripcion_1"}), @ORM\UniqueConstraint(name="descripcion_2", columns={"descripcion_2"}), @ORM\UniqueConstraint(name="descripcion_3", columns={"descripcion_3"}), @ORM\UniqueConstraint(name="descripcion_4", columns={"descripcion_4"}), @ORM\UniqueConstraint(name="descripcion_5", columns={"descripcion_5"}), @ORM\UniqueConstraint(name="descripcion_6", columns={"descripcion_6"})}, indexes={@ORM\Index(name="id_marca", columns={"id_marca"}), @ORM\Index(name="id_familia", columns={"id_familia"})})
 * @ORM\Entity
 * @Rest\Resource(name="productos")
 */
class Productos
{
    /**
     * @var string
     *
     * @ORM\Column(name="referencia", type="string", length=15, nullable=true)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_1", type="string", length=50, nullable=false)
     */
    private $descripcion1;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_2", type="string", length=50, nullable=true)
     */
    private $descripcion2;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_3", type="string", length=50, nullable=true)
     */
    private $descripcion3;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_4", type="string", length=50, nullable=true)
     */
    private $descripcion4;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_5", type="string", length=50, nullable=true)
     */
    private $descripcion5;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_6", type="string", length=50, nullable=true)
     */
    private $descripcion6;

    /**
     * @var integer
     *
     * @ORM\Column(name="ean13", type="integer", nullable=true)
     */
    private $ean13;

    /**
     * @var string
     *
     * @ORM\Column(name="pvp", type="decimal", precision=10, scale=3, nullable=true)
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
    private $idProducto;

    /**
     * @var \AppBundle\Entity\Familias
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Familias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_familia", referencedColumnName="id_familia")
     * })
     */
    private $idFamilia;

    /**
     * @var \AppBundle\Entity\Marcas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Marcas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_marca", referencedColumnName="id_marca")
     * })
     */
    private $idMarca;



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
     * Set descripcion1
     *
     * @param string $descripcion1
     * @return Productos
     */
    public function setDescripcion1($descripcion1)
    {
        $this->descripcion1 = $descripcion1;

        return $this;
    }

    /**
     * Get descripcion1
     *
     * @return string 
     */
    public function getDescripcion1()
    {
        return $this->descripcion1;
    }

    /**
     * Set descripcion2
     *
     * @param string $descripcion2
     * @return Productos
     */
    public function setDescripcion2($descripcion2)
    {
        $this->descripcion2 = $descripcion2;

        return $this;
    }

    /**
     * Get descripcion2
     *
     * @return string 
     */
    public function getDescripcion2()
    {
        return $this->descripcion2;
    }

    /**
     * Set descripcion3
     *
     * @param string $descripcion3
     * @return Productos
     */
    public function setDescripcion3($descripcion3)
    {
        $this->descripcion3 = $descripcion3;

        return $this;
    }

    /**
     * Get descripcion3
     *
     * @return string 
     */
    public function getDescripcion3()
    {
        return $this->descripcion3;
    }

    /**
     * Set descripcion4
     *
     * @param string $descripcion4
     * @return Productos
     */
    public function setDescripcion4($descripcion4)
    {
        $this->descripcion4 = $descripcion4;

        return $this;
    }

    /**
     * Get descripcion4
     *
     * @return string 
     */
    public function getDescripcion4()
    {
        return $this->descripcion4;
    }

    /**
     * Set descripcion5
     *
     * @param string $descripcion5
     * @return Productos
     */
    public function setDescripcion5($descripcion5)
    {
        $this->descripcion5 = $descripcion5;

        return $this;
    }

    /**
     * Get descripcion5
     *
     * @return string 
     */
    public function getDescripcion5()
    {
        return $this->descripcion5;
    }

    /**
     * Set descripcion6
     *
     * @param string $descripcion6
     * @return Productos
     */
    public function setDescripcion6($descripcion6)
    {
        $this->descripcion6 = $descripcion6;

        return $this;
    }

    /**
     * Get descripcion6
     *
     * @return string 
     */
    public function getDescripcion6()
    {
        return $this->descripcion6;
    }

    /**
     * Set ean13
     *
     * @param integer $ean13
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
     * @return integer 
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
     * Get idProducto
     *
     * @return integer 
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set idFamilia
     *
     * @param \AppBundle\Entity\Familias $idFamilia
     * @return Productos
     */
    public function setIdFamilia(\AppBundle\Entity\Familias $idFamilia = null)
    {
        $this->idFamilia = $idFamilia;

        return $this;
    }

    /**
     * Get idFamilia
     *
     * @return \AppBundle\Entity\Familias 
     */
    public function getIdFamilia()
    {
        return $this->idFamilia;
    }

    /**
     * Set idMarca
     *
     * @param \AppBundle\Entity\Marcas $idMarca
     * @return Productos
     */
    public function setIdMarca(\AppBundle\Entity\Marcas $idMarca = null)
    {
        $this->idMarca = $idMarca;

        return $this;
    }

    /**
     * Get idMarca
     *
     * @return \AppBundle\Entity\Marcas 
     */
    public function getIdMarca()
    {
        return $this->idMarca;
    }
}
