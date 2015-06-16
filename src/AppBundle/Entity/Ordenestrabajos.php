<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Ordenestrabajos
 *
 * @ORM\Table(name="ordenestrabajos", indexes={@ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="id_empleado", columns={"id_empleado"}), @ORM\Index(name="id_ingreso", columns={"id_ingreso"})})
 * @ORM\Entity
 *
 */
class Ordenestrabajos
{
    /**
     * @var string
     *
     * @ORM\Column(name="numordentrabajo", type="string", length=255, nullable=true)
     */
    private $numordentrabajo;

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
     * @ORM\Column(name="presupuestado", type="boolean", nullable=true)
     */
    private $presupuestado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="facturado", type="boolean", nullable=true)
     */
    private $facturado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ordentrabajo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdentrabajo;

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
     * Set numordentrabajo
     *
     * @param string $numordentrabajo
     * @return Ordenestrabajos
     */
    public function setNumordentrabajo($numordentrabajo)
    {
        $this->numordentrabajo = $numordentrabajo;

        return $this;
    }

    /**
     * Get numordentrabajo
     *
     * @return string 
     */
    public function getNumordentrabajo()
    {
        return $this->numordentrabajo;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Ordenestrabajos
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
     * @return Ordenestrabajos
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
     * Set presupuestado
     *
     * @param boolean $presupuestado
     * @return Ordenestrabajos
     */
    public function setPresupuestado($presupuestado)
    {
        $this->presupuestado = $presupuestado;

        return $this;
    }

    /**
     * Get presupuestado
     *
     * @return boolean 
     */
    public function getPresupuestado()
    {
        return $this->presupuestado;
    }

    /**
     * Set facturado
     *
     * @param boolean $facturado
     * @return Ordenestrabajos
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
     * Get idOrdentrabajo
     *
     * @return integer 
     */
    public function getIdOrdentrabajo()
    {
        return $this->idOrdentrabajo;
    }

    /**
     * Set idIngreso
     *
     * @param \AppBundle\Entity\Ingresos $idIngreso
     * @return Ordenestrabajos
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
     * Set idEmpleado
     *
     * @param \AppBundle\Entity\Empleados $idEmpleado
     * @return Ordenestrabajos
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
     * @return Ordenestrabajos
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
