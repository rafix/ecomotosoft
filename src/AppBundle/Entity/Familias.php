<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Familias
 *
 * @ORM\Table(name="familias", uniqueConstraints={@ORM\UniqueConstraint(name="familia", columns={"familia"})})
 * @ORM\Entity
 *
 */
class Familias
{
    /**
     * @var string
     *
     * @ORM\Column(name="familia", type="string", length=40, nullable=false)
     */
    private $familia;

       /**
     * @var integer
     *
     * @ORM\Column(name="id_familia", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFamilia;



    /**
     * Set familia
     *
     * @param string $familia
     * @return Familias
     */
    public function setFamilia($familia)
    {
        $this->familia = $familia;

        return $this;
    }

    /**
     * Get familia
     *
     * @return string 
     */
    public function getFamilia()
    {
        return $this->familia;
    }

    /**
     * Get idFamilia
     *
     * @return integer 
     */
    public function getIdFamilia()
    {
        return $this->idFamilia;
    }

    public function __toString()
    {
        return $this->getFamilia();
    }
}
