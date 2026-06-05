# php-cookies-login
# PHP Cookie-Based Login System 🍪🔐

A simple authentication system built using PHP that demonstrates user login functionality with browser cookies. This project helps beginners understand how cookies can be used to maintain user sessions and personalize user experiences.

## Features

* User Login Authentication
* Cookie Creation and Storage
* Remember User Functionality
* Session Management
* Logout Feature
* Input Validation
* Simple and Beginner-Friendly Interface

## Technologies Used

* PHP
* HTML5
* Browser Cookies

## Project Overview

This project allows users to log in using predefined credentials. Upon successful authentication, a cookie is created and stored in the browser to remember the user for a specified duration.

The system checks whether the cookie exists when the user revisits the application and automatically recognizes the logged-in user.

## How It Works

1. User enters username and password.
2. PHP validates the credentials.
3. If credentials are correct:

   * A cookie is created.
   * User is redirected to the dashboard/home page.
4. If credentials are incorrect:

   * An error message is displayed.
5. User can log out to remove the cookie and end the session.

## Project Structure

```text
cookie-login-system/
│
├── logout.php
├── removecookies.php
├── retrievecookies.php
├── validate.php
```


## Sample Credentials

```text
Username: admin
Password: admin123
```

*(Modify credentials according to your implementation.)*

## Learning Objectives

This project demonstrates:

* PHP Form Handling
* Cookie Creation and Retrieval
* Authentication Basics
* User Login Systems
* Session Management Concepts
* Web Security Fundamentals

## Security Note

This project is designed for educational purposes. In real-world applications:

* Passwords should be hashed using password_hash().
* Sensitive data should never be stored directly in cookies.
* Secure and HttpOnly cookie flags should be used.
* Database-based authentication should be implemented.

## Future Enhancements

* Database Integration (MySQL)
* User Registration System
* Password Reset Feature
* Remember Me Checkbox
* Role-Based Authentication
* Enhanced Security Measures

## Author
@harshi-web-cyber

A mini-project developed to learn PHP authentication, cookies, and session management.
