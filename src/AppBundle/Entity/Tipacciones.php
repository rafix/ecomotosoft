<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tipacciones
 *
 * @ORM\Table(name="tipacciones", uniqueConstraints={@ORM\UniqueConstraint(name="tipaccion", columns={"tipaccion"})})
 * @ORM\Entity
 *
 */
class Tipacciones
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipaccion", type="string", length=20, nullable=false)
     */
    private $tipaccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipaccion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipaccion;

    /**
     * Set tipaccion
     *
     * @param string $tipaccion
     * @return Tipacciones
     */
    public function setTipaccion($tipaccion)
    {
        $this->tipaccion = $tipaccion;

        return $this;
    }

    /**
     * Get tipaccion
     *
     * @return string 
     */
    public function getTipaccion()
    {
        return $this->tipaccion;
    }

    /**
     * Get idTipaccion
     *
     * @return integer 
     */
    public function getIdTipaccion()
    {
        return $this->idTipaccion;
    }

    public function __toString()
    {
        return $this->getTipaccion();
    }
}
