# Ilocos Norte Website App Template

A comprehensive template for creating professional and modern office websites. This template is designed to provide a solid foundation for building office websites with a sleek and user-friendly interface.

## Table of Contents

-   [Introduction](#introduction)
-   [Features](#features)
-   [Getting Started](#getting-started)
-   [Customization](#customization)
-   [Deployment](#Deployment)
-   [Documentation](#documentation)
-   [Contributing](#contributing)
-   [License](#license)
-   [Contact](#contact)

## Introduction

The Ilocos Norte Website App Template offers a turnkey solution for creating impressive websites for the Provincial Government of Ilocos Norte. With its responsive design and carefully crafted components, this template simplifies the process of establishing and starting a new project.

## Features

-   Uses the latest Laravel 10 version
-   Ready-to-use pages: Home, About Us, Services, Portfolio, Contact
-   Complete with user registration, user login and user account and roles management using Spatie user roles.
-   Modern and responsive design with Bootstrap 5.0 fully customized using SASS
-   Uses Livewire 2.0 for improve user experience
-   Smooth navigation and intuitive user experience

## Getting Started

Get started with building a website using the template:

### Prerequisites

-   Basic knowledge of HTML and CSS
-   Knowledge on Laravel, MySQl, Livewire, Bootstrap and SASS
-   Text editor or integrated development environment (IDE)

### Installation

<b>Step 1 - Download the repository as a zip.</b>

<b>Step 2 - Open the terminal.

<b>Step 3 - Switch to the repository folder</b>

<b>Step 4 - Install all the dependencies using composer</b>

    composer install

<b>Step 5 - Install all packages using npm</b>

    npm install

<b>Step 6 - Copy the example env file and make the required configuration changes in the .env file</b>

    cp .env.example .env

<b>Step 7 - Generate a new application key</b>

    php artisan key:generate

<b>Step 8 - Run the database migrations (**Set the database connection in .env before migrating**)</b>

    php artisan migrate --seed

<b>Step 9 - Start the local development server</b>

    php artisan serve
    npm run dev

<b>Step 10 - You can now access the server at http://localhost:8000</b>

## Customization

Tailor the template to match your office's branding and requirements:

-   Update the logo and favicon with your office's branding.
-   Modify the content of each page to accurately represent your office's services and mission.
-   Adjust color schemes, typography, and styling in the CSS files.

## Deployment

Follow these steps to deploy your office website:

<p>Step 1 - Upload the modified template to your web hosting server.</p>
<p>Step 2 - Install Composer Dependencies.</p>
<p>Step 3 - Install and build packages using npm.</p>

    npm install
    npm run build

<p>Step 4 - Add the public files to the public_html folder.</p>
<p>Step 5 - Configure the Database.</p>
<p>Step 6 - Update the .env File.</p>
<p>Step 7 - Add the following in the <code>bootstrap/app.php</code>. Make sure it is added after initializing the <code>$app</code>.</p>

    $app->usePublicPath(realpath(base_path('/../public_html')));

<p>Step 8 - Test Your Laravel Application.</p>
<p>Step 9 - Regularly update the content to keep information accurate and relevant.</p>

## Documentation

For more in-depth instructions and advanced customization options, refer to the [full documentation](link-to-documentation).

## Contributing

We welcome contributions to enhance the template's features and functionality. Please read our [contribution guidelines](CONTRIBUTING.md) for details.

## License

This project is licensed under the [MIT License](LICENSE).

## Contact

For any questions or inquiries, please contact our office at [contact@officewebsite.com](mailto:contact@officewebsite.com).
