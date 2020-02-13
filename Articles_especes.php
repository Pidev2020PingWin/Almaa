<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles_especes
 *
 * @ORM\Table(name="article__especes")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Article_EspecesRepository")
 */
class Articles_especes

{
    /**
     * @return mixed
     */
    public function getEspeces()
    {
        return $this->Especes;
    }

    /**
     * @param mixed $Especes
     */
    public function setEspeces($Especes)
    {
        $this->Especes = $Especes;
    }
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="User_id",referencedColumnName="id")
    */
    private $user;
    /**
     * @ORM\ManyToOne(targetEntity="Especes")
     * @ORM\JoinColumn(name="Especes_id",referencedColumnName="id")
     */
    private $Especes;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
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
     * @ORM\Column(name="IdArticle", type="integer")
     */
    private $idArticle;

    /**
     * @var int
     *
     * @ORM\Column(name="idEspeces", type="integer")
     */
    private $idEspeces;

    /**
     * @var int
     *
     * @ORM\Column(name="idCat", type="integer")
     */
    private $idCat;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $titre;

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
     * Set idArticle
     *
     * @param integer $idArticle
     *
     * @return Articles_especes
     */
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    /**
     * Get idArticle
     *
     * @return int
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set idEspeces
     *
     * @param integer $idEspeces
     *
     * @return Articles_especes
     */
    public function setIdEspeces($idEspeces)
    {
        $this->idEspeces = $idEspeces;

        return $this;
    }

    /**
     * Get idEspeces
     *
     * @return int
     */
    public function getIdEspeces()
    {
        return $this->idEspeces;
    }

    /**
     * Set idCat
     *
     * @param integer $idCat
     *
     * @return Articles_especes
     */
    public function setIdCat($idCat)
    {
        $this->idCat = $idCat;

        return $this;
    }

    /**
     * Get idCat
     *
     * @return int
     */
    public function getIdCat()
    {
        return $this->idCat;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Articles_especes
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Articles_especes
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

