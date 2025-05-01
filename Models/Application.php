<?php
namespace Models;

// No dependencies
class Application {
    public string $ApplicationID;
    public string $OpportunityID;
    public string $TravelerID;
    public string $Status; // Enum
    public \DateTime $AppliedDate;

    public function submit(): bool {}
    public function withdraw(): bool {}
    public function updateStatus(): bool {}
} 