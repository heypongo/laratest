<p align="center"><a href="https://www.heypongo.com" target="_blank"><img src="https://media-exp1.licdn.com/dms/image/C4D0BAQH0yJhTeZNz2A/company-logo_200_200/0/1649235360307?e=2147483647&v=beta&t=-U0q3S5Ky0kR_GAcQv5KwWVNQIB4RBKmoFTk6BCXEyc" width="200"></a></p>

# Technical test - Backend

The main goal of this test is to estimate your technical knowledge on Laravel framework and SQL language.

## Prerequisites

- PHP `^8.0.2`
- Laratest project
- A running MySQL database and - **[./laratest.sql](./laratest.sql)** script executed
  - Charset `utf8mb4`
  - Collation `utf8mb4_general_ci`

## Exercise

- Create a `CustomerResource` for the API, exposing properly customers and their stores.
- Add a `has_optin` field (boolean). This optin is the customer's approval for receiving commercial messages.
- Add a `PATCH` endpoint to update this field, and create associated test
- Add a soft delete on table customers
- Create a command allowing us via `php artisan` to delete customers inactive since at least 6 months, and anonymize the customers' data for those deleted since at least a month. You must use Laravel `Job` to lighten server load.
- Create a raw SQL request to obtain, by customer on his associated store, the number of visits, the dates of first and last visit. You can commit it in a `./requests.sql` file.
- BONUS: Now, expose the same data on a `GET` endpoint `/customers/visits`

### Useful links

- **[Laravel Documentation](https://laravel.com/docs/9.x)**
- **[Hey Pongo](https://www.heypongo.com)**
- **[Your project home](http://localhost:8000)**
- **[Your project API](http://localhost:8000/api/customers)**

## Contacts

If you need anything, you can contact Xavier - CTO: xavier@heypongo.com.

# About Pongo

What if we could turn visits into long-term relationships ?

At Pongo, we erase all the frictions in the customer journey: no app to download, no loyalty card to carry, no registration form to fill in. With a touchscreen integrated to the point-of-sale, we help merchants to create different types of customer engagement systems (game contests, loyalty programs, sponsorship, private events...).

Customers easily sign up and check in with their phone number and are rewarded for their loyalty. We help merchants by sending automated text messages via our SMS chatbot to collect more accurate customer information and offer incentives to bring back lost customers.
