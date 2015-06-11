<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lemon\RestBundle\Annotation as Rest;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Relempresastelefonos
 *
 * @ORM\Table(name="relempresastelefonos", indexes={@ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="id_tipcontacto", columns={"id_tipcontacto"})})
 * @ORM\Entity
 * @Rest\Resource(name="relempresastelefonos")
 */
class Relempresastelefonos
{
    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=24, nullable=false)
     */
    private $telefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_relempresatelefono", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRelempresatelefono;

    /**
     * @var \AppBundle\Entity\Tipcontactos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tipcontactos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipcontacto", referencedColumnName="id_tipcontacto")
     * })
     */
    private $idTipcontacto;

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
     * Set telefono
     *
     * @param string $telefono
     * @return Relempresastelefonos
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Get idRelempresatelefono
     *
     * @return integer 
     */
    public function getIdRelempresatelefono()
    {
        return $this->idRelempresatelefono;
    }

    /**
     * Set idTipcontacto
     *
     * @param \AppBundle\Entity\Tipcontactos $idTipcontacto
     * @return Relempresastelefonos
     */
    public function setIdTipcontacto(\AppBundle\Entity\Tipcontactos $idTipcontacto = null)
    {
        $this->idTipcontacto = $idTipcontacto;

        return $this;
    }

    /**
     * Get idTipcontacto
     *
     * @return \AppBundle\Entity\Tipcontactos 
     */
    public function getIdTipcontacto()
    {
        return $this->idTipcontacto;
    }

    /**
     * Set idEmpresa
     *
     * @param \AppBundle\Entity\Empresas $idEmpresa
     * @return Relempresastelefonos
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
