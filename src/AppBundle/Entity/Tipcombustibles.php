<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Tipcombustibles
 *
 * @ORM\Table(name="tipcombustibles", uniqueConstraints={@ORM\UniqueConstraint(name="tipcombustible_1", columns={"tipcombustible_1"}), @ORM\UniqueConstraint(name="tipcombustible_2", columns={"tipcombustible_2"}), @ORM\UniqueConstraint(name="tipcombustible_3", columns={"tipcombustible_3"}), @ORM\UniqueConstraint(name="tipcombustible_4", columns={"tipcombustible_4"}), @ORM\UniqueConstraint(name="tipcombustible_5", columns={"tipcombustible_5"}), @ORM\UniqueConstraint(name="tipcombustible_6", columns={"tipcombustible_6"})})
 * @ORM\Entity
 * @Rest\Resource(name="tipcombustibles")
 */
class Tipcombustibles
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipcombustible_1", type="string", length=20, nullable=false)
     */
    private $tipcombustible1;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcombustible_2", type="string", length=20, nullable=true)
     */
    private $tipcombustible2;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcombustible_3", type="string", length=20, nullable=true)
     */
    private $tipcombustible3;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcombustible_4", type="string", length=20, nullable=true)
     */
    private $tipcombustible4;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcombustible_5", type="string", length=20, nullable=true)
     */
    private $tipcombustible5;

    /**
     * @var string
     *
     * @ORM\Column(name="tipcombustible_6", type="string", length=20, nullable=true)
     */
    private $tipcombustible6;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipcombustible", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipcombustible;



    /**
     * Set tipcombustible1
     *
     * @param string $tipcombustible1
     * @return Tipcombustibles
     */
    public function setTipcombustible1($tipcombustible1)
    {
        $this->tipcombustible1 = $tipcombustible1;

        return $this;
    }

    /**
     * Get tipcombustible1
     *
     * @return string 
     */
    public function getTipcombustible1()
    {
        return $this->tipcombustible1;
    }

    /**
     * Set tipcombustible2
     *
     * @param string $tipcombustible2
     * @return Tipcombustibles
     */
    public function setTipcombustible2($tipcombustible2)
    {
        $this->tipcombustible2 = $tipcombustible2;

        return $this;
    }

    /**
     * Get tipcombustible2
     *
     * @return string 
     */
    public function getTipcombustible2()
    {
        return $this->tipcombustible2;
    }

    /**
     * Set tipcombustible3
     *
     * @param string $tipcombustible3
     * @return Tipcombustibles
     */
    public function setTipcombustible3($tipcombustible3)
    {
        $this->tipcombustible3 = $tipcombustible3;

        return $this;
    }

    /**
     * Get tipcombustible3
     *
     * @return string 
     */
    public function getTipcombustible3()
    {
        return $this->tipcombustible3;
    }

    /**
     * Set tipcombustible4
     *
     * @param string $tipcombustible4
     * @return Tipcombustibles
     */
    public function setTipcombustible4($tipcombustible4)
    {
        $this->tipcombustible4 = $tipcombustible4;

        return $this;
    }

    /**
     * Get tipcombustible4
     *
     * @return string 
     */
    public function getTipcombustible4()
    {
        return $this->tipcombustible4;
    }

    /**
     * Set tipcombustible5
     *
     * @param string $tipcombustible5
     * @return Tipcombustibles
     */
    public function setTipcombustible5($tipcombustible5)
    {
        $this->tipcombustible5 = $tipcombustible5;

        return $this;
    }

    /**
     * Get tipcombustible5
     *
     * @return string 
     */
    public function getTipcombustible5()
    {
        return $this->tipcombustible5;
    }

    /**
     * Set tipcombustible6
     *
     * @param string $tipcombustible6
     * @return Tipcombustibles
     */
    public function setTipcombustible6($tipcombustible6)
    {
        $this->tipcombustible6 = $tipcombustible6;

        return $this;
    }

    /**
     * Get tipcombustible6
     *
     * @return string 
     */
    public function getTipcombustible6()
    {
        return $this->tipcombustible6;
    }

    /**
     * Get idTipcombustible
     *
     * @return integer 
     */
    public function getIdTipcombustible()
    {
        return $this->idTipcombustible;
    }
}
