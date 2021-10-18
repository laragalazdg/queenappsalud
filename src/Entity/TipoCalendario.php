<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoCalendario
 *
 * @ORM\Table(name="tipo_calendario")
 * @ORM\Entity
 */
class TipoCalendario
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
     * @ORM\Column(name="nombre_calendario", type="string", length=255, nullable=false)
     */
    private $nombreCalendario;


}
