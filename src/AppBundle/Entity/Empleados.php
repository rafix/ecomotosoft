<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Empleados
 *
 * @ORM\Table(name="empleados", uniqueConstraints={@ORM\UniqueConstraint(name="nif_cif", columns={"nif_cif"}), @ORM\UniqueConstraint(name="nss", columns={"nss"})}, indexes={@ORM\Index(name="id_tipempleado", columns={"id_tipempleado"}), @ORM\Index(name="id_idioma", columns={"id_idioma"}), @ORM\Index(name="id_codpostal", columns={"id_codpostal"})})
 * @ORM\Entity
 * @Rest\Resource(name="empresas")
 */
class Empleados
{
    /**
     * @var string
     *
     * @ORM\Column(name="nif_cif", type="string", length=9, nullable=true)
     */
    private $nifCif;

    /**
     * @var string
     *
     * @ORM\Column(name="nomfiscal", type="string", length=50, nullable=true)
     */
    private $nomfiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="nss", type="string", length=11, nullable=true)
     */
    private $nss;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=80, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono1", type="string", length=17, nullable=true)
     */
    private $telefono1;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono2", type="string", length=17, nullable=true)
     */
    private $telefono2;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=17, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="autorizado", type="boolean", nullable=true)
     */
    private $autorizado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_empleado", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmpleado;

    /**
     * @var \AppBundle\Entity\Codpostales
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Codpostales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_codpostal", referencedColumnName="id_codpostal")
     * })
     */
    private $idCodpostal;

    /**
     * @var \AppBundle\Entity\Idiomas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Idiomas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_idioma", referencedColumnName="id_idioma")
     * })
     */
    private $idioma;

    /**
     * @var \AppBundle\Entity\Tipempleados
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tipempleados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipempleado", referencedColumnName="id_tipempleado")
     * })
     */
    private $idTipempleado;



    /**
     * Set nifCif
     *
     * @param string $nifCif
     * @return Empleados
     */
    public function setNifCif($nifCif)
    {
        $this->nifCif = $nifCif;

        return $this;
    }

    /**
     * Get nifCif
     *
     * @return string 
     */
    public function getNifCif()
    {
        return $this->nifCif;
    }

    /**
     * Set nomfiscal
     *
     * @param string $nomfiscal
     * @return Empleados
     */
    public function setNomfiscal($nomfiscal)
    {
        $this->nomfiscal = $nomfiscal;

        return $this;
    }

    /**
     * Get nomfiscal
     *
     * @return string 
     */
    public function getNomfiscal()
    {
        return $this->nomfiscal;
    }

    /**
     * Set nss
     *
     * @param string $nss
     * @return Empleados
     */
    public function setNss($nss)
    {
        $this->nss = $nss;

        return $this;
    }

    /**
     * Get nss
     *
     * @return string 
     */
    public function getNss()
    {
        return $this->nss;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Empleados
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono1
     *
     * @param string $telefono1
     * @return Empleados
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return string 
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     * @return Empleados
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string 
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Empleados
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Empleados
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Empleados
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set autorizado
     *
     * @param boolean $autorizado
     * @return Empleados
     */
    public function setAutorizado($autorizado)
    {
        $this->autorizado = $autorizado;

        return $this;
    }

    /**
     * Get autorizado
     *
     * @return boolean 
     */
    public function getAutorizado()
    {
        return $this->autorizado;
    }

    /**
     * Get idEmpleado
     *
     * @return integer 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set idCodpostal
     *
     * @param \AppBundle\Entity\Codpostales $idCodpostal
     * @return Empleados
     */
    public function setIdCodpostal(\AppBundle\Entity\Codpostales $idCodpostal = null)
    {
        $this->idCodpostal = $idCodpostal;

        return $this;
    }

    /**
     * Get idCodpostal
     *
     * @return \AppBundle\Entity\Codpostales 
     */
    public function getIdCodpostal()
    {
        return $this->idCodpostal;
    }

    /**
     * Set idioma
     *
     * @param \AppBundle\Entity\Idiomas $idioma
     * @return Empleados
     */
    public function setIdioma(\AppBundle\Entity\Idiomas $idioma = null)
    {
        $this->idioma = $idioma;

        return $this;
    }

    /**
     * Get idioma
     *
     * @return \AppBundle\Entity\Idiomas 
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Set idTipempleado
     *
     * @param \AppBundle\Entity\Tipempleados $idTipempleado
     * @return Empleados
     */
    public function setIdTipempleado(\AppBundle\Entity\Tipempleados $idTipempleado = null)
    {
        $this->idTipempleado = $idTipempleado;

        return $this;
    }

    /**
     * Get idTipempleado
     *
     * @return \AppBundle\Entity\Tipempleados 
     */
    public function getIdTipempleado()
    {
        return $this->idTipempleado;
    }
}
