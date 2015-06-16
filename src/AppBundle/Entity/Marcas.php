<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Marcas
 *
 * @ORM\Table(name="marcas", uniqueConstraints={@ORM\UniqueConstraint(name="marca", columns={"marca"}), @ORM\UniqueConstraint(name="web", columns={"web"}), @ORM\UniqueConstraint(name="logo", columns={"logo"})})
 * @ORM\Entity
 *
 */
class Marcas
{
    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=40, nullable=false)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="web", type="string", length=50, nullable=true)
     */
    private $web;

    /**
     * @var string
     *
     * @ORM\Column(name="tarifa", type="string", length=7, nullable=true)
     */
    private $tarifa;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_marca", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMarca;



    /**
     * Set marca
     *
     * @param string $marca
     * @return Marcas
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set web
     *
     * @param string $web
     * @return Marcas
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set tarifa
     *
     * @param string $tarifa
     * @return Marcas
     */
    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;

        return $this;
    }

    /**
     * Get tarifa
     *
     * @return string 
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Marcas
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Get idMarca
     *
     * @return integer 
     */
    public function getIdMarca()
    {
        return $this->idMarca;
    }
}
