<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nota
 *
 * @ORM\Table(name="nota", indexes={@ORM\Index(name="IDX_C8D03E0DA7F6EA19", columns={"calendario_id"})})
 * @ORM\Entity
 */
class Nota
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nota", type="date", nullable=false)
     */
    private $fechaNota;

    /**
     * @var string
     *
     * @ORM\Column(name="descrip_nota", type="string", length=1000, nullable=false)
     */
    private $descripNota;

    /**
     * @var \Calendario
     *
     * @ORM\ManyToOne(targetEntity="Calendario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="calendario_id", referencedColumnName="id")
     * })
     */
    private $calendario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Sintoma", inversedBy="nota")
     * @ORM\JoinTable(name="nota_sintoma",
     *   joinColumns={
     *     @ORM\JoinColumn(name="nota_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="sintoma_id", referencedColumnName="id")
     *   }
     * )
     */
    private $sintoma;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sintoma = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
