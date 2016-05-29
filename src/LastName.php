<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

class LastName
{
    /** @var string */
    private $lastName;

    /**
     * @param string $lastName
     */
    public function __construct(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function lastName() : string
    {
        return $this->lastName;
    }
}