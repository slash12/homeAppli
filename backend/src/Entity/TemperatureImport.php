<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TemperatureImportRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     collectionOperations={
 *     "get",
 *     "post"={
 *              "method"="POST",
 *              "path"="/temperature/import",
 *          },
 * },
 *     itemOperations={"get", "put", "delete"}
 * )
 * @ORM\Entity(repositoryClass=TemperatureRepository::class)
 */
class TemperatureImport
{
    use ResourceId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $max;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $min;

    /**
     * @ORM\Column(type="datetime")
     */
    private $taken_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $inserted_at;

    public function __construct()
    {
        $this->inserted_at = new \DateTime();
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMax(?int $max): self
    {
        $this->max = $max;

        return $this;
    }

    public function getMin(): ?int
    {
        return $this->min;
    }

    public function setMin(?int $min): self
    {
        $this->min = $min;

        return $this;
    }

    public function getTakenAt(): ?\DateTimeInterface
    {
        return $this->taken_at;
    }

    public function setTakenAt(\DateTimeInterface $taken_at): self
    {
        $this->taken_at = $taken_at;

        return $this;
    }

    public function getInsertedAt(): ?\DateTimeInterface
    {
        return $this->inserted_at;
    }

    public function setInsertedAt(\DateTimeInterface $inserted_at): self
    {
        $this->inserted_at = $inserted_at;

        return $this;
    }
}
