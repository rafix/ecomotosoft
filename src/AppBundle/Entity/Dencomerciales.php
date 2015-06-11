<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Dencomerciales
 *
 * @ORM\Table(name="dencomerciales", indexes={@ORM\Index(name="id_fabricante", columns={"id_fabricante"})})
 * @ORM\Entity
 * @Rest\Resource(name="dencomerciales")
 */
class Dencomerciales
{
    /**
     * @var string
     *
     * @ORM\Column(name="dencomercial", type="string", length=30, nullable=true)
     */
    private $dencomercial;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_dencomercial", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDencomercial;

    /**
     * @var \AppBundle\Entity\Fabricantes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fabricantes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fabricante", referencedColumnName="id_fabricante")
     * })
     */
    private $idFabricante;



    /**
     * Set dencomercial
     *
     * @param string $dencomercial
     * @return Dencomerciales
     */
    public function setDencomercial($dencomercial)
    {
        $this->dencomercial = $dencomercial;

        return $this;
    }

    /**
     * Get dencomercial
     *
     * @return string 
     */
    public function getDencomercial()
    {
        return $this->dencomercial;
    }

    /**
     * Get idDencomercial
     *
     * @return integer 
     */
    public function getIdDencomercial()
    {
        return $this->idDencomercial;
    }

    /**
     * Set idFabricante
     *
     * @param \AppBundle\Entity\Fabricantes $idFabricante
     * @return Dencomerciales
     */
    public function setIdFabricante(\AppBundle\Entity\Fabricantes $idFabricante = null)
    {
        $this->idFabricante = $idFabricante;

        return $this;
    }

    /**
     * Get idFabricante
     *
     * @return \AppBundle\Entity\Fabricantes 
     */
    public function getIdFabricante()
    {
        return $this->idFabricante;
    }
}
