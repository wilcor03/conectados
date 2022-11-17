<?php
namespace App\Services;

use DatetimeInterface;

class ConectUser{
    private int $id;
    private int $segmentation_id;
    private int $program_id;
    private int $user_id;
    private DatetimeInterface $created_at;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getSegmentationId(): int
    {
        return $this->segmentation_id;
    }

    public function setSegmentationId(int $segmentation_id): self
    {
        $this->segmentation_id = $segmentation_id;
        return $this;
    }

    public function getProgramId(): int
    {
        return $this->program_id;
    }

    public function setProgramId(int $program_id): self
    {
        $this->program_id = $program_id;
        return $this;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;
        return $this;
    }

    public function getCreatedAt(): DatetimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(DatetimeInterface $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }
}