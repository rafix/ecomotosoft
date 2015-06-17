<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tippagos
 *
 * @ORM\Table(name="tippagos", uniqueConstraints={@ORM\UniqueConstraint(name="tippago", columns={"tippago"})})
 * @ORM\Entity
 *
 */
class Tippagos
{
    /**
     * @var string
     *
     * @ORM\Column(name="tippago", type="string", length=30, nullable=false)
     */
    private $tippago;

     /**
     * @var integer
     *
     * @ORM\Column(name="id_tippago", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTippago;



    /**
     * Set tippago
     *
     * @param string $tippago
     * @return Tippagos
     */
    public function setTippago($tippago)
    {
        $this->tippago = $tippago;

        return $this;
    }

    /**
     * Get tippago
     *
     * @return string 
     */
    public function getTippago()
    {
        return $this->tippago;
    }

    /**
     * Get idTippago
     *
     * @return integer 
     */
    public function getIdTippago()
    {
        return $this->idTippago;
    }

    public function __toString()
    {
        return $this->getTippago();
    }
}
