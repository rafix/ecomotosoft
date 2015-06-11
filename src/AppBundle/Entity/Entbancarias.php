<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Entbancarias
 *
 * @ORM\Table(name="entbancarias")
 * @ORM\Entity
 * @Rest\Resource(name="entbancarias")
 */
class Entbancarias
{
    /**
     * @var string
     *
     * @ORM\Column(name="entbancaria", type="string", length=40, nullable=true)
     */
    private $entbancaria;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_entbancaria", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEntbancaria;



    /**
     * Set entbancaria
     *
     * @param string $entbancaria
     * @return Entbancarias
     */
    public function setEntbancaria($entbancaria)
    {
        $this->entbancaria = $entbancaria;

        return $this;
    }

    /**
     * Get entbancaria
     *
     * @return string 
     */
    public function getEntbancaria()
    {
        return $this->entbancaria;
    }

    /**
     * Get idEntbancaria
     *
     * @return integer 
     */
    public function getIdEntbancaria()
    {
        return $this->idEntbancaria;
    }
}
