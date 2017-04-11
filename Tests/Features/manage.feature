@mink:selenium2 @alice(Page) @reset-schema
Feature: Manage a Language selector widget

    Background:
        Given I am on homepage

    Scenario: I can create a new Language selector widget
        When I switch to "layout" mode
        Then I should see "New content"
        When I select "Language selector" from the "1" select of "main_content" slot
        Then I should see "Widget (Language selector)"
        And I should see "1" quantum
        When I submit the widget
        Then I should see the success message for Widget edit
        When I reload the page
        And I switch to "readonly" mode
        Then I should see "en" current locale in LocaleSwitcher
        Given I change locale to "fr" in LocaleSwitcher
        Then I should be on "/fr"
        And I should see "fr" current locale in LocaleSwitcher
        Given I change locale to "en" in LocaleSwitcher
        Then I should be on "/en"