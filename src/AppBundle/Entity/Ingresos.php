<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Ingresos
 *
 * @ORM\Table(name="ingresos", indexes={@ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="id_cliente", columns={"id_cliente"}), @ORM\Index(name="id_vehiculo", columns={"id_vehiculo"}), @ORM\Index(name="id_estado", columns={"id_estado"}), @ORM\Index(name="id_tipingreso", columns={"id_tipingreso"})})
 * @ORM\Entity
 * @Rest\Resource(name="ingresos")
 */
class Ingresos
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fyhingreso", type="datetime", nullable=false)
     */
    private $fyhingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fyhinicio", type="datetime", nullable=false)
     */
    private $fyhinicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fyhfinalizacion", type="datetime", nullable=false)
     */
    private $fyhfinalizacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fyhentrega", type="datetime", nullable=false)
     */
    private $fyhentrega;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ingreso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIngreso;

    /**
     * @var \AppBundle\Entity\Tipingresos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tipingresos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipingreso", referencedColumnName="id_tipingreso")
     * })
     */
    private $idTipingreso;

    /**
     * @var \AppBundle\Entity\Estados
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado", referencedColumnName="id_estado")
     * })
     */
    private $idEstado;

    /**
     * @var \AppBundle\Entity\Vehiculos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Vehiculos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vehiculo", referencedColumnName="id_vehiculo")
     * })
     */
    private $idVehiculo;

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
     * Set fyhingreso
     *
     * @param \DateTime $fyhingreso
     * @return Ingresos
     */
    public function setFyhingreso($fyhingreso)
    {
        $this->fyhingreso = $fyhingreso;

        return $this;
    }

    /**
     * Get fyhingreso
     *
     * @return \DateTime 
     */
    public function getFyhingreso()
    {
        return $this->fyhingreso;
    }

    /**
     * Set fyhinicio
     *
     * @param \DateTime $fyhinicio
     * @return Ingresos
     */
    public function setFyhinicio($fyhinicio)
    {
        $this->fyhinicio = $fyhinicio;

        return $this;
    }

    /**
     * Get fyhinicio
     *
     * @return \DateTime 
     */
    public function getFyhinicio()
    {
        return $this->fyhinicio;
    }

    /**
     * Set fyhfinalizacion
     *
     * @param \DateTime $fyhfinalizacion
     * @return Ingresos
     */
    public function setFyhfinalizacion($fyhfinalizacion)
    {
        $this->fyhfinalizacion = $fyhfinalizacion;

        return $this;
    }

    /**
     * Get fyhfinalizacion
     *
     * @return \DateTime 
     */
    public function getFyhfinalizacion()
    {
        return $this->fyhfinalizacion;
    }

    /**
     * Set fyhentrega
     *
     * @param \DateTime $fyhentrega
     * @return Ingresos
     */
    public function setFyhentrega($fyhentrega)
    {
        $this->fyhentrega = $fyhentrega;

        return $this;
    }

    /**
     * Get fyhentrega
     *
     * @return \DateTime 
     */
    public function getFyhentrega()
    {
        return $this->fyhentrega;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Ingresos
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
     * Get idIngreso
     *
     * @return integer 
     */
    public function getIdIngreso()
    {
        return $this->idIngreso;
    }

    /**
     * Set idTipingreso
     *
     * @param \AppBundle\Entity\Tipingresos $idTipingreso
     * @return Ingresos
     */
    public function setIdTipingreso(\AppBundle\Entity\Tipingresos $idTipingreso = null)
    {
        $this->idTipingreso = $idTipingreso;

        return $this;
    }

    /**
     * Get idTipingreso
     *
     * @return \AppBundle\Entity\Tipingresos 
     */
    public function getIdTipingreso()
    {
        return $this->idTipingreso;
    }

    /**
     * Set idEstado
     *
     * @param \AppBundle\Entity\Estados $idEstado
     * @return Ingresos
     */
    public function setIdEstado(\AppBundle\Entity\Estados $idEstado = null)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

    /**
     * Get idEstado
     *
     * @return \AppBundle\Entity\Estados 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set idVehiculo
     *
     * @param \AppBundle\Entity\Vehiculos $idVehiculo
     * @return Ingresos
     */
    public function setIdVehiculo(\AppBundle\Entity\Vehiculos $idVehiculo = null)
    {
        $this->idVehiculo = $idVehiculo;

        return $this;
    }

    /**
     * Get idVehiculo
     *
     * @return \AppBundle\Entity\Vehiculos 
     */
    public function getIdVehiculo()
    {
        return $this->idVehiculo;
    }

    /**
     * Set idCliente
     *
     * @param \AppBundle\Entity\Clientes $idCliente
     * @return Ingresos
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
     * @return Ingresos
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
