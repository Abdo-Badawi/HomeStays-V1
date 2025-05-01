<?php
namespace Models;

require_once 'User.php';
require_once 'TravelerAccount.php';
require_once 'Card.php';

class Traveler implements User {
    public TravelerAccount $TravelerProfile;
    public Card $CardInfo;

    public function applyForAnOpportunity(): bool {}
    public function getApprovedOpportunities(): array {} // List<Opportunity>
    public function searchHostsByFilter(): array {} // List<Host>

    public function login(): bool {}
    public function resetPassword(): bool {}
    public function updateProfile(): bool {}
} 