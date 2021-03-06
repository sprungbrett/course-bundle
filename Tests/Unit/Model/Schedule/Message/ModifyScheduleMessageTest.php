<?php

declare(strict_types=1);

namespace Sprungbrett\Bundle\CourseBundle\Tests\Unit\Model\Schedule\Message;

use PHPUnit\Framework\TestCase;
use Sprungbrett\Bundle\CourseBundle\Model\Schedule\Message\ModifyScheduleMessage;

class ModifyScheduleMessageTest extends TestCase
{
    /**
     * @var ModifyScheduleMessage
     */
    private $message;

    protected function setUp()
    {
        $this->message = new ModifyScheduleMessage(
            '123-123-123',
            'en',
            [
               'name' => 'Sprungbrett',
               'description' => 'Sprungbrett is awesome',
               'minimumParticipants' => 5,
               'maximumParticipants' => 15,
               'price' => 15.5,
            ]
        );
    }

    public function testGetUuid(): void
    {
        $this->assertEquals('123-123-123', $this->message->getUuid());
    }

    public function testGetLocale(): void
    {
        $this->assertEquals('en', $this->message->getLocale());
    }

    public function testGetName(): void
    {
        $this->assertEquals('Sprungbrett', $this->message->getName());
    }

    public function testGetDescription(): void
    {
        $this->assertEquals('Sprungbrett is awesome', $this->message->getDescription());
    }

    public function testGetMinimumParticipants(): void
    {
        $this->assertEquals(5, $this->message->getMinimumParticipants());
    }

    public function testGetMaximumParticipants(): void
    {
        $this->assertEquals(15, $this->message->getMaximumParticipants());
    }

    public function testGetPrice(): void
    {
        $this->assertEquals(15.5, $this->message->getPrice());
    }
}
