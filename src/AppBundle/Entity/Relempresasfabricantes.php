<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Relempresasfabricantes
 *
 * @ORM\Table(name="relempresasfabricantes", indexes={@ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="id_fabricante", columns={"id_fabricante"})})
 * @ORM\Entity
 * @Rest\Resource(name="relempresasfabricantes")
 */
class Relempresasfabricantes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_relempresafabricante", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRelempresafabricante;

    /**
     * @var \AppBundle\Entity\Fabricantes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fabricantes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fabricante", referencedColumnName="id_fabricante")
     * })
     */
    private $idFabricante;

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
     * Get idRelempresafabricante
     *
     * @return integer 
     */
    public function getIdRelempresafabricante()
    {
        return $this->idRelempresafabricante;
    }

    /**
     * Set idFabricante
     *
     * @param \AppBundle\Entity\Fabricantes $idFabricante
     * @return Relempresasfabricantes
     */
    public function setIdFabricante(\AppBundle\Entity\Fabricantes $idFabricante = null)
    {
        $this->idFabricante = $idFabricante;

        return $this;
    }

    /**
     * Get idFabricante
     *
     * @return \AppBundle\Entity\Fabricantes 
     */
    public function getIdFabricante()
    {
        return $this->idFabricante;
    }

    /**
     * Set idEmpresa
     *
     * @param \AppBundle\Entity\Empresas $idEmpresa
     * @return Relempresasfabricantes
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
