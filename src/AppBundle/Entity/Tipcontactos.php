<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tipcontactos
 *
 * @ORM\Table(name="tipcontactos", uniqueConstraints={@ORM\UniqueConstraint(name="tipcontacto", columns={"tipcontacto"})})
 * @ORM\Entity
 *
 */
class Tipcontactos
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipcontacto", type="string", length=20, nullable=false)
     */
    private $tipcontacto;


    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipcontacto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipcontacto;



    /**
     * Set tipcontacto
     *
     * @param string $tipcontacto
     * @return Tipcontactos
     */
    public function setTipcontacto($tipcontacto)
    {
        $this->tipcontacto = $tipcontacto;

        return $this;
    }

    /**
     * Get tipcontacto
     *
     * @return string 
     */
    public function getTipcontacto()
    {
        return $this->tipcontacto;
    }

    /**
     * Get idTipcontacto
     *
     * @return integer 
     */
    public function getIdTipcontacto()
    {
        return $this->idTipcontacto;
    }

    public function __toString()
    {
        return $this->getTipcontacto();
    }
}
