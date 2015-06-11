<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Clientes
 *
 * @ORM\Table(name="clientes", uniqueConstraints={@ORM\UniqueConstraint(name="nif_cif", columns={"nif_cif"})}, indexes={@ORM\Index(name="id_tipcliente", columns={"id_tipcliente"}), @ORM\Index(name="id_idioma", columns={"id_idioma"}), @ORM\Index(name="id_codpostal", columns={"id_codpostal"})})
 * @ORM\Entity
 * @Rest\Resource(name="clientes")
 */
class Clientes
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
     * @ORM\Column(name="nomcomercial", type="string", length=50, nullable=true)
     */
    private $nomcomercial;

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
     * @var integer
     *
     * @ORM\Column(name="id_cliente", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;

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
     * @var \AppBundle\Entity\Tipclientes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tipclientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipcliente", referencedColumnName="id_tipcliente")
     * })
     */
    private $idTipcliente;



    /**
     * Set nifCif
     *
     * @param string $nifCif
     * @return Clientes
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
     * @return Clientes
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
     * Set nomcomercial
     *
     * @param string $nomcomercial
     * @return Clientes
     */
    public function setNomcomercial($nomcomercial)
    {
        $this->nomcomercial = $nomcomercial;

        return $this;
    }

    /**
     * Get nomcomercial
     *
     * @return string 
     */
    public function getNomcomercial()
    {
        return $this->nomcomercial;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Clientes
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
     * @return Clientes
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
     * @return Clientes
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
     * @return Clientes
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
     * @return Clientes
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
     * @return Clientes
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
     * Get idCliente
     *
     * @return integer 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idCodpostal
     *
     * @param \AppBundle\Entity\Codpostales $idCodpostal
     * @return Clientes
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
     * @return Clientes
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
     * Set idTipcliente
     *
     * @param \AppBundle\Entity\Tipclientes $idTipcliente
     * @return Clientes
     */
    public function setIdTipcliente(\AppBundle\Entity\Tipclientes $idTipcliente = null)
    {
        $this->idTipcliente = $idTipcliente;

        return $this;
    }

    /**
     * Get idTipcliente
     *
     * @return \AppBundle\Entity\Tipclientes 
     */
    public function getIdTipcliente()
    {
        return $this->idTipcliente;
    }
}
