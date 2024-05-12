# Software Clean Architecture

## About the Author

Hi there! I'm [Taruna Wahyudi](https://www.linkedin.com/in/taruna-wahyudi-228382175/), a passionate software developer with expertise in building clean and scalable applications. Here's a bit more about me:

- **LinkedIn:** [Taruna Wahyudi](https://www.linkedin.com/in/taruna-wahyudi-228382175/)
- **Email:** wahyudi97@gmail.com

## Description

This application is a RESTful API built using the Laravel framework. By adopting the principles of Test Driven Development (TDD) and Domain-Driven Design (DDD), we aim to create a solution that is agnostic to the framework, database, or other technologies (Separation of Concern).

## Installation

1. **Clone Repositori**

   ```bash
   git clone https://github.com/username/repo.git
   ```

2. **Install Dependensi**

   ```bash
   cd project-folder
   composer install
   ```

3. **Configure Environment**

    Duplicate the .env.example file as .env and adjust the environment settings (such as database settings).
4. **Migration and Seeding (Optional)**

   ```bash
   php artisan migrate --seed
   ```

5. **Run Local Server**

   ```bash
   php artisan serve
   ```

## Directory Structure


```
├───app
│   ├───Application
│   │   └───usecase
│   │       └───products
│   │           └───core
│   ├───Common
│   │   ├───constant
│   │   └───exception
│   │       └───dictionary
│   ├───Domain
│   │   └───product
│   │       ├───entities
│   │       │   └───_test
│   │       └───_test
│   ├───Infrastructure
│   │   ├───database
│   │   └───repository
│   └───Interface
│       └───laravel
│           ├───Http
│           │   ├───Controllers
│           │   │   └───_test
│           │   └───Middleware
│           ├───Models
│           └───Providers

```

## Use Case (Business Logic)

### Products

Inside the `Application/usecase/products` directory, you will find the implementation of usecases for product management. This allows you to perform CRUD operations on user entities.
## Testing

We provide tests covering various aspects of application functionality. These tests are located in the `_test` directories in each layer of the application, including usecases, entities, and controllers.

```bash
   php artisan test
   ```

## Contribution

If you would like to contribute to the development of this application, please submit a pull request. We greatly appreciate contributions from various parties.

## License

This application is licensed under the [Lisensi MIT](LICENSE).
