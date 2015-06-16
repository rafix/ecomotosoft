<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Inventarios
 *
 * @ORM\Table(name="inventarios", indexes={@ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="id_producto", columns={"id_producto"})})
 * @ORM\Entity
 *
 */
class Inventarios
{
    /**
     * @var string
     *
     * @ORM\Column(name="canminima", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $canminima;

    /**
     * @var string
     *
     * @ORM\Column(name="candisponible", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $candisponible;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=20, nullable=true)
     */
    private $ubicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_inventario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInventario;

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
     * @var \AppBundle\Entity\Empresas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Empresas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id_empresa")
     * })
     */
    private $idEmpresa;



    /**
     * Set canminima
     *
     * @param string $canminima
     * @return Inventarios
     */
    public function setCanminima($canminima)
    {
        $this->canminima = $canminima;

        return $this;
    }

    /**
     * Get canminima
     *
     * @return string 
     */
    public function getCanminima()
    {
        return $this->canminima;
    }

    /**
     * Set candisponible
     *
     * @param string $candisponible
     * @return Inventarios
     */
    public function setCandisponible($candisponible)
    {
        $this->candisponible = $candisponible;

        return $this;
    }

    /**
     * Get candisponible
     *
     * @return string 
     */
    public function getCandisponible()
    {
        return $this->candisponible;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Inventarios
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Get idInventario
     *
     * @return integer 
     */
    public function getIdInventario()
    {
        return $this->idInventario;
    }

    /**
     * Set idProducto
     *
     * @param \AppBundle\Entity\Productos $idProducto
     * @return Inventarios
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
     * Set idEmpresa
     *
     * @param \AppBundle\Entity\Empresas $idEmpresa
     * @return Inventarios
     */
    public function setIdEmpresa(\AppBundle\Entity\Empresas $idEmpresa = null)
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get idEmpresa
     *
     * @return \AppBundle\Entity\Empresas 
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }
}
