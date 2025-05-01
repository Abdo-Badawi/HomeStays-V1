<?php
namespace Models;

// No dependencies
class Review {
    public string $ReviewID;
    public string $TravelerID;
    public int $HostID;
    public string $OpportunityID;
    public float $Rating;
    public string $Comment;
    public bool $IsReported;

    public function submitReview(): bool {}
    public function editReview(): bool {}
    public function deleteReview(): bool {}
    public function reportReview(): bool {}
} 