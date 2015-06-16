<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Familias
 *
 * @ORM\Table(name="familias", uniqueConstraints={@ORM\UniqueConstraint(name="familia_1", columns={"familia_1"}), @ORM\UniqueConstraint(name="familia_2", columns={"familia_2"}), @ORM\UniqueConstraint(name="familia_3", columns={"familia_3"}), @ORM\UniqueConstraint(name="familia_4", columns={"familia_4"}), @ORM\UniqueConstraint(name="familia_5", columns={"familia_5"}), @ORM\UniqueConstraint(name="familia_6", columns={"familia_6"})})
 * @ORM\Entity
 *
 */
class Familias
{
    /**
     * @var string
     *
     * @ORM\Column(name="familia_1", type="string", length=40, nullable=false)
     */
    private $familia1;

    /**
     * @var string
     *
     * @ORM\Column(name="familia_2", type="string", length=40, nullable=true)
     */
    private $familia2;

    /**
     * @var string
     *
     * @ORM\Column(name="familia_3", type="string", length=40, nullable=true)
     */
    private $familia3;

    /**
     * @var string
     *
     * @ORM\Column(name="familia_4", type="string", length=40, nullable=true)
     */
    private $familia4;

    /**
     * @var string
     *
     * @ORM\Column(name="familia_5", type="string", length=40, nullable=true)
     */
    private $familia5;

    /**
     * @var string
     *
     * @ORM\Column(name="familia_6", type="string", length=40, nullable=true)
     */
    private $familia6;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_familia", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFamilia;



    /**
     * Set familia1
     *
     * @param string $familia1
     * @return Familias
     */
    public function setFamilia1($familia1)
    {
        $this->familia1 = $familia1;

        return $this;
    }

    /**
     * Get familia1
     *
     * @return string 
     */
    public function getFamilia1()
    {
        return $this->familia1;
    }

    /**
     * Set familia2
     *
     * @param string $familia2
     * @return Familias
     */
    public function setFamilia2($familia2)
    {
        $this->familia2 = $familia2;

        return $this;
    }

    /**
     * Get familia2
     *
     * @return string 
     */
    public function getFamilia2()
    {
        return $this->familia2;
    }

    /**
     * Set familia3
     *
     * @param string $familia3
     * @return Familias
     */
    public function setFamilia3($familia3)
    {
        $this->familia3 = $familia3;

        return $this;
    }

    /**
     * Get familia3
     *
     * @return string 
     */
    public function getFamilia3()
    {
        return $this->familia3;
    }

    /**
     * Set familia4
     *
     * @param string $familia4
     * @return Familias
     */
    public function setFamilia4($familia4)
    {
        $this->familia4 = $familia4;

        return $this;
    }

    /**
     * Get familia4
     *
     * @return string 
     */
    public function getFamilia4()
    {
        return $this->familia4;
    }

    /**
     * Set familia5
     *
     * @param string $familia5
     * @return Familias
     */
    public function setFamilia5($familia5)
    {
        $this->familia5 = $familia5;

        return $this;
    }

    /**
     * Get familia5
     *
     * @return string 
     */
    public function getFamilia5()
    {
        return $this->familia5;
    }

    /**
     * Set familia6
     *
     * @param string $familia6
     * @return Familias
     */
    public function setFamilia6($familia6)
    {
        $this->familia6 = $familia6;

        return $this;
    }

    /**
     * Get familia6
     *
     * @return string 
     */
    public function getFamilia6()
    {
        return $this->familia6;
    }

    /**
     * Get idFamilia
     *
     * @return integer 
     */
    public function getIdFamilia()
    {
        return $this->idFamilia;
    }
}
