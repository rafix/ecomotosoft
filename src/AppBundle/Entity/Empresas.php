<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Empresas
 *
 * @ORM\Table(name="empresas", uniqueConstraints={@ORM\UniqueConstraint(name="nif_cif", columns={"nif_cif"}), @ORM\UniqueConstraint(name="numplaca", columns={"numplaca"}), @ORM\UniqueConstraint(name="facebook", columns={"facebook"}), @ORM\UniqueConstraint(name="logo", columns={"logo"}), @ORM\UniqueConstraint(name="web", columns={"web"})}, indexes={@ORM\Index(name="id_idioma", columns={"id_idioma"}), @ORM\Index(name="id_codpostal", columns={"id_codpostal"})})
 * @ORM\Entity
 * @Rest\Resource(name="empresas")
 */
class Empresas
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
     * @ORM\Column(name="numplaca", type="string", length=9, nullable=true)
     */
    private $numplaca;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=50, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=80, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="premanoobra", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $premanoobra;

    /**
     * @var string
     *
     * @ORM\Column(name="web", type="string", length=50, nullable=true)
     */
    private $web;

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
     * @var boolean
     *
     * @ORM\Column(name="proveedor", type="boolean", nullable=true)
     */
    private $proveedor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="concesionario", type="boolean", nullable=true)
     */
    private $concesionario;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_empresa", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmpresa;

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
     * @var \AppBundle\Entity\Relempresasclientes
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Relempresasclientes", mappedBy="idEmpresa")
     *
     */
    private $empresasClientes;

    /*
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Relempresasemails", mappedBy="idEmpresa")
     */
    private $empresasEmails;

    /**
     * Set nifCif
     *
     * @param string $nifCif
     * @return Empresas
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
     * @return Empresas
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
     * @return Empresas
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
     * Set numplaca
     *
     * @param string $numplaca
     * @return Empresas
     */
    public function setNumplaca($numplaca)
    {
        $this->numplaca = $numplaca;

        return $this;
    }

    /**
     * Get numplaca
     *
     * @return string
     */
    public function getNumplaca()
    {
        return $this->numplaca;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Empresas
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Empresas
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
     * Set logo
     *
     * @param string $logo
     * @return Empresas
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set premanoobra
     *
     * @param string $premanoobra
     * @return Empresas
     */
    public function setPremanoobra($premanoobra)
    {
        $this->premanoobra = $premanoobra;

        return $this;
    }

    /**
     * Get premanoobra
     *
     * @return string
     */
    public function getPremanoobra()
    {
        return $this->premanoobra;
    }

    /**
     * Set web
     *
     * @param string $web
     * @return Empresas
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Empresas
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
     * @return Empresas
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
     * Set proveedor
     *
     * @param boolean $proveedor
     * @return Empresas
     */
    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;

        return $this;
    }

    /**
     * Get proveedor
     *
     * @return boolean
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }

    /**
     * Set concesionario
     *
     * @param boolean $concesionario
     * @return Empresas
     */
    public function setConcesionario($concesionario)
    {
        $this->concesionario = $concesionario;

        return $this;
    }

    /**
     * Get concesionario
     *
     * @return boolean
     */
    public function getConcesionario()
    {
        return $this->concesionario;
    }

    /**
     * Get idEmpresa
     *
     * @return integer
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Set idCodpostal
     *
     * @param \AppBundle\Entity\Codpostales $idCodpostal
     * @return Empresas
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
     * @return Empresas
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

    public function __toString()
    {
        return (string)$this->getIdEmpresa() . ' - ' . $this->getNomfiscal();
    }

    public function __construct()
    {
        $this->empresasClientes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->empresasEmails = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getEmpresasClientes()
    {
        return $this->empresasClientes;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $empresasClientes
     */
    public function setEmpresasClientes($empresasClientes)
    {
        $this->empresasClientes[] = $empresasClientes;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getEmpresasEmails()
    {
        return $this->empresasClientes;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $empresasEmails
     */
    public function setEmpresasEmails($empresasEmails)
    {
        $this->empresasEmails[] = $empresasEmails;
    }

}
