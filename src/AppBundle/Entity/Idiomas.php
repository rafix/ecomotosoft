<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Idiomas
 *
 * @ORM\Table(name="idiomas", uniqueConstraints={@ORM\UniqueConstraint(name="idioma_1", columns={"idioma_1"}), @ORM\UniqueConstraint(name="idioma_2", columns={"idioma_2"}), @ORM\UniqueConstraint(name="idioma_3", columns={"idioma_3"}), @ORM\UniqueConstraint(name="idioma_4", columns={"idioma_4"}), @ORM\UniqueConstraint(name="idioma_5", columns={"idioma_5"}), @ORM\UniqueConstraint(name="idioma_6", columns={"idioma_6"})}, indexes={@ORM\Index(name="id_pais", columns={"id_pais"})})
 * @ORM\Entity
 * @Rest\Resource(name="idiomas")
 */
class Idiomas
{
    /**
     * @var string
     *
     * @ORM\Column(name="idioma_1", type="string", length=30, nullable=false)
     */
    private $idioma1;

    /**
     * @var string
     *
     * @ORM\Column(name="idioma_2", type="string", length=30, nullable=true)
     */
    private $idioma2;

    /**
     * @var string
     *
     * @ORM\Column(name="idioma_3", type="string", length=30, nullable=true)
     */
    private $idioma3;

    /**
     * @var string
     *
     * @ORM\Column(name="idioma_4", type="string", length=30, nullable=true)
     */
    private $idioma4;

    /**
     * @var string
     *
     * @ORM\Column(name="idioma_5", type="string", length=30, nullable=true)
     */
    private $idioma5;

    /**
     * @var string
     *
     * @ORM\Column(name="idioma_6", type="string", length=30, nullable=true)
     */
    private $idioma6;

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
     * Set idioma1
     *
     * @param string $idioma1
     * @return Idiomas
     */
    public function setIdioma1($idioma1)
    {
        $this->idioma1 = $idioma1;

        return $this;
    }

    /**
     * Get idioma1
     *
     * @return string 
     */
    public function getIdioma1()
    {
        return $this->idioma1;
    }

    /**
     * Set idioma2
     *
     * @param string $idioma2
     * @return Idiomas
     */
    public function setIdioma2($idioma2)
    {
        $this->idioma2 = $idioma2;

        return $this;
    }

    /**
     * Get idioma2
     *
     * @return string 
     */
    public function getIdioma2()
    {
        return $this->idioma2;
    }

    /**
     * Set idioma3
     *
     * @param string $idioma3
     * @return Idiomas
     */
    public function setIdioma3($idioma3)
    {
        $this->idioma3 = $idioma3;

        return $this;
    }

    /**
     * Get idioma3
     *
     * @return string 
     */
    public function getIdioma3()
    {
        return $this->idioma3;
    }

    /**
     * Set idioma4
     *
     * @param string $idioma4
     * @return Idiomas
     */
    public function setIdioma4($idioma4)
    {
        $this->idioma4 = $idioma4;

        return $this;
    }

    /**
     * Get idioma4
     *
     * @return string 
     */
    public function getIdioma4()
    {
        return $this->idioma4;
    }

    /**
     * Set idioma5
     *
     * @param string $idioma5
     * @return Idiomas
     */
    public function setIdioma5($idioma5)
    {
        $this->idioma5 = $idioma5;

        return $this;
    }

    /**
     * Get idioma5
     *
     * @return string 
     */
    public function getIdioma5()
    {
        return $this->idioma5;
    }

    /**
     * Set idioma6
     *
     * @param string $idioma6
     * @return Idiomas
     */
    public function setIdioma6($idioma6)
    {
        $this->idioma6 = $idioma6;

        return $this;
    }

    /**
     * Get idioma6
     *
     * @return string 
     */
    public function getIdioma6()
    {
        return $this->idioma6;
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
        return $this->getIdioma1();
    }
}
