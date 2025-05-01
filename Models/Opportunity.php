<?php
namespace Models;

// No dependencies
class Opportunity {
    public string $OpportunityID;
    public $OpportunityPhoto; // img type
    public string $Title;
    public string $Description;
    public string $Location;
    public string $Duration;
    public int $HostID;
    public float $Charge;
    public \DateTime $CreatedAt;
    public string $Status; // Enum
    public array $Requirements; // List<String>
    public string $StatusEnum;

    public function closeOpportunity(): bool {}
    public function reopenOpportunity(): bool {}
    public function editDetails(): bool {}
    public function markAsFilled(): bool {}
    public function isAvailable(): bool {}
    public function addRequirement(): bool {}
} 