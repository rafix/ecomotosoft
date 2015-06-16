<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Vehiculos
 *
 * @ORM\Table(name="vehiculos", indexes={@ORM\Index(name="id_pais", columns={"id_pais"}), @ORM\Index(name="id_cliente", columns={"id_cliente"}), @ORM\Index(name="id_modelo", columns={"id_modelo"})})
 * @ORM\Entity
 *
 */
class Vehiculos
{
    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", length=8, nullable=true)
     */
    private $matricula;

    /**
     * @var string
     *
     * @ORM\Column(name="numbastidor", type="string", length=17, nullable=true)
     */
    private $numbastidor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecmatriculacion", type="datetime", nullable=false)
     */
    private $fecmatriculacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecfabricacion", type="datetime", nullable=false)
     */
    private $fecfabricacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecitv", type="datetime", nullable=false)
     */
    private $fecitv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecmantenimiento", type="datetime", nullable=false)
     */
    private $fecmantenimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="fictecnica", type="string", length=255, nullable=true)
     */
    private $fictecnica;

    /**
     * @var string
     *
     * @ORM\Column(name="percirculacion", type="string", length=255, nullable=true)
     */
    private $percirculacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_vehiculo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVehiculo;

    /**
     * @var \AppBundle\Entity\Modelos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Modelos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modelo", referencedColumnName="id_modelo")
     * })
     */
    private $idModelo;

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
     * @var \AppBundle\Entity\Paises
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Paises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id_pais")
     * })
     */
    private $idPais;



    /**
     * Set matricula
     *
     * @param string $matricula
     * @return Vehiculos
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return string 
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set numbastidor
     *
     * @param string $numbastidor
     * @return Vehiculos
     */
    public function setNumbastidor($numbastidor)
    {
        $this->numbastidor = $numbastidor;

        return $this;
    }

    /**
     * Get numbastidor
     *
     * @return string 
     */
    public function getNumbastidor()
    {
        return $this->numbastidor;
    }

    /**
     * Set fecmatriculacion
     *
     * @param \DateTime $fecmatriculacion
     * @return Vehiculos
     */
    public function setFecmatriculacion($fecmatriculacion)
    {
        $this->fecmatriculacion = $fecmatriculacion;

        return $this;
    }

    /**
     * Get fecmatriculacion
     *
     * @return \DateTime 
     */
    public function getFecmatriculacion()
    {
        return $this->fecmatriculacion;
    }

    /**
     * Set fecfabricacion
     *
     * @param \DateTime $fecfabricacion
     * @return Vehiculos
     */
    public function setFecfabricacion($fecfabricacion)
    {
        $this->fecfabricacion = $fecfabricacion;

        return $this;
    }

    /**
     * Get fecfabricacion
     *
     * @return \DateTime 
     */
    public function getFecfabricacion()
    {
        return $this->fecfabricacion;
    }

    /**
     * Set fecitv
     *
     * @param \DateTime $fecitv
     * @return Vehiculos
     */
    public function setFecitv($fecitv)
    {
        $this->fecitv = $fecitv;

        return $this;
    }

    /**
     * Get fecitv
     *
     * @return \DateTime 
     */
    public function getFecitv()
    {
        return $this->fecitv;
    }

    /**
     * Set fecmantenimiento
     *
     * @param \DateTime $fecmantenimiento
     * @return Vehiculos
     */
    public function setFecmantenimiento($fecmantenimiento)
    {
        $this->fecmantenimiento = $fecmantenimiento;

        return $this;
    }

    /**
     * Get fecmantenimiento
     *
     * @return \DateTime 
     */
    public function getFecmantenimiento()
    {
        return $this->fecmantenimiento;
    }

    /**
     * Set fictecnica
     *
     * @param string $fictecnica
     * @return Vehiculos
     */
    public function setFictecnica($fictecnica)
    {
        $this->fictecnica = $fictecnica;

        return $this;
    }

    /**
     * Get fictecnica
     *
     * @return string 
     */
    public function getFictecnica()
    {
        return $this->fictecnica;
    }

    /**
     * Set percirculacion
     *
     * @param string $percirculacion
     * @return Vehiculos
     */
    public function setPercirculacion($percirculacion)
    {
        $this->percirculacion = $percirculacion;

        return $this;
    }

    /**
     * Get percirculacion
     *
     * @return string 
     */
    public function getPercirculacion()
    {
        return $this->percirculacion;
    }

    /**
     * Get idVehiculo
     *
     * @return integer 
     */
    public function getIdVehiculo()
    {
        return $this->idVehiculo;
    }

    /**
     * Set idModelo
     *
     * @param \AppBundle\Entity\Modelos $idModelo
     * @return Vehiculos
     */
    public function setIdModelo(\AppBundle\Entity\Modelos $idModelo = null)
    {
        $this->idModelo = $idModelo;

        return $this;
    }

    /**
     * Get idModelo
     *
     * @return \AppBundle\Entity\Modelos 
     */
    public function getIdModelo()
    {
        return $this->idModelo;
    }

    /**
     * Set idCliente
     *
     * @param \AppBundle\Entity\Clientes $idCliente
     * @return Vehiculos
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
     * Set idPais
     *
     * @param \AppBundle\Entity\Paises $idPais
     * @return Vehiculos
     */
    public function setIdPais(\AppBundle\Entity\Paises $idPais = null)
    {
        $this->idPais = $idPais;

        return $this;
    }

    /**
     * Get idPais
     *
     * @return \AppBundle\Entity\Paises 
     */
    public function getIdPais()
    {
        return $this->idPais;
    }

    public function __toString()
    {
        return $this->getMatricula();
    }
}
