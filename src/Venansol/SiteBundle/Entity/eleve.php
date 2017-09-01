<?php

namespace Venansol\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * eleve
 *
 * @ORM\Table(name="eleve")
 * @ORM\Entity(repositoryClass="Venansol\SiteBundle\Repository\eleveRepository")
 */
class eleve
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedenaissance", type="datetime")
     */
    private $datedenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="courriel", type="string", length=255)
     */
    private $courriel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="coursindividuelles", type="string", length=255)
     */
    private $coursindividuelles;

    /**
     * @var string
     *
     * @ORM\Column(name="courscollectifs", type="string", length=255)
     */
    private $courscollectifs;

    /**
     * @var string
     *
     * @ORM\Column(name="atelier", type="string", length=255)
     */
    private $atelier;

    /**
     * @var string
     *
     * @ORM\Column(name="responsablelegal", type="string", length=255)
     */
    private $responsablelegal;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return eleve
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return eleve
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datedenaissance
     *
     * @param \DateTime $datedenaissance
     *
     * @return eleve
     */
    public function setDatedenaissance($datedenaissance)
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    /**
     * Get datedenaissance
     *
     * @return \DateTime
     */
    public function getDatedenaissance()
    {
        return $this->datedenaissance;
    }

    /**
     * Set courriel
     *
     * @param string $courriel
     *
     * @return eleve
     */
    public function setCourriel($courriel)
    {
        $this->courriel = $courriel;

        return $this;
    }

    /**
     * Get courriel
     *
     * @return string
     */
    public function getCourriel()
    {
        return $this->courriel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return eleve
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return eleve
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set coursindividuelles
     *
     * @param string $coursindividuelles
     *
     * @return eleve
     */
    public function setCoursindividuelles($coursindividuelles)
    {
        $this->coursindividuelles = $coursindividuelles;

        return $this;
    }

    /**
     * Get coursindividuelles
     *
     * @return string
     */
    public function getCoursindividuelles()
    {
        return $this->coursindividuelles;
    }

    /**
     * Set courscollectifs
     *
     * @param string $courscollectifs
     *
     * @return eleve
     */
    public function setCourscollectifs($courscollectifs)
    {
        $this->courscollectifs = $courscollectifs;

        return $this;
    }

    /**
     * Get courscollectifs
     *
     * @return string
     */
    public function getCourscollectifs()
    {
        return $this->courscollectifs;
    }

    /**
     * Set atelier
     *
     * @param string $atelier
     *
     * @return eleve
     */
    public function setAtelier($atelier)
    {
        $this->atelier = $atelier;

        return $this;
    }

    /**
     * Get atelier
     *
     * @return string
     */
    public function getAtelier()
    {
        return $this->atelier;
    }

    /**
     * Set responsablelegal
     *
     * @param string $responsablelegal
     *
     * @return eleve
     */
    public function setResponsablelegal($responsablelegal)
    {
        $this->responsablelegal = $responsablelegal;

        return $this;
    }

    /**
     * Get responsablelegal
     *
     * @return string
     */
    public function getResponsablelegal()
    {
        return $this->responsablelegal;
    }
}

