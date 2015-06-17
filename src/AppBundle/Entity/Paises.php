<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Paises
 *
 * @ORM\Table(name="paises", uniqueConstraints={@ORM\UniqueConstraint(name="pais", columns={"pais"})}, indexes={@ORM\Index(name="id_moneda", columns={"id_moneda"}), @ORM\Index(name="id_impuesto", columns={"id_impuesto"})})
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
        return $this->getPais();
    }
}
