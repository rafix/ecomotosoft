<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Impuestos
 *
 * @ORM\Table(name="impuestos", uniqueConstraints={@ORM\UniqueConstraint(name="impuesto", columns={"impuesto"})})
 * @ORM\Entity
 * @Rest\Resource(name="impuestos")
 */
class Impuestos
{
    /**
     * @var string
     *
     * @ORM\Column(name="impuesto", type="decimal", precision=3, scale=2, nullable=false)
     */
    private $impuesto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_impuesto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImpuesto;



    /**
     * Set impuesto
     *
     * @param string $impuesto
     * @return Impuestos
     */
    public function setImpuesto($impuesto)
    {
        $this->impuesto = $impuesto;

        return $this;
    }

    /**
     * Get impuesto
     *
     * @return string 
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * Get idImpuesto
     *
     * @return integer 
     */
    public function getIdImpuesto()
    {
        return $this->idImpuesto;
    }
}
