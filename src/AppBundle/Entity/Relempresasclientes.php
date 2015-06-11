<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Relempresasclientes
 *
 * @ORM\Table(name="relempresasclientes", indexes={@ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="id_cliente", columns={"id_cliente"})})
 * @ORM\Entity
 * @Rest\Resource(name="relempresasclientes")
 */
class Relempresasclientes
{
    /**
     * @var string
     *
     * @ORM\Column(name="codcliente", type="string", length=255, nullable=false)
     */
    private $codcliente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecalta", type="datetime", nullable=false)
     */
    private $fecalta;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_relempresacliente", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRelempresacliente;

    /**
     * @var \AppBundle\Entity\Clientes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cliente", referencedColumnName="id_cliente")
     * })
     */
    private $idCliente;

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
     * Set codcliente
     *
     * @param string $codcliente
     * @return Relempresasclientes
     */
    public function setCodcliente($codcliente)
    {
        $this->codcliente = $codcliente;

        return $this;
    }

    /**
     * Get codcliente
     *
     * @return string 
     */
    public function getCodcliente()
    {
        return $this->codcliente;
    }

    /**
     * Set fecalta
     *
     * @param \DateTime $fecalta
     * @return Relempresasclientes
     */
    public function setFecalta($fecalta)
    {
        $this->fecalta = $fecalta;

        return $this;
    }

    /**
     * Get fecalta
     *
     * @return \DateTime 
     */
    public function getFecalta()
    {
        return $this->fecalta;
    }

    /**
     * Get idRelempresacliente
     *
     * @return integer 
     */
    public function getIdRelempresacliente()
    {
        return $this->idRelempresacliente;
    }

    /**
     * Set idCliente
     *
     * @param \AppBundle\Entity\Clientes $idCliente
     * @return Relempresasclientes
     */
    public function setIdCliente(\AppBundle\Entity\Clientes $idCliente = null)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \AppBundle\Entity\Clientes 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idEmpresa
     *
     * @param \AppBundle\Entity\Empresas $idEmpresa
     * @return Relempresasclientes
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
