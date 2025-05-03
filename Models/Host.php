<?php
namespace Models;

require_once 'User.php';

class Host extends User {
    private string $hostID;
    private string $propertyType;          // Enum type
    private string $preferredLanguage;
    private \DateTime $joinedDate;
    private string $bio;
    private float $rate;
    private string $location;
    private string $status;                // Enum (e.g., 'reported')

    // Optional: private reference to user account
    private User $hostProfile;

    // Constructor (optional, for initialization)
    public function __construct(
        string $hostID,
        string $propertyType,
        string $preferredLanguage,
        \DateTime $joinedDate,
        string $bio,
        float $rate,
        string $location,
        string $status
    ) {
        $this->hostID = $hostID;
        $this->propertyType = $propertyType;
        $this->preferredLanguage = $preferredLanguage;
        $this->joinedDate = $joinedDate;
        $this->bio = $bio;
        $this->rate = $rate;
        $this->location = $location;
        $this->status = $status;
    }

    // Example methods
    public function addOpportunities(): bool {
        // Logic to add an opportunity for the host
        return true;
    }

    public function login(): bool {
        // Logic to log in the host
        return true;
    }

    public function resetPassword(): bool {
        // Logic to reset password
        return true;
    }

    public function updateProfile(): bool {
        // Logic to update host profile
        return true;
    }

    // Getters (optional but recommended for accessing private properties)
    public function getHostID(): string {
        return $this->hostID;
    }

    public function getPropertyType(): string {
        return $this->propertyType;
    }

    public function getPreferredLanguage(): string {
        return $this->preferredLanguage;
    }

    public function getJoinedDate(): \DateTime {
        return $this->joinedDate;
    }

    public function getBio(): string {
        return $this->bio;
    }

    public function getRate(): float {
        return $this->rate;
    }

    public function getLocation(): string {
        return $this->location;
    }

    public function getStatus(): string {
        return $this->status;
    }
}
