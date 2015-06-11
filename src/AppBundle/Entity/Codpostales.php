<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Codpostales
 *
 * @ORM\Table(name="codpostales", indexes={@ORM\Index(name="id_poblacion", columns={"id_poblacion"})})
 * @ORM\Entity
 * @Rest\Resource(name="codpostales")
 */
class Codpostales
{
    /**
     * @var string
     *
     * @ORM\Column(name="codpostal", type="string", length=5, nullable=false)
     */
    private $codpostal;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_codpostal", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCodpostal;

    /**
     * @var \AppBundle\Entity\Poblaciones
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Poblaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_poblacion", referencedColumnName="id_poblacion")
     * })
     */
    private $idPoblacion;



    /**
     * Set codpostal
     *
     * @param string $codpostal
     * @return Codpostales
     */
    public function setCodpostal($codpostal)
    {
        $this->codpostal = $codpostal;

        return $this;
    }

    /**
     * Get codpostal
     *
     * @return string 
     */
    public function getCodpostal()
    {
        return $this->codpostal;
    }

    /**
     * Get idCodpostal
     *
     * @return integer 
     */
    public function getIdCodpostal()
    {
        return $this->idCodpostal;
    }

    /**
     * Set idPoblacion
     *
     * @param \AppBundle\Entity\Poblaciones $idPoblacion
     * @return Codpostales
     */
    public function setIdPoblacion(\AppBundle\Entity\Poblaciones $idPoblacion = null)
    {
        $this->idPoblacion = $idPoblacion;

        return $this;
    }

    /**
     * Get idPoblacion
     *
     * @return \AppBundle\Entity\Poblaciones 
     */
    public function getIdPoblacion()
    {
        return $this->idPoblacion;
    }
}
