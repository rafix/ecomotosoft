<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Dencomerciales
 *
 * @ORM\Table(name="dencomerciales", indexes={@ORM\Index(name="id_fabricante", columns={"id_fabricante"})})
 * @ORM\Entity
 *
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
    private $id;

    /**
     * @var \AppBundle\Entity\Fabricantes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fabricantes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fabricante", referencedColumnName="id_fabricante")
     * })
     */
    private $fabricante;



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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fabricante
     *
     * @param \AppBundle\Entity\Fabricantes $fabricante
     * @return Dencomerciales
     */
    public function setFabricante(\AppBundle\Entity\Fabricantes $fabricante = null)
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    /**
     * Get idFabricante
     *
     * @return \AppBundle\Entity\Fabricantes 
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }

    public function __toString()
    {
        return $this->getDencomercial();
    }

}
