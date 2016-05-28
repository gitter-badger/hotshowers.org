<?php declare(strict_types = 1);

namespace Mihaeu\Hotshowers;

class Street
{
    /** @var string */
    private $street;

    /**
     * @param string $street
     */
    public function __construct($street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function street() : string
    {
        return $this->street;
    }
}
