<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tipcombustibles
 *
 * @ORM\Table(name="tipcombustibles", uniqueConstraints={@ORM\UniqueConstraint(name="tipcombustible", columns={"tipcombustible"})})
 * @ORM\Entity
 *
 */
class Tipcombustibles
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipcombustible", type="string", length=20, nullable=false)
     */
    private $tipcombustible;

     /**
     * @var integer
     *
     * @ORM\Column(name="id_tipcombustible", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set tipcombustible
     *
     * @param string $tipcombustible
     * @return Tipcombustibles
     */
    public function setTipcombustible($tipcombustible)
    {
        $this->tipcombustible = $tipcombustible;

        return $this;
    }

    /**
     * Get tipcombustible
     *
     * @return string 
     */
    public function getTipcombustible()
    {
        return $this->tipcombustible;
    }


    /**
     * Get idTipcombustible
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->getTipcombustible();
    }
}
