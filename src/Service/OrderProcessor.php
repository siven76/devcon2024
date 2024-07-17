<?php

namespace App\Service;

class OrderProcessor
{
    public function __construct(private EmailService $emailService)
    {
    }

    public function processOrder(string $orderDetails): bool
    {
        // Process the order
        $this->emailService->sendEmail('customer@example.com', 'Order Confirmation', $orderDetails);
        return true;
    }
}