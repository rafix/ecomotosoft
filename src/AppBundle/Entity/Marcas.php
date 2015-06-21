<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Marcas
 *
 * @ORM\Table(name="marcas", uniqueConstraints={@ORM\UniqueConstraint(name="marca", columns={"marca"}), @ORM\UniqueConstraint(name="web", columns={"web"}), @ORM\UniqueConstraint(name="logo", columns={"logo"})})
 * @ORM\Entity
 * @Vich\Uploadable
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
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="marcas_logo", fileNameProperty="logo")
     *
     * @var File $logoFile
     */
    protected $logoFile;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime $updatedAt
     */
    protected $updatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_marca", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->getMarca();
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     */
    public function setLogoFile(File $image = null)
    {
        $this->logoFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * @return File
     */
    public function getLogoFile()
    {
        return $this->logoFile;
    }

}
