<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Material
 *
 * @ORM\Table(name="material", indexes={@ORM\Index(name="IDX_7CBE7595A64A8A17", columns={"tema_id"})})
 * @ORM\Entity
 */
class Material
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var \Tema
     *
     * @ORM\ManyToOne(targetEntity="Tema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tema_id", referencedColumnName="id")
     * })
     */
    private $tema;


}
