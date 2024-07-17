<?php

declare(strict_types=1);

namespace App\Tests\Behat;

use Behat\Behat\Context\Context;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * This context class contains the definitions of the steps used by the demo
 * feature file. Learn how to get started with Behat and BDD on Behat's website.
 *
 * @see http://behat.org/en/latest/quick_start.html
 */
final class AuthenticationContext implements Context
{
    /** @var KernelInterface */
    private $kernel;

    /** @var Response|null */
    private $response;

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    /**
     * @Given I am a registered user with username :username and password :password
     */
    public function iAmARegisteredUser($username, $password)
    {
        // Assuming users are hardcoded in AuthService for this example
    }

    /**
     * @When I log in with username :username and password :password
     */
    public function iLogInWithUsernameAndPassword($username, $password)
    {
        $request = Request::create('/login', 'POST', [
            'username' => $username,
            'password' => $password,
        ]);
        $this->response = $this->kernel->handle($request);
    }

    /**
     * @Then I should see a welcome message :message
     */
    public function iShouldSeeAWelcomeMessage($message)
    {
        assert($this->response->getContent() === $message);
    }

    /**
     * @Then I should see an error message :message
     */
    public function iShouldSeeAnErrorMessage($message)
    {
        assert($this->response->getContent() === $message);
    }

    /**
     * @Given I am logged in as :username
     */
    public function iAmLoggedInAs($username)
    {
        // Mocking a logged-in state for this example
    }

    /**
     * @When I log out
     */
    public function iLogOut()
    {
        $request = Request::create('/logout', 'POST');
        $this->response = $this->kernel->handle($request);
    }

    /**
     * @Then I should see a message :message
     */
    public function iShouldSeeAMessage($message)
    {
        assert($this->response->getContent() === $message);
    }
}
