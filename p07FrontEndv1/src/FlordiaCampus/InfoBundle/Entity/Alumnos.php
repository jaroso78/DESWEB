<?php

namespace FlordiaCampus\InfoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumnos
 *
 * @ORM\Table(name="alumnos")
 * @ORM\Entity(repositoryClass="FlordiaCampus\InfoBundle\Repository\AlumnosRepository")
 */
class Alumnos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="num_telefono", type="string", length=10)
     */
    private $numTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="estudios_cursados", type="string", length=255)
     */
    private $estudiosCursados;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Alumnos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Alumnos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set numTelefono
     *
     * @param string $numTelefono
     * @return Alumnos
     */
    public function setNumTelefono($numTelefono)
    {
        $this->numTelefono = $numTelefono;

        return $this;
    }

    /**
     * Get numTelefono
     *
     * @return string 
     */
    public function getNumTelefono()
    {
        return $this->numTelefono;
    }

    /**
     * Set estudiosCursados
     *
     * @param string $estudiosCursados
     * @return Alumnos
     */
    public function setEstudiosCursados($estudiosCursados)
    {
        $this->estudiosCursados = $estudiosCursados;

        return $this;
    }

    /**
     * Get estudiosCursados
     *
     * @return string 
     */
    public function getEstudiosCursados()
    {
        return $this->estudiosCursados;
    }
}
