<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Component;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Component
 * @package App\Entity\Component
 * @ORM\Entity
 * @ORM\Table(name="COMPONENT_component")
 * @ApiResource()
 */
class Component
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Component Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Component Label
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $label;

    /**
     * @var integer Component Section
     *
     * @ORM\Column(type="integer")
     */
    private $section;

    /**
     * @var integer Component Thickness
     *
     * @ORM\Column(type="integer")
     */
    private $thickness;

    /**
     * @var integer Component Length
     *
     * @ORM\Column(type="integer")
     */
    private $length;

    /**
     * @var integer Component Width
     *
     * @ORM\Column(type="integer")
     */
    private $width;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Component
     */
    public function setId(int $id): Component
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return Component
     */
    public function setLabel(string $label): Component
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return int
     */
    public function getSection(): int
    {
        return $this->section;
    }

    /**
     * @param int $section
     * @return Component
     */
    public function setSection(int $section): Component
    {
        $this->section = $section;
        return $this;
    }

    /**
     * @return int
     */
    public function getThickness(): int
    {
        return $this->thickness;
    }

    /**
     * @param int $thickness
     * @return Component
     */
    public function setThickness(int $thickness): Component
    {
        $this->thickness = $thickness;
        return $this;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     * @return Component
     */
    public function setLength(int $length): Component
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return Component
     */
    public function setWidth(int $width): Component
    {
        $this->width = $width;
        return $this;
    }

}