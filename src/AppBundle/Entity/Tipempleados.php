<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tipempleados
 *
 * @ORM\Table(name="tipempleados", uniqueConstraints={@ORM\UniqueConstraint(name="tipempleado", columns={"tipempleado"})})
 * @ORM\Entity
 *
 */
class Tipempleados
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipempleado", type="string", length=20, nullable=false)
     */
    private $tipempleado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipempleado", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipempleado;



    /**
     * Set tipempleado
     *
     * @param string $tipempleado
     * @return Tipempleados
     */
    public function setTipempleado($tipempleado)
    {
        $this->tipempleado = $tipempleado;

        return $this;
    }

    /**
     * Get tipempleado
     *
     * @return string 
     */
    public function getTipempleado()
    {
        return $this->tipempleado;
    }


    /**
     * Get idTipempleado
     *
     * @return integer 
     */
    public function getIdTipempleado()
    {
        return $this->idTipempleado;
    }

    public function __toString()
    {
        return $this->getTipempleado();
    }
}
