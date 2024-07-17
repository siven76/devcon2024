Feature: User Authentication
  In order to ensure secure access to the application
  As a user
  I want to be able to log in and log out

  Scenario: Successful login
    Given I am a registered user with username "john_doe" and password "password123"
    When I log in with username "john_doe" and password "password123"
    Then I should see a welcome message "Welcome, John!"

  Scenario: Failed login
    Given I am a registered user with username "john_doe" and password "password123"
    When I log in with username "john_doe" and password "wrongpassword"
    Then I should see an error message "Invalid credentials"

  Scenario: Logout
    Given I am logged in as "john_doe"
    When I log out
    Then I should see a message "You have been logged out"
