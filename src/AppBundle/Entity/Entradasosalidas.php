<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Entradasosalidas
 *
 * @ORM\Table(name="entradasosalidas", indexes={@ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="id_producto", columns={"id_producto"})})
 * @ORM\Entity
 * @Rest\Resource(name="entradasosalidas")
 */
class Entradasosalidas
{
    /**
     * @var string
     *
     * @ORM\Column(name="canentrada", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $canentrada;

    /**
     * @var string
     *
     * @ORM\Column(name="cansalida", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $cansalida;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecentradaosalida", type="datetime", nullable=false)
     */
    private $fecentradaosalida;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_entradaosalida", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEntradaosalida;

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
     * Set canentrada
     *
     * @param string $canentrada
     * @return Entradasosalidas
     */
    public function setCanentrada($canentrada)
    {
        $this->canentrada = $canentrada;

        return $this;
    }

    /**
     * Get canentrada
     *
     * @return string 
     */
    public function getCanentrada()
    {
        return $this->canentrada;
    }

    /**
     * Set cansalida
     *
     * @param string $cansalida
     * @return Entradasosalidas
     */
    public function setCansalida($cansalida)
    {
        $this->cansalida = $cansalida;

        return $this;
    }

    /**
     * Get cansalida
     *
     * @return string 
     */
    public function getCansalida()
    {
        return $this->cansalida;
    }

    /**
     * Set fecentradaosalida
     *
     * @param \DateTime $fecentradaosalida
     * @return Entradasosalidas
     */
    public function setFecentradaosalida($fecentradaosalida)
    {
        $this->fecentradaosalida = $fecentradaosalida;

        return $this;
    }

    /**
     * Get fecentradaosalida
     *
     * @return \DateTime 
     */
    public function getFecentradaosalida()
    {
        return $this->fecentradaosalida;
    }

    /**
     * Get idEntradaosalida
     *
     * @return integer 
     */
    public function getIdEntradaosalida()
    {
        return $this->idEntradaosalida;
    }

    /**
     * Set idProducto
     *
     * @param \AppBundle\Entity\Productos $idProducto
     * @return Entradasosalidas
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
     * @return Entradasosalidas
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
