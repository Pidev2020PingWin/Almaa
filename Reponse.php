<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\ReponseRepository")
 */
class Reponse
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
     * @var int
     *
     * @ORM\Column(name="idReponse", type="integer")
     */
    private $idReponse;

    /**
     * @var int
     *
     * @ORM\Column(name="id_question", type="integer")
     */
    private $idQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="string", length=255)
     */
    private $contenu;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idReponse
     *
     * @param integer $idReponse
     *
     * @return Reponse
     */
    public function setIdReponse($idReponse)
    {
        $this->idReponse = $idReponse;

        return $this;
    }

    /**
     * Get idReponse
     *
     * @return int
     */
    public function getIdReponse()
    {
        return $this->idReponse;
    }

    /**
     * Set idQuestion
     *
     * @param integer $idQuestion
     *
     * @return Reponse
     */
    public function setIdQuestion($idQuestion)
    {
        $this->idQuestion = $idQuestion;

        return $this;
    }

    /**
     * Get idQuestion
     *
     * @return int
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Reponse
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}

