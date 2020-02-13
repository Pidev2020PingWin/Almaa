<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\QuestionRepository")
 */
class Question
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
     * @ORM\Column(name="idQuestion", type="integer")
     */
    private $idQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="string", length=255)
     */
    private $contenu;

    /**
     * @var int
     *
     * @ORM\Column(name="NbreVues", type="integer")
     */
    private $nbreVues;

    /**
     * @var int
     *
     * @ORM\Column(name="NbreReponses", type="integer")
     */
    private $nbreReponses;


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
     * Set idQuestion
     *
     * @param integer $idQuestion
     *
     * @return Question
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
     * @return Question
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

    /**
     * Set nbreVues
     *
     * @param integer $nbreVues
     *
     * @return Question
     */
    public function setNbreVues($nbreVues)
    {
        $this->nbreVues = $nbreVues;

        return $this;
    }

    /**
     * Get nbreVues
     *
     * @return int
     */
    public function getNbreVues()
    {
        return $this->nbreVues;
    }

    /**
     * Set nbreReponses
     *
     * @param integer $nbreReponses
     *
     * @return Question
     */
    public function setNbreReponses($nbreReponses)
    {
        $this->nbreReponses = $nbreReponses;

        return $this;
    }

    /**
     * Get nbreReponses
     *
     * @return int
     */
    public function getNbreReponses()
    {
        return $this->nbreReponses;
    }
}

