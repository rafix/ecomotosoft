<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Paises
 *
 * @ORM\Table(name="paises", uniqueConstraints={@ORM\UniqueConstraint(name="pais", columns={"pais"})}, indexes={@ORM\Index(name="moneda", columns={"id_moneda"}), @ORM\Index(name="impuesto", columns={"id_impuesto"})})
 * @ORM\Entity
 *
 */
class Paises
{
    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=50, nullable=false)
     */
    private $pais;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pais", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Impuestos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Impuestos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_impuesto", referencedColumnName="id_impuesto")
     * })
     */
    private $impuesto;

    /**
     * @var \AppBundle\Entity\Monedas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Monedas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_moneda", referencedColumnName="id_moneda")
     * })
     */
    private $moneda;



    /**
     * Set pais
     *
     * @param string $pais
     * @return Paises
     */
    public function setPais($pais)
    {
        $this->pais1 = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
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
     * Set impuesto
     *
     * @param \AppBundle\Entity\Impuestos $impuesto
     * @return Paises
     */
    public function setImpuesto(\AppBundle\Entity\Impuestos $impuesto = null)
    {
        $this->impuesto = $impuesto;

        return $this;
    }

    /**
     * Get impuesto
     *
     * @return \AppBundle\Entity\Impuestos 
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * Set moneda
     *
     * @param \AppBundle\Entity\Monedas $moneda
     * @return Paises
     */
    public function setMoneda(\AppBundle\Entity\Monedas $moneda = null)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return \AppBundle\Entity\Monedas 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    public function __toString()
    {
        return $this->getPais();
    }
}
