<?php
/**
 * @author Serhii Nekhaienko <serhii.nekhaienko@dev-pro.net>
 */

namespace SerhiiMe\Cars;

class Person
{
    /**
     * @var string First name of person
     */
    private $firstName;
    /**
     * @var string Last name of person
     */
    private $lastName;
    /**
     * @var int Age of person;
     */
    private $age;

    public function __construct(string $firstName, string $lastName, string $age)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setAge($age);
    }

    /**
     * Return person`s first name
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set person`s first name
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Return person`s age
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * set person`s last name
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Return person`s age
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set person`s age
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function __toString(): string
    {
        $values = [$this->lastName, $this->firstName, $this->age];
        return md5(implode(',', $values));
    }


}