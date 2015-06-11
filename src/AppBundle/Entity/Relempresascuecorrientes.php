<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Relempresascuecorrientes
 *
 * @ORM\Table(name="relempresascuecorrientes", indexes={@ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="id_entbancaria", columns={"id_entbancaria"})})
 * @ORM\Entity
 * @Rest\Resource(name="relempresascuecorrientes")
 */
class Relempresascuecorrientes
{
    /**
     * @var string
     *
     * @ORM\Column(name="cuecorriente", type="string", length=24, nullable=true)
     */
    private $cuecorriente;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_relempresacuecorriente", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRelempresacuecorriente;

    /**
     * @var \AppBundle\Entity\Entbancarias
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Entbancarias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entbancaria", referencedColumnName="id_entbancaria")
     * })
     */
    private $idEntbancaria;

    /**
     * @var \AppBundle\Entity\Empresas
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Empresas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id_empresa")
     * })
     */
    private $idEmpresa;



    /**
     * Set cuecorriente
     *
     * @param string $cuecorriente
     * @return Relempresascuecorrientes
     */
    public function setCuecorriente($cuecorriente)
    {
        $this->cuecorriente = $cuecorriente;

        return $this;
    }

    /**
     * Get cuecorriente
     *
     * @return string 
     */
    public function getCuecorriente()
    {
        return $this->cuecorriente;
    }

    /**
     * Get idRelempresacuecorriente
     *
     * @return integer 
     */
    public function getIdRelempresacuecorriente()
    {
        return $this->idRelempresacuecorriente;
    }

    /**
     * Set idEntbancaria
     *
     * @param \AppBundle\Entity\Entbancarias $idEntbancaria
     * @return Relempresascuecorrientes
     */
    public function setIdEntbancaria(\AppBundle\Entity\Entbancarias $idEntbancaria = null)
    {
        $this->idEntbancaria = $idEntbancaria;

        return $this;
    }

    /**
     * Get idEntbancaria
     *
     * @return \AppBundle\Entity\Entbancarias 
     */
    public function getIdEntbancaria()
    {
        return $this->idEntbancaria;
    }

    /**
     * Set idEmpresa
     *
     * @param \AppBundle\Entity\Empresas $idEmpresa
     * @return Relempresascuecorrientes
     */
    public function setIdEmpresa(\AppBundle\Entity\Empresas $idEmpresa = null)
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get idEmpresa
     *
     * @return \AppBundle\Entity\Empresas 
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }
}
