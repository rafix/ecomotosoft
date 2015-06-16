<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Presupuestos
 *
 * @ORM\Table(name="presupuestos", indexes={@ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="id_ingreso", columns={"id_ingreso"}), @ORM\Index(name="id_tipaccion", columns={"id_tipaccion"}), @ORM\Index(name="id_cliente", columns={"id_cliente"}), @ORM\Index(name="id_ordentrabajo", columns={"id_ordentrabajo"})})
 * @ORM\Entity
 *
 */
class Presupuestos
{
    /**
     * @var string
     *
     * @ORM\Column(name="numpresupuesto", type="string", length=255, nullable=true)
     */
    private $numpresupuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="acuenta", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $acuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255, nullable=true)
     */
    private $observaciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="avisado", type="boolean", nullable=true)
     */
    private $avisado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="facturado", type="boolean", nullable=true)
     */
    private $facturado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_presupuesto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPresupuesto;

    /**
     * @var \AppBundle\Entity\Ordenestrabajos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ordenestrabajos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordentrabajo", referencedColumnName="id_ordentrabajo")
     * })
     */
    private $idOrdentrabajo;

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
     * @var \AppBundle\Entity\Tipacciones
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tipacciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipaccion", referencedColumnName="id_tipaccion")
     * })
     */
    private $idTipaccion;

    /**
     * @var \AppBundle\Entity\Ingresos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ingresos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ingreso", referencedColumnName="id_ingreso")
     * })
     */
    private $idIngreso;

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
     * Set numpresupuesto
     *
     * @param string $numpresupuesto
     * @return Presupuestos
     */
    public function setNumpresupuesto($numpresupuesto)
    {
        $this->numpresupuesto = $numpresupuesto;

        return $this;
    }

    /**
     * Get numpresupuesto
     *
     * @return string 
     */
    public function getNumpresupuesto()
    {
        return $this->numpresupuesto;
    }

    /**
     * Set total
     *
     * @param string $total
     * @return Presupuestos
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set acuenta
     *
     * @param string $acuenta
     * @return Presupuestos
     */
    public function setAcuenta($acuenta)
    {
        $this->acuenta = $acuenta;

        return $this;
    }

    /**
     * Get acuenta
     *
     * @return string 
     */
    public function getAcuenta()
    {
        return $this->acuenta;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Presupuestos
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Presupuestos
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set avisado
     *
     * @param boolean $avisado
     * @return Presupuestos
     */
    public function setAvisado($avisado)
    {
        $this->avisado = $avisado;

        return $this;
    }

    /**
     * Get avisado
     *
     * @return boolean 
     */
    public function getAvisado()
    {
        return $this->avisado;
    }

    /**
     * Set facturado
     *
     * @param boolean $facturado
     * @return Presupuestos
     */
    public function setFacturado($facturado)
    {
        $this->facturado = $facturado;

        return $this;
    }

    /**
     * Get facturado
     *
     * @return boolean 
     */
    public function getFacturado()
    {
        return $this->facturado;
    }

    /**
     * Get idPresupuesto
     *
     * @return integer 
     */
    public function getIdPresupuesto()
    {
        return $this->idPresupuesto;
    }

    /**
     * Set idOrdentrabajo
     *
     * @param \AppBundle\Entity\Ordenestrabajos $idOrdentrabajo
     * @return Presupuestos
     */
    public function setIdOrdentrabajo(\AppBundle\Entity\Ordenestrabajos $idOrdentrabajo = null)
    {
        $this->idOrdentrabajo = $idOrdentrabajo;

        return $this;
    }

    /**
     * Get idOrdentrabajo
     *
     * @return \AppBundle\Entity\Ordenestrabajos 
     */
    public function getIdOrdentrabajo()
    {
        return $this->idOrdentrabajo;
    }

    /**
     * Set idCliente
     *
     * @param \AppBundle\Entity\Clientes $idCliente
     * @return Presupuestos
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
     * Set idTipaccion
     *
     * @param \AppBundle\Entity\Tipacciones $idTipaccion
     * @return Presupuestos
     */
    public function setIdTipaccion(\AppBundle\Entity\Tipacciones $idTipaccion = null)
    {
        $this->idTipaccion = $idTipaccion;

        return $this;
    }

    /**
     * Get idTipaccion
     *
     * @return \AppBundle\Entity\Tipacciones 
     */
    public function getIdTipaccion()
    {
        return $this->idTipaccion;
    }

    /**
     * Set idIngreso
     *
     * @param \AppBundle\Entity\Ingresos $idIngreso
     * @return Presupuestos
     */
    public function setIdIngreso(\AppBundle\Entity\Ingresos $idIngreso = null)
    {
        $this->idIngreso = $idIngreso;

        return $this;
    }

    /**
     * Get idIngreso
     *
     * @return \AppBundle\Entity\Ingresos 
     */
    public function getIdIngreso()
    {
        return $this->idIngreso;
    }

    /**
     * Set idEmpresa
     *
     * @param \AppBundle\Entity\Empresas $idEmpresa
     * @return Presupuestos
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
        return $this->getNumpresupuesto();
    }
}
