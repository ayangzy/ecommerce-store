
## Project Goal/Overview 

The objective of this Laravel project is to enhance the marketing strategy of a local ecommerce store that has experienced a significant increase in its customer base. The store owner aims to efficiently segregate customers based on their purchase history.

To achieve this, a feature has been developed that allows customers to unlock achievements for every purchase they make on the website. By accumulating specific sets of achievements, customers can earn badges. Each unlocked badge entitles the user to a cashback of 300 Naira.

To facilitate this process, the project integrates with a local payment provider, enabling seamless cashback transactions for the customers. This integration ensures a smooth and automated process for awarding badges and initiating cashback rewards.
## Installation & Usage
<hr/>

### Downloading the Project

It is ``Important`` to note that this project requires ```PHP 8.1``` and uses laravel ```version 10.10```

You can clone the project by running the following command in your Git Bash:

```bash
git https://github.com/ayangzy/ecommerce-store.git
```
After cloning the project, navigate to the project directory and run the following command:
```
composer install
```
### Configure Environment
To run the application you must configure the ```.env``` environment file with your database details set up. Use the following commmand to create .env file. 
```
cp .env.example .env

```

### Mail driver configuration

To ensure the correct functioning of the application, configure your mail driver in the .env file as follows:
```
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

Replace the username and password with your mail server credentials.

The application uses ```database`` queue driver,that   need a database table to hold the jobs. Make sure to set the following configuration in the .env file:

```
QUEUE_CONNECTION=database
```

The project also includes the integration of a local payment provider, to send out 300 Naira cashback whenever a user unlocks a new badge. Configure the Paystack variables in the .env file by adding your own secret and public key:

```
PAYSTACK_BASE_URL=https://api.paystack.co/
PAYSTACK_SECRET_KEY=
PAYSTACK_PUBLIC_KEY=
```
You can refer to ```.env.example``` for more detailed configuration options.

### Generating app key
Run the following commands in the project directory to generate an app key:
```
php artisan key:generate

```
After generating the app key, run the following command to run database migrations:
```
php artisan migrate
```

## Testing
To run the test cases, type the following command in the project directory:

``` bash
composer test
```
or 

``` bash
php artisan test
```

## Seeding DB
Seeders have been added to enable quick testing of the application. To seed the database, run the following command in your project terminal:
```
php artisan db:seed
```


### Serve your application
To start the application, run the command ```php artisan serve``` in the project directory.

## Running Queues
To notify/send emails to users when they unlock an achievement and process/send out 300 Naira cashback when the user unlocks a badge, make sure to run the queue worker. Execute the following command in the project terminal:
 To see this in action run
``` 
php artisan queue:work
```

For testing the endpoints, you can use the following login credentials. The user is required to log in to make a purchase
``` 
email:johndoe@gmail.com  password: password
```
or you can alternatively register to perform this operation as I have provided a registration endpoint:

## Security

If you discover any security related issues, please email ```ayangefelix8@gmail.com```
## Credits

- [Ayange Felix](https://github.com/ayangzy)


