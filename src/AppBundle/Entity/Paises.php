<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Paises
 *
 * @ORM\Table(name="paises", uniqueConstraints={@ORM\UniqueConstraint(name="pais_1", columns={"pais_1"}), @ORM\UniqueConstraint(name="pais_2", columns={"pais_2"}), @ORM\UniqueConstraint(name="pais_3", columns={"pais_3"}), @ORM\UniqueConstraint(name="pais_4", columns={"pais_4"}), @ORM\UniqueConstraint(name="pais_5", columns={"pais_5"}), @ORM\UniqueConstraint(name="pais_6", columns={"pais_6"}), @ORM\UniqueConstraint(name="bandera", columns={"bandera"})}, indexes={@ORM\Index(name="id_moneda", columns={"id_moneda"}), @ORM\Index(name="id_impuesto", columns={"id_impuesto"})})
 * @ORM\Entity
 *
 */
class Paises
{
    /**
     * @var string
     *
     * @ORM\Column(name="pais_1", type="string", length=50, nullable=false)
     */
    private $pais1;

    /**
     * @var string
     *
     * @ORM\Column(name="pais_2", type="string", length=50, nullable=true)
     */
    private $pais2;

    /**
     * @var string
     *
     * @ORM\Column(name="pais_3", type="string", length=50, nullable=true)
     */
    private $pais3;

    /**
     * @var string
     *
     * @ORM\Column(name="pais_4", type="string", length=50, nullable=true)
     */
    private $pais4;

    /**
     * @var string
     *
     * @ORM\Column(name="pais_5", type="string", length=50, nullable=true)
     */
    private $pais5;

    /**
     * @var string
     *
     * @ORM\Column(name="pais_6", type="string", length=50, nullable=true)
     */
    private $pais6;

    /**
     * @var string
     *
     * @ORM\Column(name="bandera", type="string", length=255, nullable=true)
     */
    private $bandera;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pais", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPais;

    /**
     * @var \AppBundle\Entity\Impuestos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Impuestos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_impuesto", referencedColumnName="id_impuesto")
     * })
     */
    private $idImpuesto;

    /**
     * @var \AppBundle\Entity\Monedas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Monedas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_moneda", referencedColumnName="id_moneda")
     * })
     */
    private $idMoneda;



    /**
     * Set pais1
     *
     * @param string $pais1
     * @return Paises
     */
    public function setPais1($pais1)
    {
        $this->pais1 = $pais1;

        return $this;
    }

    /**
     * Get pais1
     *
     * @return string 
     */
    public function getPais1()
    {
        return $this->pais1;
    }

    /**
     * Set pais2
     *
     * @param string $pais2
     * @return Paises
     */
    public function setPais2($pais2)
    {
        $this->pais2 = $pais2;

        return $this;
    }

    /**
     * Get pais2
     *
     * @return string 
     */
    public function getPais2()
    {
        return $this->pais2;
    }

    /**
     * Set pais3
     *
     * @param string $pais3
     * @return Paises
     */
    public function setPais3($pais3)
    {
        $this->pais3 = $pais3;

        return $this;
    }

    /**
     * Get pais3
     *
     * @return string 
     */
    public function getPais3()
    {
        return $this->pais3;
    }

    /**
     * Set pais4
     *
     * @param string $pais4
     * @return Paises
     */
    public function setPais4($pais4)
    {
        $this->pais4 = $pais4;

        return $this;
    }

    /**
     * Get pais4
     *
     * @return string 
     */
    public function getPais4()
    {
        return $this->pais4;
    }

    /**
     * Set pais5
     *
     * @param string $pais5
     * @return Paises
     */
    public function setPais5($pais5)
    {
        $this->pais5 = $pais5;

        return $this;
    }

    /**
     * Get pais5
     *
     * @return string 
     */
    public function getPais5()
    {
        return $this->pais5;
    }

    /**
     * Set pais6
     *
     * @param string $pais6
     * @return Paises
     */
    public function setPais6($pais6)
    {
        $this->pais6 = $pais6;

        return $this;
    }

    /**
     * Get pais6
     *
     * @return string 
     */
    public function getPais6()
    {
        return $this->pais6;
    }

    /**
     * Set bandera
     *
     * @param string $bandera
     * @return Paises
     */
    public function setBandera($bandera)
    {
        $this->bandera = $bandera;

        return $this;
    }

    /**
     * Get bandera
     *
     * @return string 
     */
    public function getBandera()
    {
        return $this->bandera;
    }

    /**
     * Get idPais
     *
     * @return integer 
     */
    public function getIdPais()
    {
        return $this->idPais;
    }

    /**
     * Set idImpuesto
     *
     * @param \AppBundle\Entity\Impuestos $idImpuesto
     * @return Paises
     */
    public function setIdImpuesto(\AppBundle\Entity\Impuestos $idImpuesto = null)
    {
        $this->idImpuesto = $idImpuesto;

        return $this;
    }

    /**
     * Get idImpuesto
     *
     * @return \AppBundle\Entity\Impuestos 
     */
    public function getIdImpuesto()
    {
        return $this->idImpuesto;
    }

    /**
     * Set idMoneda
     *
     * @param \AppBundle\Entity\Monedas $idMoneda
     * @return Paises
     */
    public function setIdMoneda(\AppBundle\Entity\Monedas $idMoneda = null)
    {
        $this->idMoneda = $idMoneda;

        return $this;
    }

    /**
     * Get idMoneda
     *
     * @return \AppBundle\Entity\Monedas 
     */
    public function getIdMoneda()
    {
        return $this->idMoneda;
    }

    public function __toString()
    {
        return $this->getPais1();
    }
}
