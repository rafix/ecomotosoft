<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tipclientes
 *
 * @ORM\Table(name="tipclientes", uniqueConstraints={@ORM\UniqueConstraint(name="tipcliente", columns={"tipcliente"})})
 * @ORM\Entity
 *
 */
class Tipclientes
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipcliente", type="string", length=20, nullable=false)
     */
    private $tipcliente;


    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipcliente", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipcliente;



    /**
     * Set tipcliente
     *
     * @param string $tipcliente
     * @return Tipclientes
     */
    public function setTipcliente($tipcliente)
    {
        $this->tipcliente = $tipcliente;

        return $this;
    }

    /**
     * Get tipcliente
     *
     * @return string 
     */
    public function getTipcliente()
    {
        return $this->tipcliente;
    }


    /**
     * Get idTipcliente
     *
     * @return integer 
     */
    public function getIdTipcliente()
    {
        return $this->idTipcliente;
    }

    public function __toString()
    {
        return $this->getTipcliente();
    }
}
