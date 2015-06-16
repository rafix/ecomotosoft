<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Citas
 *
 * @ORM\Table(name="citas", indexes={@ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="id_cliente", columns={"id_cliente"}), @ORM\Index(name="id_tipingreso", columns={"id_tipingreso"}), @ORM\Index(name="id_vehiculo", columns={"id_vehiculo"})})
 * @ORM\Entity
 *
 */
class Citas
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechayhora", type="datetime", nullable=false)
     */
    private $fechayhora;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cita", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCita;

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
     * @var \AppBundle\Entity\Tipingresos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tipingresos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipingreso", referencedColumnName="id_tipingreso")
     * })
     */
    private $idTipingreso;

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
     * Set fechayhora
     *
     * @param \DateTime $fechayhora
     * @return Citas
     */
    public function setFechayhora($fechayhora)
    {
        $this->fechayhora = $fechayhora;

        return $this;
    }

    /**
     * Get fechayhora
     *
     * @return \DateTime 
     */
    public function getFechayhora()
    {
        return $this->fechayhora;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Citas
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
     * Get idCita
     *
     * @return integer 
     */
    public function getIdCita()
    {
        return $this->idCita;
    }

    /**
     * Set idVehiculo
     *
     * @param \AppBundle\Entity\Vehiculos $idVehiculo
     * @return Citas
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
     * Set idTipingreso
     *
     * @param \AppBundle\Entity\Tipingresos $idTipingreso
     * @return Citas
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
     * Set idCliente
     *
     * @param \AppBundle\Entity\Clientes $idCliente
     * @return Citas
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
     * @return Citas
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

    public function __toString()
    {
        return (string)$this->getFechayhora(). '-'. $this->getIdCliente();
    }
}
