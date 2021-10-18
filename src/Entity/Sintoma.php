<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sintoma
 *
 * @ORM\Table(name="sintoma")
 * @ORM\Entity
 */
class Sintoma
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
     * @ORM\Column(name="nombre_sintoma", type="string", length=255, nullable=false)
     */
    private $nombreSintoma;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Nota", mappedBy="sintoma")
     */
    private $nota;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nota = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
