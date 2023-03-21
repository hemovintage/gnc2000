<?php

namespace App\Entity;

use App\Repository\JobSubTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JobSubTypeRepository::class)]
class JobSubType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $description;

    #[ORM\Column(type: 'boolean')]
    private $enabled;

    #[ORM\OneToMany(mappedBy: 'jobSubType', targetEntity: JobType::class)]
    private $jobTypes;

    public function __construct()
    {
        $this->jobTypes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function isEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @return Collection<int, JobType>
     */
    public function getJobTypes(): Collection
    {
        return $this->jobTypes;
    }

    public function addJobType(JobType $jobType): self
    {
        if (!$this->jobTypes->contains($jobType)) {
            $this->jobTypes[] = $jobType;
            $jobType->setJobSubType($this);
        }

        return $this;
    }

    public function removeJobType(JobType $jobType): self
    {
        if ($this->jobTypes->removeElement($jobType)) {
            // set the owning side to null (unless already changed)
            if ($jobType->getJobSubType() === $this) {
                $jobType->setJobSubType(null);
            }
        }

        return $this;
    }
}
