<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;

/**
 * Relempresasemails
 *
 * @ORM\Table(name="relempresasemails", indexes={@ORM\Index(name="id_empresa", columns={"id_empresa"}), @ORM\Index(name="id_tipcontacto", columns={"id_tipcontacto"})})
 * @ORM\Entity
 *
 */
class Relempresasemails
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=24, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_relempresaemail", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRelempresaemail;

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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Empresas", inversedBy="empresasEmails")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id_empresa")
     * })
     */
    private $idEmpresa;



    /**
     * Set email
     *
     * @param string $email
     * @return Relempresasemails
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get idRelempresaemail
     *
     * @return integer 
     */
    public function getIdRelempresaemail()
    {
        return $this->idRelempresaemail;
    }

    /**
     * Set idTipcontacto
     *
     * @param \AppBundle\Entity\Tipcontactos $idTipcontacto
     * @return Relempresasemails
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
     * @return Relempresasemails
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

    public function __toString()
    {
        return (string)$this->getIdRelempresaemail();
    }
}
