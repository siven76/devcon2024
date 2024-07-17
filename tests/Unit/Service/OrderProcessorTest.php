<?php

namespace App\Tests\Unit\Service;

use App\Service\EmailService;
use App\Service\OrderProcessor;
use PHPUnit\Framework\TestCase;

class OrderProcessorTest extends TestCase
{
    public function testProcessOrder()
    {
        $emailService = $this->createMock(EmailService::class);
        $emailService->expects($this->once())
            ->method('sendEmail')
            ->with('customer@example.com', 'Order Confirmation', 'Order details');

        $orderProcessor = new OrderProcessor($emailService);
        $result = $orderProcessor->processOrder('Order details');

        $this->assertTrue($result);
    }
}
