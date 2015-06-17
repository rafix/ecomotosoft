<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Provincias
 *
 * @ORM\Table(name="provincias", uniqueConstraints={@ORM\UniqueConstraint(name="provincia", columns={"provincia"})}, indexes={@ORM\Index(name="id_pais", columns={"id_pais"})})
 * @ORM\Entity
 *
 */
class Provincias
{
    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=50, nullable=false)
     */
    private $provincia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_provincia", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProvincia;

    /**
     * @var \AppBundle\Entity\Paises
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Paises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id_pais")
     * })
     */
    private $idPais;



    /**
     * Set provincia
     *
     * @param string $provincia
     * @return Provincias
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Get idProvincia
     *
     * @return integer 
     */
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    /**
     * Set idPais
     *
     * @param \AppBundle\Entity\Paises $idPais
     * @return Provincias
     */
    public function setIdPais(\AppBundle\Entity\Paises $idPais = null)
    {
        $this->idPais = $idPais;

        return $this;
    }

    /**
     * Get idPais
     *
     * @return \AppBundle\Entity\Paises 
     */
    public function getIdPais()
    {
        return $this->idPais;
    }

    public function __toString()
    {
        return $this->getProvincia();
    }
}
