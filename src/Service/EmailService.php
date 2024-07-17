<?php

namespace App\Service;

class EmailService
{
    public function sendEmail(string $to, string $subject, string $message): void
    {
        // Imagine this sends an email
        // For demonstration purposes, we'll just echo the email details
        echo "Sending email to $to with subject '$subject' and message: $message";
    }
}