<?php
namespace Models;

// No dependencies
interface User {
    public function login(): bool;
    public function resetPassword(): bool;
    public function updateProfile(): bool;
} 