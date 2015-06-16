<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Poblaciones
 *
 * @ORM\Table(name="poblaciones", uniqueConstraints={@ORM\UniqueConstraint(name="poblacion_1", columns={"poblacion_1"}), @ORM\UniqueConstraint(name="poblacion_2", columns={"poblacion_2"}), @ORM\UniqueConstraint(name="poblacion_3", columns={"poblacion_3"}), @ORM\UniqueConstraint(name="poblacion_4", columns={"poblacion_4"}), @ORM\UniqueConstraint(name="poblacion_5", columns={"poblacion_5"}), @ORM\UniqueConstraint(name="poblacion_6", columns={"poblacion_6"})}, indexes={@ORM\Index(name="id_provincia", columns={"id_provincia"})})
 * @ORM\Entity
 *
 */
class Poblaciones
{
    /**
     * @var string
     *
     * @ORM\Column(name="poblacion_1", type="string", length=50, nullable=false)
     */
    private $poblacion1;

    /**
     * @var string
     *
     * @ORM\Column(name="poblacion_2", type="string", length=50, nullable=false)
     */
    private $poblacion2;

    /**
     * @var string
     *
     * @ORM\Column(name="poblacion_3", type="string", length=50, nullable=false)
     */
    private $poblacion3;

    /**
     * @var string
     *
     * @ORM\Column(name="poblacion_4", type="string", length=50, nullable=false)
     */
    private $poblacion4;

    /**
     * @var string
     *
     * @ORM\Column(name="poblacion_5", type="string", length=50, nullable=false)
     */
    private $poblacion5;

    /**
     * @var string
     *
     * @ORM\Column(name="poblacion_6", type="string", length=50, nullable=false)
     */
    private $poblacion6;

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
     * Set poblacion1
     *
     * @param string $poblacion1
     * @return Poblaciones
     */
    public function setPoblacion1($poblacion1)
    {
        $this->poblacion1 = $poblacion1;

        return $this;
    }

    /**
     * Get poblacion1
     *
     * @return string 
     */
    public function getPoblacion1()
    {
        return $this->poblacion1;
    }

    /**
     * Set poblacion2
     *
     * @param string $poblacion2
     * @return Poblaciones
     */
    public function setPoblacion2($poblacion2)
    {
        $this->poblacion2 = $poblacion2;

        return $this;
    }

    /**
     * Get poblacion2
     *
     * @return string 
     */
    public function getPoblacion2()
    {
        return $this->poblacion2;
    }

    /**
     * Set poblacion3
     *
     * @param string $poblacion3
     * @return Poblaciones
     */
    public function setPoblacion3($poblacion3)
    {
        $this->poblacion3 = $poblacion3;

        return $this;
    }

    /**
     * Get poblacion3
     *
     * @return string 
     */
    public function getPoblacion3()
    {
        return $this->poblacion3;
    }

    /**
     * Set poblacion4
     *
     * @param string $poblacion4
     * @return Poblaciones
     */
    public function setPoblacion4($poblacion4)
    {
        $this->poblacion4 = $poblacion4;

        return $this;
    }

    /**
     * Get poblacion4
     *
     * @return string 
     */
    public function getPoblacion4()
    {
        return $this->poblacion4;
    }

    /**
     * Set poblacion5
     *
     * @param string $poblacion5
     * @return Poblaciones
     */
    public function setPoblacion5($poblacion5)
    {
        $this->poblacion5 = $poblacion5;

        return $this;
    }

    /**
     * Get poblacion5
     *
     * @return string 
     */
    public function getPoblacion5()
    {
        return $this->poblacion5;
    }

    /**
     * Set poblacion6
     *
     * @param string $poblacion6
     * @return Poblaciones
     */
    public function setPoblacion6($poblacion6)
    {
        $this->poblacion6 = $poblacion6;

        return $this;
    }

    /**
     * Get poblacion6
     *
     * @return string 
     */
    public function getPoblacion6()
    {
        return $this->poblacion6;
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
        return $this->getPoblacion1();
    }
}
