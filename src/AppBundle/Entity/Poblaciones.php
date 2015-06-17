<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Poblaciones
 *
 * @ORM\Table(name="poblaciones", uniqueConstraints={@ORM\UniqueConstraint(name="poblacion", columns={"poblacion"})}, indexes={@ORM\Index(name="id_provincia", columns={"id_provincia"})})
 * @ORM\Entity
 *
 */
class Poblaciones
{
    /**
     * @var string
     *
     * @ORM\Column(name="poblacion", type="string", length=50, nullable=false)
     */
    private $poblacion;


    /**
     * @var integer
     *
     * @ORM\Column(name="id_poblacion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPoblacion;

    /**
     * @var \AppBundle\Entity\Provincias
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Provincias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_provincia", referencedColumnName="id_provincia")
     * })
     */
    private $idProvincia;



    /**
     * Set poblacion
     *
     * @param string $poblacion
     * @return Poblaciones
     */
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;

        return $this;
    }

    /**
     * Get poblacion
     *
     * @return string 
     */
    public function getPoblacion()
    {
        return $this->poblacion;
    }

    /**
     * Get idPoblacion
     *
     * @return integer 
     */
    public function getIdPoblacion()
    {
        return $this->idPoblacion;
    }

    /**
     * Set idProvincia
     *
     * @param \AppBundle\Entity\Provincias $idProvincia
     * @return Poblaciones
     */
    public function setIdProvincia(\AppBundle\Entity\Provincias $idProvincia = null)
    {
        $this->idProvincia = $idProvincia;

        return $this;
    }

    /**
     * Get idProvincia
     *
     * @return \AppBundle\Entity\Provincias 
     */
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    public function __toString()
    {
        return $this->getPoblacion();
    }
}
