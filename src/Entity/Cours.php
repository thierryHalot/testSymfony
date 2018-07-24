<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CoursRepository")
 */
class Cours
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=3000)
     */
    private $contenu;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Theme", mappedBy="cours")
     */
    private $theme;

    public function __construct($titre,$contenu)
    {
        $this->theme = new ArrayCollection();
        $this->titre = $titre;
        $this->contenu = $contenu;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * @return Collection|Theme[]
     */
    public function getTheme(): Collection
    {
        return $this->theme;
    }

    public function addTheme(Theme $theme): self
    {
        if (!$this->theme->contains($theme)) {
            $this->theme[] = $theme;
            $theme->setCours($this);
        }

        return $this;
    }

    public function removeTheme(Theme $theme): self
    {
        if ($this->theme->contains($theme)) {
            $this->theme->removeElement($theme);
            // set the owning side to null (unless already changed)
            if ($theme->getCours() === $this) {
                $theme->setCours(null);
            }
        }

        return $this;
    }
}
