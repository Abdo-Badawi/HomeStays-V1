<?php
namespace Models;

// No dependencies
class Application {
    private string $OpportunityID;
    private string $TravelerID;
    private string $Status; // Enum
    private \DateTime $AppliedDate;
    private string $comment;

    

    public function __construct(string $OpportunityID, string $TravelerID, string $Status, string $comment) {
        $this->OpportunityID = $OpportunityID;
        $this->TravelerID = $TravelerID;
        $this->Status = $Status;
        $this->comment = $comment;
    }

        public static function printOpportunities($opportunities) {
        // Check if the opportunities array is empty
        if (empty($opportunities)) {
            echo "<p>No opportunities found for this host.</p>";
            return;
        }
    
        // Start the card-style layout
        echo "<div class='row g-4'>";
    
        // Loop through each opportunity and display it as a card
        foreach ($opportunities as $opp) {
            $statusText = '';  // To hold the status name
            $statusColor = ''; // To hold the background color
    
            // Set status name and background color based on status value
            switch (strtolower(htmlspecialchars($opp['status']))) {
                case 'open':
                    $statusText = "Open";
                    $statusColor = "bg-success text-white";  // Green background for open
                    break;
                case 'closed':
                    $statusText = "Closed";
                    $statusColor = "bg-danger text-white";  // Red background for closed
                    break;
                case 'cancelled':
                    $statusText = "Cancelled";
                    $statusColor = "bg-warning text-dark";  // Yellow background for cancelled
                    break;
                default:
                    $statusText = "Unknown";
                    $statusColor = "bg-secondary text-white";  // Gray background for unknown
                    break;
            }
    
            echo "<div class='col-lg-6'>
                    <div class='card border-0 shadow-sm'>
                        <div class='card-body'>
                            <div class='d-flex justify-content-between align-items-center mb-3'>
                                <img src='" . htmlspecialchars($opp['opportunity_photo']) . "' alt='Opportunity Image' class='img-fluid rounded-circle' style='width: 100px; height: 100px;'>
                                <h5 class='card-title mb-0'>" . htmlspecialchars($opp['title']) . "</h5>
                                <span class='badge $statusColor'>
                                    $statusText
                                </span>
                            </div>
                            <div class='mb-3'>
                                <p class='mb-2'><i class='fa fa-clock me-2'></i>Created At: " . htmlspecialchars($opp['created_at']) . "</p>
                                <p class='mb-2'><i class='bi bi-tags-fill me-2'></i> Category: " . htmlspecialchars($opp['category']) ."</p>
                                <p class='mb-2'><i class='fa fa-location-arrow me-2'></i>Location: " . htmlspecialchars($opp['location']) . "</p>
                                <p class='mb-2'><i class='bi bi-calendar-fill me-2'></i> Start Date: " . htmlspecialchars($opp['start_date']) . "</p>
                                <p class='mb-2'><i class='bi bi-calendar-check-fill me-2'></i> End Date: " . htmlspecialchars($opp['end_date']) . "</p>
                                <p class='mb-2'><i class='fa fa-tasks me-2'></i>Requirements: " . htmlspecialchars($opp['requirements']) . "</p>
                                <p class='mb-2'><i class='fa fa-info-circle me-2'></i>Description: " . htmlspecialchars($opp['description']) . "</p>
                            </div>
                            <div class='d-flex justify-content-between'>
                                <div>
                                    <button class='btn btn-primary me-2 px-3'>Edit</button>
                                </div>
                                <button class='btn btn-sm btn-danger'>Mark Filled</button>
                            </div>
                        </div>
                    </div>
                </div>";
        }
    
        // End the card layout
        echo "</div>";
    }

} 