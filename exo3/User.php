<?php

class User
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $mailAddress;

    public function __construct(string $firstName, string $lastName, string $mailAddress)
    {
        $this->firstName    = $firstName;
        $this->lastName     = $lastName;
        $this->mailAddress = $mailAddress;
    }

    function getId(): int
    {
        return $this->id;
    }

    function getFirstname(): int
    {
        return $this->firstName;
    }

    function getLastname(): string
    {
        return $this->lastName;
    }

    function getMailAddress(): string
    {
        return $this->mailAddress;
    }
}