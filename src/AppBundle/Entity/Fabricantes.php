<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Fabricantes
 *
 * @ORM\Table(name="fabricantes", uniqueConstraints={@ORM\UniqueConstraint(name="fabricante", columns={"fabricante"}), @ORM\UniqueConstraint(name="web", columns={"web"}), @ORM\UniqueConstraint(name="logo", columns={"logo"})})
 * @ORM\Entity
 *
 */
class Fabricantes
{
    /**
     * @var string
     *
     * @ORM\Column(name="fabricante", type="string", length=40, nullable=true)
     */
    private $fabricante;

    /**
     * @var string
     *
     * @ORM\Column(name="web", type="string", length=50, nullable=true)
     */
    private $web;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_fabricante", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFabricante;



    /**
     * Set fabricante
     *
     * @param string $fabricante
     * @return Fabricantes
     */
    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    /**
     * Get fabricante
     *
     * @return string 
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * Set web
     *
     * @param string $web
     * @return Fabricantes
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
     * Set logo
     *
     * @param string $logo
     * @return Fabricantes
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
     * Get idFabricante
     *
     * @return integer 
     */
    public function getIdFabricante()
    {
        return $this->idFabricante;
    }
}
