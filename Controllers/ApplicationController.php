<?php

// Include necessary files
include_once '../Controllers/DBController.php';
include_once '../Models/Application.php';
use Models\Application;

class ApplicationController {

    private $db;

    // Constructor to initialize DBController
    public function __construct() {
        $this->db = new DBController(); // Instantiate DBController to manage database connections
        $this->db->openConnection();
    }

    public function getApplicationByOpportunityID($hostID) {
        $query = "
            SELECT 
                opportunity.title, 
                opportunity.opportunity_photo, 
                opportunity.category, 
                opportunity.location, 
                opportunity.start_date, 
                opportunity.end_date, 
                opportunity.requirements,
                opportunity.description,
                opportunity.created_at,
                applications.application_id,
                applications.traveler_id,
                applications.status,
                applications.applied_date
            FROM opportunity
            JOIN applications ON opportunity.opportunity_id = applications.opportunity_id
            WHERE opportunity.host_id = ?
        ";
    
        $params = [$hostID];
        $this->db->openConnection();
        $result = $this->db->selectPrepared($query, "s", $params); // "s" for string
        $this->db->closeConnection();
        return $result;
    }
    

}