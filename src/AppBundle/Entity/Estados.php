<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Estados
 *
 * @ORM\Table(name="estados", uniqueConstraints={@ORM\UniqueConstraint(name="estado", columns={"estado"})})
 * @ORM\Entity
 *
 */
class Estados
{
    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=20, nullable=false)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_estado", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEstado;



    /**
     * Set estado
     *
     * @param string $estado
     * @return Estados
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Get idEstado
     *
     * @return integer 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    public function __toString()
    {
        return $this->getEstado();
    }
}
