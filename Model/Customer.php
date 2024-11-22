<?php

class Customer 
{
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $password;
    public int $created_at;
    public int $updated_at;

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


    public function getcreated_at(): int
    {
        return $this->created_at;
    }

    public function setcreated_at(int $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getupdated(): int
    {
        return $this->updated_at;
    }

    public function setupdated(int $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }





}