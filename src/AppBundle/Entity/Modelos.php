<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Modelos
 *
 * @ORM\Table(name="modelos", indexes={@ORM\Index(name="id_dencomercial", columns={"id_dencomercial"}), @ORM\Index(name="id_tipvehiculo", columns={"id_tipvehiculo"}), @ORM\Index(name="id_fabricante", columns={"id_fabricante"}), @ORM\Index(name="id_tipcombustible", columns={"id_tipcombustible"})})
 * @ORM\Entity
 *
 */
class Modelos
{
    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=20, nullable=true)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="ano", type="string", length=20, nullable=true)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="cilindrada", type="integer", nullable=true)
     */
    private $cilindrada;

    /**
     * @var string
     *
     * @ORM\Column(name="homologacion", type="string", length=30, nullable=true)
     */
    private $homologacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=10, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="variante", type="string", length=10, nullable=true)
     */
    private $variante;

    /**
     * @var string
     *
     * @ORM\Column(name="codmotor", type="string", length=10, nullable=true)
     */
    private $codmotor;

    /**
     * @var integer
     *
     * @ORM\Column(name="numcilindros", type="integer", nullable=true)
     */
    private $numcilindros;

    /**
     * @var integer
     *
     * @ORM\Column(name="potencia", type="integer", nullable=true)
     */
    private $potencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="db", type="integer", nullable=true)
     */
    private $db;

    /**
     * @var integer
     *
     * @ORM\Column(name="rpm", type="integer", nullable=true)
     */
    private $rpm;

    /**
     * @var integer
     *
     * @ORM\Column(name="distancia", type="integer", nullable=true)
     */
    private $distancia;

    /**
     * @var integer
     *
     * @ORM\Column(name="tara", type="integer", nullable=true)
     */
    private $tara;

    /**
     * @var integer
     *
     * @ORM\Column(name="mma", type="integer", nullable=true)
     */
    private $mma;

    /**
     * @var integer
     *
     * @ORM\Column(name="asientos", type="integer", nullable=true)
     */
    private $asientos;

    /**
     * @var string
     *
     * @ORM\Column(name="neumaticos", type="string", length=50, nullable=true)
     */
    private $neumaticos;

    /**
     * @var integer
     *
     * @ORM\Column(name="altura", type="integer", nullable=true)
     */
    private $altura;

    /**
     * @var integer
     *
     * @ORM\Column(name="anchura", type="integer", nullable=true)
     */
    private $anchura;

    /**
     * @var integer
     *
     * @ORM\Column(name="longitud", type="integer", nullable=true)
     */
    private $longitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="batalla", type="integer", nullable=true)
     */
    private $batalla;

    /**
     * @var integer
     *
     * @ORM\Column(name="viaanterior", type="integer", nullable=true)
     */
    private $viaanterior;

    /**
     * @var integer
     *
     * @ORM\Column(name="viaposterior", type="integer", nullable=true)
     */
    private $viaposterior;

    /**
     * @var string
     *
     * @ORM\Column(name="limiteco", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $limiteco;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_modelo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Tipcombustibles
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tipcombustibles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipcombustible", referencedColumnName="id_tipcombustible")
     * })
     */
    private $combustible;

    /**
     * @var \AppBundle\Entity\Fabricantes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fabricantes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fabricante", referencedColumnName="id_fabricante")
     * })
     */
    private $fabricante;

    /**
     * @var \AppBundle\Entity\Tipvehiculos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tipvehiculos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipvehiculo", referencedColumnName="id_tipvehiculo")
     * })
     */
    private $tipvehiculo;

    /**
     * @var \AppBundle\Entity\Dencomerciales
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dencomerciales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dencomercial", referencedColumnName="id_dencomercial")
     * })
     */
    private $dencomercial;



    /**
     * Set modelo
     *
     * @param string $modelo
     * @return Modelos
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set ano
     *
     * @param string $ano
     * @return Modelos
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return string 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set cilindrada
     *
     * @param integer $cilindrada
     * @return Modelos
     */
    public function setCilindrada($cilindrada)
    {
        $this->cilindrada = $cilindrada;

        return $this;
    }

    /**
     * Get cilindrada
     *
     * @return integer 
     */
    public function getCilindrada()
    {
        return $this->cilindrada;
    }

    /**
     * Set homologacion
     *
     * @param string $homologacion
     * @return Modelos
     */
    public function setHomologacion($homologacion)
    {
        $this->homologacion = $homologacion;

        return $this;
    }

    /**
     * Get homologacion
     *
     * @return string 
     */
    public function getHomologacion()
    {
        return $this->homologacion;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Modelos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set variante
     *
     * @param string $variante
     * @return Modelos
     */
    public function setVariante($variante)
    {
        $this->variante = $variante;

        return $this;
    }

    /**
     * Get variante
     *
     * @return string 
     */
    public function getVariante()
    {
        return $this->variante;
    }

    /**
     * Set codmotor
     *
     * @param string $codmotor
     * @return Modelos
     */
    public function setCodmotor($codmotor)
    {
        $this->codmotor = $codmotor;

        return $this;
    }

    /**
     * Get codmotor
     *
     * @return string 
     */
    public function getCodmotor()
    {
        return $this->codmotor;
    }

    /**
     * Set numcilindros
     *
     * @param integer $numcilindros
     * @return Modelos
     */
    public function setNumcilindros($numcilindros)
    {
        $this->numcilindros = $numcilindros;

        return $this;
    }

    /**
     * Get numcilindros
     *
     * @return integer 
     */
    public function getNumcilindros()
    {
        return $this->numcilindros;
    }

    /**
     * Set potencia
     *
     * @param integer $potencia
     * @return Modelos
     */
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;

        return $this;
    }

    /**
     * Get potencia
     *
     * @return integer 
     */
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * Set db
     *
     * @param integer $db
     * @return Modelos
     */
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    /**
     * Get db
     *
     * @return integer 
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set rpm
     *
     * @param integer $rpm
     * @return Modelos
     */
    public function setRpm($rpm)
    {
        $this->rpm = $rpm;

        return $this;
    }

    /**
     * Get rpm
     *
     * @return integer 
     */
    public function getRpm()
    {
        return $this->rpm;
    }

    /**
     * Set distancia
     *
     * @param integer $distancia
     * @return Modelos
     */
    public function setDistancia($distancia)
    {
        $this->distancia = $distancia;

        return $this;
    }

    /**
     * Get distancia
     *
     * @return integer 
     */
    public function getDistancia()
    {
        return $this->distancia;
    }

    /**
     * Set tara
     *
     * @param integer $tara
     * @return Modelos
     */
    public function setTara($tara)
    {
        $this->tara = $tara;

        return $this;
    }

    /**
     * Get tara
     *
     * @return integer 
     */
    public function getTara()
    {
        return $this->tara;
    }

    /**
     * Set mma
     *
     * @param integer $mma
     * @return Modelos
     */
    public function setMma($mma)
    {
        $this->mma = $mma;

        return $this;
    }

    /**
     * Get mma
     *
     * @return integer 
     */
    public function getMma()
    {
        return $this->mma;
    }

    /**
     * Set asientos
     *
     * @param integer $asientos
     * @return Modelos
     */
    public function setAsientos($asientos)
    {
        $this->asientos = $asientos;

        return $this;
    }

    /**
     * Get asientos
     *
     * @return integer 
     */
    public function getAsientos()
    {
        return $this->asientos;
    }

    /**
     * Set neumaticos
     *
     * @param string $neumaticos
     * @return Modelos
     */
    public function setNeumaticos($neumaticos)
    {
        $this->neumaticos = $neumaticos;

        return $this;
    }

    /**
     * Get neumaticos
     *
     * @return string 
     */
    public function getNeumaticos()
    {
        return $this->neumaticos;
    }

    /**
     * Set altura
     *
     * @param integer $altura
     * @return Modelos
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get altura
     *
     * @return integer 
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set anchura
     *
     * @param integer $anchura
     * @return Modelos
     */
    public function setAnchura($anchura)
    {
        $this->anchura = $anchura;

        return $this;
    }

    /**
     * Get anchura
     *
     * @return integer 
     */
    public function getAnchura()
    {
        return $this->anchura;
    }

    /**
     * Set longitud
     *
     * @param integer $longitud
     * @return Modelos
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return integer 
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set batalla
     *
     * @param integer $batalla
     * @return Modelos
     */
    public function setBatalla($batalla)
    {
        $this->batalla = $batalla;

        return $this;
    }

    /**
     * Get batalla
     *
     * @return integer 
     */
    public function getBatalla()
    {
        return $this->batalla;
    }

    /**
     * Set viaanterior
     *
     * @param integer $viaanterior
     * @return Modelos
     */
    public function setViaanterior($viaanterior)
    {
        $this->viaanterior = $viaanterior;

        return $this;
    }

    /**
     * Get viaanterior
     *
     * @return integer 
     */
    public function getViaanterior()
    {
        return $this->viaanterior;
    }

    /**
     * Set viaposterior
     *
     * @param integer $viaposterior
     * @return Modelos
     */
    public function setViaposterior($viaposterior)
    {
        $this->viaposterior = $viaposterior;

        return $this;
    }

    /**
     * Get viaposterior
     *
     * @return integer 
     */
    public function getViaposterior()
    {
        return $this->viaposterior;
    }

    /**
     * Set limiteco
     *
     * @param string $limiteco
     * @return Modelos
     */
    public function setLimiteco($limiteco)
    {
        $this->limiteco = $limiteco;

        return $this;
    }

    /**
     * Get limiteco
     *
     * @return string 
     */
    public function getLimiteco()
    {
        return $this->limiteco;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set combustible
     *
     * @param \AppBundle\Entity\Tipcombustibles $combustible
     * @return Modelos
     */
    public function setCombustible(\AppBundle\Entity\Tipcombustibles $combustible = null)
    {
        $this->combustible = $combustible;

        return $this;
    }

    /**
     * Get combustible
     *
     * @return \AppBundle\Entity\Tipcombustibles 
     */
    public function getCombustible()
    {
        return $this->combustible;
    }

    /**
     * Set fabricante
     *
     * @param \AppBundle\Entity\Fabricantes $fabricante
     * @return Modelos
     */
    public function setFabricante(\AppBundle\Entity\Fabricantes $fabricante = null)
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    /**
     * Get fabricante
     *
     * @return \AppBundle\Entity\Fabricantes 
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * Set tipvehiculo
     *
     * @param \AppBundle\Entity\Tipvehiculos $tipvehiculo
     * @return Modelos
     */
    public function setTipvehiculo(\AppBundle\Entity\Tipvehiculos $tipvehiculo = null)
    {
        $this->tipvehiculo = $tipvehiculo;

        return $this;
    }

    /**
     * Get tipvehiculo
     *
     * @return \AppBundle\Entity\Tipvehiculos 
     */
    public function getTipvehiculo()
    {
        return $this->tipvehiculo;
    }

    /**
     * Set dencomercial
     *
     * @param \AppBundle\Entity\Dencomerciales $dencomercial
     * @return Modelos
     */
    public function setDencomercial(\AppBundle\Entity\Dencomerciales $dencomercial = null)
    {
        $this->dencomercial = $dencomercial;

        return $this;
    }

    /**
     * Get dencomercial
     *
     * @return \AppBundle\Entity\Dencomerciales 
     */
    public function getDencomercial()
    {
        return $this->dencomercial;
    }

    public function __toString()
    {
        return $this->getModelo();
    }
}
