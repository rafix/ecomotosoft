<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Estados
 *
 * @ORM\Table(name="estados", uniqueConstraints={@ORM\UniqueConstraint(name="estado_1", columns={"estado_1"}), @ORM\UniqueConstraint(name="estado_2", columns={"estado_2"}), @ORM\UniqueConstraint(name="estado_3", columns={"estado_3"}), @ORM\UniqueConstraint(name="estado_4", columns={"estado_4"}), @ORM\UniqueConstraint(name="estado_5", columns={"estado_5"}), @ORM\UniqueConstraint(name="estado_6", columns={"estado_6"})})
 * @ORM\Entity
 * @Rest\Resource(name="estados")
 */
class Estados
{
    /**
     * @var string
     *
     * @ORM\Column(name="estado_1", type="string", length=20, nullable=false)
     */
    private $estado1;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_2", type="string", length=30, nullable=true)
     */
    private $estado2;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_3", type="string", length=30, nullable=true)
     */
    private $estado3;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_4", type="string", length=30, nullable=true)
     */
    private $estado4;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_5", type="string", length=30, nullable=true)
     */
    private $estado5;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_6", type="string", length=30, nullable=true)
     */
    private $estado6;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_estado", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEstado;



    /**
     * Set estado1
     *
     * @param string $estado1
     * @return Estados
     */
    public function setEstado1($estado1)
    {
        $this->estado1 = $estado1;

        return $this;
    }

    /**
     * Get estado1
     *
     * @return string 
     */
    public function getEstado1()
    {
        return $this->estado1;
    }

    /**
     * Set estado2
     *
     * @param string $estado2
     * @return Estados
     */
    public function setEstado2($estado2)
    {
        $this->estado2 = $estado2;

        return $this;
    }

    /**
     * Get estado2
     *
     * @return string 
     */
    public function getEstado2()
    {
        return $this->estado2;
    }

    /**
     * Set estado3
     *
     * @param string $estado3
     * @return Estados
     */
    public function setEstado3($estado3)
    {
        $this->estado3 = $estado3;

        return $this;
    }

    /**
     * Get estado3
     *
     * @return string 
     */
    public function getEstado3()
    {
        return $this->estado3;
    }

    /**
     * Set estado4
     *
     * @param string $estado4
     * @return Estados
     */
    public function setEstado4($estado4)
    {
        $this->estado4 = $estado4;

        return $this;
    }

    /**
     * Get estado4
     *
     * @return string 
     */
    public function getEstado4()
    {
        return $this->estado4;
    }

    /**
     * Set estado5
     *
     * @param string $estado5
     * @return Estados
     */
    public function setEstado5($estado5)
    {
        $this->estado5 = $estado5;

        return $this;
    }

    /**
     * Get estado5
     *
     * @return string 
     */
    public function getEstado5()
    {
        return $this->estado5;
    }

    /**
     * Set estado6
     *
     * @param string $estado6
     * @return Estados
     */
    public function setEstado6($estado6)
    {
        $this->estado6 = $estado6;

        return $this;
    }

    /**
     * Get estado6
     *
     * @return string 
     */
    public function getEstado6()
    {
        return $this->estado6;
    }

    /**
     * Get idEstado
     *
     * @return integer 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }
}
