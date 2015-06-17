<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tipingresos
 *
 * @ORM\Table(name="tipingresos", uniqueConstraints={@ORM\UniqueConstraint(name="tipingreso", columns={"tipingreso"})})
 * @ORM\Entity
 *
 */
class Tipingresos
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipingreso", type="string", length=20, nullable=false)
     */
    private $tipingreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipingreso", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipingreso;



    /**
     * Set tipingreso
     *
     * @param string $tipingreso
     * @return Tipingresos
     */
    public function setTipingreso($tipingreso)
    {
        $this->tipingreso = $tipingreso;

        return $this;
    }

    /**
     * Get tipingreso
     *
     * @return string 
     */
    public function getTipingreso()
    {
        return $this->tipingreso;
    }

    /**
     * Get idTipingreso
     *
     * @return integer 
     */
    public function getIdTipingreso()
    {
        return $this->idTipingreso;
    }

    public function __toString()
    {
        return $this->getTipingreso();
    }
}
