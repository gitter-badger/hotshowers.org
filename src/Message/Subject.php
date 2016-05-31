<?php declare(strict_types=1);

namespace Mihaeu\Hotshowers\Message;

class Subject
{
    /** @var string */
    private $subject;

    /**
     * @param $subject
     */
    public function __construct(string $subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function subject() : string
    {
        return $this->subject;
    }
}
