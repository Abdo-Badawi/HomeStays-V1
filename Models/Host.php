<?php
namespace Models;

require_once 'User.php';
require_once 'HostAccount.php';

class Host implements User {
    public HostAccount $HostProfile;

    public function addOpportunities(): bool {}

    public function login(): bool {}
    public function resetPassword(): bool {}
    public function updateProfile(): bool {}
} 