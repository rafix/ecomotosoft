<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Idiomas
 *
 * @ORM\Table(name="idiomas", uniqueConstraints={@ORM\UniqueConstraint(name="idioma", columns={"idioma"})}, indexes={@ORM\Index(name="id_pais", columns={"id_pais"})})
 * @ORM\Entity
 *
 */
class Idiomas
{
    /**
     * @var string
     *
     * @ORM\Column(name="idioma", type="string", length=30, nullable=false)
     */
    private $idioma;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_idioma", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIdioma;

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
     * Set idioma
     *
     * @param string $idioma1
     * @return Idiomas
     */
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;

        return $this;
    }

    /**
     * Get idioma
     *
     * @return string
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Get idIdioma
     *
     * @return integer
     */
    public function getIdIdioma()
    {
        return $this->idIdioma;
    }

    /**
     * Set idPais
     *
     * @param \AppBundle\Entity\Paises $idPais
     * @return Idiomas
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
        return $this->getIdioma();
    }
}
