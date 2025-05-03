<?php
namespace Models;

// No dependencies
class User {
    private string $userID;
    private string $nationalID;
    private string $email;
    private string $password;
    private string $userType;
    private string $firstName;
    private string $lastName;
    private string $phoneNumber;
    private string $profilePicture; // Assuming this is a file path or URL

    public function __construct(string $email, string $password) {
        $this->email = $email;
        $this->password = $password;
    }

    // Existing setters
    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }

    // Existing getters
    public function getEmail(): string {
        return $this->email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    // New setters
    public function setUserID(string $userID): void {
        $this->userID = $userID;
    }

    public function setNationalID(string $nationalID): void {
        $this->nationalID = $nationalID;
    }

    public function setUserType(string $userType): void {
        $this->userType = $userType;
    }

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    public function setPhoneNumber(string $phoneNumber): void {
        $this->phoneNumber = $phoneNumber;
    }

    public function setProfilePicture(string $profilePicture): void {
        $this->profilePicture = $profilePicture;
    }

    // New getters
    public function getUserID(): string {
        return $this->userID;
    }

    public function getNationalID(): string {
        return $this->nationalID;
    }

    public function getUserType(): string {
        return $this->userType;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getPhoneNumber(): string {
        return $this->phoneNumber;
    }

    public function getProfilePicture(): string {
        return $this->profilePicture;
    }
}
?>