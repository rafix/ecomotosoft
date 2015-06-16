<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Relempresasservicios
 *
 * @ORM\Table(name="relempresasservicios", indexes={@ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="id_servicio", columns={"id_servicio"})})
 * @ORM\Entity
 *
 */
class Relempresasservicios
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
     * @ORM\Column(name="neto", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $neto;

    /**
     * @var string
     *
     * @ORM\Column(name="descuento", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $descuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_relempresaservicio", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRelempresaservicio;

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
     * @var \AppBundle\Entity\Empresas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Empresas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id_empresa")
     * })
     */
    private $idEmpresa;



    /**
     * Set referencia
     *
     * @param string $referencia
     * @return Relempresasservicios
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
     * Set neto
     *
     * @param string $neto
     * @return Relempresasservicios
     */
    public function setNeto($neto)
    {
        $this->neto = $neto;

        return $this;
    }

    /**
     * Get neto
     *
     * @return string 
     */
    public function getNeto()
    {
        return $this->neto;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     * @return Relempresasservicios
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Get idRelempresaservicio
     *
     * @return integer 
     */
    public function getIdRelempresaservicio()
    {
        return $this->idRelempresaservicio;
    }

    /**
     * Set idServicio
     *
     * @param \AppBundle\Entity\Servicios $idServicio
     * @return Relempresasservicios
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
     * Set idEmpresa
     *
     * @param \AppBundle\Entity\Empresas $idEmpresa
     * @return Relempresasservicios
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
