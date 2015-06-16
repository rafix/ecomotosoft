<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Facturas
 *
 * @ORM\Table(name="facturas", indexes={@ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="id_presupuesto", columns={"id_presupuesto"}), @ORM\Index(name="id_ingreso", columns={"id_ingreso"}), @ORM\Index(name="id_tipaccion", columns={"id_tipaccion"}), @ORM\Index(name="id_cliente", columns={"id_cliente"}), @ORM\Index(name="id_tippago", columns={"id_tippago"}), @ORM\Index(name="id_ordentrabajo", columns={"id_ordentrabajo"})})
 * @ORM\Entity
 *
 */
class Facturas
{
    /**
     * @var string
     *
     * @ORM\Column(name="numfactura", type="string", length=255, nullable=true)
     */
    private $numfactura;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="pagado", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $pagado;

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
     * @var integer
     *
     * @ORM\Column(name="id_factura", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFactura;

    /**
     * @var \AppBundle\Entity\Tippagos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tippagos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tippago", referencedColumnName="id_tippago")
     * })
     */
    private $idTippago;

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
     * @var \AppBundle\Entity\Presupuestos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Presupuestos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_presupuesto", referencedColumnName="id_presupuesto")
     * })
     */
    private $idPresupuesto;

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
     * Set numfactura
     *
     * @param string $numfactura
     * @return Facturas
     */
    public function setNumfactura($numfactura)
    {
        $this->numfactura = $numfactura;

        return $this;
    }

    /**
     * Get numfactura
     *
     * @return string 
     */
    public function getNumfactura()
    {
        return $this->numfactura;
    }

    /**
     * Set total
     *
     * @param string $total
     * @return Facturas
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
     * Set pagado
     *
     * @param string $pagado
     * @return Facturas
     */
    public function setPagado($pagado)
    {
        $this->pagado = $pagado;

        return $this;
    }

    /**
     * Get pagado
     *
     * @return string 
     */
    public function getPagado()
    {
        return $this->pagado;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Facturas
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
     * @return Facturas
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
     * Get idFactura
     *
     * @return integer 
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }

    /**
     * Set idTippago
     *
     * @param \AppBundle\Entity\Tippagos $idTippago
     * @return Facturas
     */
    public function setIdTippago(\AppBundle\Entity\Tippagos $idTippago = null)
    {
        $this->idTippago = $idTippago;

        return $this;
    }

    /**
     * Get idTippago
     *
     * @return \AppBundle\Entity\Tippagos 
     */
    public function getIdTippago()
    {
        return $this->idTippago;
    }

    /**
     * Set idOrdentrabajo
     *
     * @param \AppBundle\Entity\Ordenestrabajos $idOrdentrabajo
     * @return Facturas
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
     * @return Facturas
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
     * @return Facturas
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
     * Set idPresupuesto
     *
     * @param \AppBundle\Entity\Presupuestos $idPresupuesto
     * @return Facturas
     */
    public function setIdPresupuesto(\AppBundle\Entity\Presupuestos $idPresupuesto = null)
    {
        $this->idPresupuesto = $idPresupuesto;

        return $this;
    }

    /**
     * Get idPresupuesto
     *
     * @return \AppBundle\Entity\Presupuestos 
     */
    public function getIdPresupuesto()
    {
        return $this->idPresupuesto;
    }

    /**
     * Set idIngreso
     *
     * @param \AppBundle\Entity\Ingresos $idIngreso
     * @return Facturas
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
     * @return Facturas
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
