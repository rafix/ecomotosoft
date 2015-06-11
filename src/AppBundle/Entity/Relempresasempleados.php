<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Relempresasempleados
 *
 * @ORM\Table(name="relempresasempleados", indexes={@ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="id_empleado", columns={"id_empleado"})})
 * @ORM\Entity
 * @Rest\Resource(name="relempresasempleados")
 */
class Relempresasempleados
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecalta", type="datetime", nullable=false)
     */
    private $fecalta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="despedido", type="boolean", nullable=true)
     */
    private $despedido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecbaja", type="datetime", nullable=false)
     */
    private $fecbaja;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_relempresaempleado", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRelempresaempleado;

    /**
     * @var \AppBundle\Entity\Empleados
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Empleados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empleado", referencedColumnName="id_empleado")
     * })
     */
    private $idEmpleado;

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
     * Set fecalta
     *
     * @param \DateTime $fecalta
     * @return Relempresasempleados
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
     * Set despedido
     *
     * @param boolean $despedido
     * @return Relempresasempleados
     */
    public function setDespedido($despedido)
    {
        $this->despedido = $despedido;

        return $this;
    }

    /**
     * Get despedido
     *
     * @return boolean 
     */
    public function getDespedido()
    {
        return $this->despedido;
    }

    /**
     * Set fecbaja
     *
     * @param \DateTime $fecbaja
     * @return Relempresasempleados
     */
    public function setFecbaja($fecbaja)
    {
        $this->fecbaja = $fecbaja;

        return $this;
    }

    /**
     * Get fecbaja
     *
     * @return \DateTime 
     */
    public function getFecbaja()
    {
        return $this->fecbaja;
    }

    /**
     * Get idRelempresaempleado
     *
     * @return integer 
     */
    public function getIdRelempresaempleado()
    {
        return $this->idRelempresaempleado;
    }

    /**
     * Set idEmpleado
     *
     * @param \AppBundle\Entity\Empleados $idEmpleado
     * @return Relempresasempleados
     */
    public function setIdEmpleado(\AppBundle\Entity\Empleados $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \AppBundle\Entity\Empleados 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set idEmpresa
     *
     * @param \AppBundle\Entity\Empresas $idEmpresa
     * @return Relempresasempleados
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
