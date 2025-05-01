<?php
namespace Models;

require_once 'Account.php';

class HostAccount implements Account {
    public \DateTime $HostingSince;
    public array $AvailableOpportunities; // list<String>
    public bool $IsVerified;
    public float $ReplyRate;

    public function addOpportunity(): bool {}
    public function checkApplicants(): array {} // List<String>

    public function updateBio(): bool {}
    public function updateAvailability(): bool {}
    public function uploadProfilePicture(): bool {}
    public function changeStatus(): bool {}
} 