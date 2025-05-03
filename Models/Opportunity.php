<?php
namespace Models;

class Opportunity {
    private int $id;                          // Primary Key (BIGINT AUTO_INCREMENT)
    private ?string $opportunityPhoto;       // Path or URL to photo
    private string $title;
    private string $description;
    private string $location;
    private \DateTime $startDate;            // Corresponds to DATE
    private \DateTime $endDate;
    private string $category;                // ENUM('teaching', 'farming', 'cooking', 'childcare')
    private string $hostId;                  // VARCHAR(255) referencing users(user_id)
    private string $status;                  // ENUM('open', 'closed', 'cancelled')
    private \DateTime $createdAt;            // TIMESTAMP
    private string $requirements;            // TEXT (could be JSON or comma-separated)

    public function __construct(string $title, string $description, string $location, \DateTime $startDate, \DateTime $endDate, string $category, ?string $opportunityPhoto = null, string $requirements = '') {
        $this->title = $title;
        $this->description = $description;
        $this->location = $location;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->category = $category;
        $this->hostId = 1;
        $this->status = "open";
        $this->opportunityPhoto = $opportunityPhoto;
        $this->requirements = $requirements;
    }

    // Getters and Setters

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getOpportunityPhoto(): ?string {
        return $this->opportunityPhoto;
    }

    public function setOpportunityPhoto(?string $opportunityPhoto): void {
        $this->opportunityPhoto = $opportunityPhoto;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function getLocation(): string {
        return $this->location;
    }

    public function setLocation(string $location): void {
        $this->location = $location;
    }

    public function getStartDate(): \DateTime {
        return $this->startDate;
    }

    public function setStartDate(\DateTime $startDate): void {
        $this->startDate = $startDate;
    }

    public function getEndDate(): \DateTime {
        return $this->endDate;
    }

    public function setEndDate(\DateTime $endDate): void {
        $this->endDate = $endDate;
    }

    public function getCategory(): string {
        return $this->category;
    }

    public function setCategory(string $category): void {
        $this->category = $category;
    }

    public function getHostId(): string {
        return $this->hostId;
    }

    public function setHostId(string $hostId): void {
        $this->hostId = $hostId;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function setStatus(string $status): void {
        $this->status = $status;
    }

    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): void {
        $this->createdAt = $createdAt;
    }

    public function getRequirements(): string {
        return $this->requirements;
    }

    public function setRequirements(string $requirements): void {
        $this->requirements = $requirements;
    }

    // Methods to manipulate the Opportunity status

    public function closeOpportunity(): bool {
        $this->status = 'closed';
        return true;
    }

    public function reopenOpportunity(): bool {
        $this->status = 'open';
        return true;
    }

    public function markAsCancelled(): bool {
        $this->status = 'cancelled';
        return true;
    }

    public function editDetails(array $data): bool {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
        return true;
    }

    public function markAsFilled(): bool {
        $this->status = 'closed';  // Assuming "filled" means no longer open
        return true;
    }

    public function isAvailable(): bool {
        $today = new \DateTime();
        return $this->status === 'open' && $today >= $this->startDate && $today <= $this->endDate;
    }

    public function addRequirement(string $requirement): bool {
        $this->requirements .= ($this->requirements ? ', ' : '') . $requirement;
        return true;
    }
}
