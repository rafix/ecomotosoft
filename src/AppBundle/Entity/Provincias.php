<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Provincias
 *
 * @ORM\Table(name="provincias", uniqueConstraints={@ORM\UniqueConstraint(name="provincia_1", columns={"provincia_1"}), @ORM\UniqueConstraint(name="provincia_2", columns={"provincia_2"}), @ORM\UniqueConstraint(name="provincia_3", columns={"provincia_3"}), @ORM\UniqueConstraint(name="provincia_4", columns={"provincia_4"}), @ORM\UniqueConstraint(name="provincia_5", columns={"provincia_5"}), @ORM\UniqueConstraint(name="provincia_6", columns={"provincia_6"})}, indexes={@ORM\Index(name="id_pais", columns={"id_pais"})})
 * @ORM\Entity
 * @Rest\Resource(name="provincias")
 */
class Provincias
{
    /**
     * @var string
     *
     * @ORM\Column(name="provincia_1", type="string", length=50, nullable=false)
     */
    private $provincia1;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia_2", type="string", length=30, nullable=true)
     */
    private $provincia2;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia_3", type="string", length=30, nullable=true)
     */
    private $provincia3;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia_4", type="string", length=30, nullable=true)
     */
    private $provincia4;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia_5", type="string", length=30, nullable=true)
     */
    private $provincia5;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia_6", type="string", length=30, nullable=true)
     */
    private $provincia6;

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
     * Set provincia1
     *
     * @param string $provincia1
     * @return Provincias
     */
    public function setProvincia1($provincia1)
    {
        $this->provincia1 = $provincia1;

        return $this;
    }

    /**
     * Get provincia1
     *
     * @return string 
     */
    public function getProvincia1()
    {
        return $this->provincia1;
    }

    /**
     * Set provincia2
     *
     * @param string $provincia2
     * @return Provincias
     */
    public function setProvincia2($provincia2)
    {
        $this->provincia2 = $provincia2;

        return $this;
    }

    /**
     * Get provincia2
     *
     * @return string 
     */
    public function getProvincia2()
    {
        return $this->provincia2;
    }

    /**
     * Set provincia3
     *
     * @param string $provincia3
     * @return Provincias
     */
    public function setProvincia3($provincia3)
    {
        $this->provincia3 = $provincia3;

        return $this;
    }

    /**
     * Get provincia3
     *
     * @return string 
     */
    public function getProvincia3()
    {
        return $this->provincia3;
    }

    /**
     * Set provincia4
     *
     * @param string $provincia4
     * @return Provincias
     */
    public function setProvincia4($provincia4)
    {
        $this->provincia4 = $provincia4;

        return $this;
    }

    /**
     * Get provincia4
     *
     * @return string 
     */
    public function getProvincia4()
    {
        return $this->provincia4;
    }

    /**
     * Set provincia5
     *
     * @param string $provincia5
     * @return Provincias
     */
    public function setProvincia5($provincia5)
    {
        $this->provincia5 = $provincia5;

        return $this;
    }

    /**
     * Get provincia5
     *
     * @return string 
     */
    public function getProvincia5()
    {
        return $this->provincia5;
    }

    /**
     * Set provincia6
     *
     * @param string $provincia6
     * @return Provincias
     */
    public function setProvincia6($provincia6)
    {
        $this->provincia6 = $provincia6;

        return $this;
    }

    /**
     * Get provincia6
     *
     * @return string 
     */
    public function getProvincia6()
    {
        return $this->provincia6;
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
}
