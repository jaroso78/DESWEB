<?php

namespace FlordiaCampus\InfoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horario
 *
 * @ORM\Table(name="horario")
 * @ORM\Entity(repositoryClass="FlordiaCampus\InfoBundle\Repository\HorarioRepository")
 */
class Horario
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
     * @var \DateTime
     *
     * @ORM\Column(name="hora_salida", type="time")
     */
    private $horaSalida;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar_de_llegada", type="string", length=255)
     */
    private $lugarDeLlegada;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar_de_salida", type="string", length=255)
     */
    private $lugarDeSalida;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_de_llegada", type="time")
     */
    private $horaDeLlegada;


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
     * Set horaSalida
     *
     * @param \DateTime $horaSalida
     * @return Horario
     */
    public function setHoraSalida($horaSalida)
    {
        $this->horaSalida = $horaSalida;

        return $this;
    }

    /**
     * Get horaSalida
     *
     * @return \DateTime 
     */
    public function getHoraSalida()
    {
        return $this->horaSalida;
    }

    /**
     * Set lugarDeLlegada
     *
     * @param string $lugarDeLlegada
     * @return Horario
     */
    public function setLugarDeLlegada($lugarDeLlegada)
    {
        $this->lugarDeLlegada = $lugarDeLlegada;

        return $this;
    }

    /**
     * Get lugarDeLlegada
     *
     * @return string 
     */
    public function getLugarDeLlegada()
    {
        return $this->lugarDeLlegada;
    }

    /**
     * Set lugarDeSalida
     *
     * @param string $lugarDeSalida
     * @return Horario
     */
    public function setLugarDeSalida($lugarDeSalida)
    {
        $this->lugarDeSalida = $lugarDeSalida;

        return $this;
    }

    /**
     * Get lugarDeSalida
     *
     * @return string 
     */
    public function getLugarDeSalida()
    {
        return $this->lugarDeSalida;
    }

    /**
     * Set horaDeLlegada
     *
     * @param \DateTime $horaDeLlegada
     * @return Horario
     */
    public function setHoraDeLlegada($horaDeLlegada)
    {
        $this->horaDeLlegada = $horaDeLlegada;

        return $this;
    }

    /**
     * Get horaDeLlegada
     *
     * @return \DateTime 
     */
    public function getHoraDeLlegada()
    {
        return $this->horaDeLlegada;
    }
}
