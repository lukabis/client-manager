# Client Manager

![Laravel](https://img.shields.io/badge/Laravel-10.x-red.svg)
![Livewire](https://img.shields.io/badge/Livewire-3.x-purple.svg)
![License](https://img.shields.io/badge/License-MIT-blue.svg)

A modern client management application built with Laravel and Livewire. This project demonstrates real-time, reactive interfaces using Livewire components without writing JavaScript.

## 📋 Overview

Client Manager is a demonstration application showcasing Laravel Livewire's capabilities for building dynamic interfaces with pure PHP. The application features real-time form validation, responsive client listing with search functionality, and seamless client management - all without writing JavaScript.

## ✨ Features

- **Client Management**: Create, view, update, and delete client records
- **Real-time Validation**: Form validation happens instantly as users type
- **Responsive Interface**: Modern, clean UI that works across devices
- **Comprehensive Tests**: Well-tested Livewire components using Laravel's testing tools
- **Zero JavaScript**: All interactivity built with Laravel Livewire

## 🖥️ Screenshots

*Screenshots to be added*

## 🛠️ Technology Stack

- **Laravel 10**: PHP web application framework
- **Livewire 3**: Full-stack framework for dynamic interfaces
- **Laravel Sail**: Docker development environment
- **SQLite**: Database (easy to switch to MySQL or PostgreSQL)
- **Vite**: Frontend build tool
- **Tailwind CSS**: Utility-first CSS framework

## 🚀 Installation

### Prerequisites

- Docker Compose
- Composer
- Node.js & NPM

### Setup Instructions

1. **Clone the repository**
    ```bash
    git clone git@github.com:lukabis/client-manager.git
    cd client-manager
    ```

2. **Install PHP dependencies**

    ```bash
    composer install
    ```

3. **Copy environment file**

    ```bash
    cp .env.example .env
    ```

4. **Start Docker containers with Laravel Sail**

    ```bash
    ./vendor/bin/sail up -d
    ```

5. **Generate application key**

    ```bash
    ./vendor/bin/sail artisan key:generate
    ```

6. **Install frontend dependencies**

    ```bash
    npm install
    ```

7. **Run database migrations**

    ```bash
    ./vendor/bin/sail artisan migrate
    ```

8. **Start the Vite development server**

    ```bash
    npm run dev
    ```

9. **Access the application**

    Open your browser and visit http://localhost


## 🧪 Testing

The application includes comprehensive tests for Livewire components. To run the tests

```bash
./vendor/bin/sail artisan test
```

### Test Coverage

- Form validation tests
- Client creation tests
- Client update tests
- Component rendering tests


## 🧠 Learning Laravel Livewire

This project demonstrates several Livewire concepts:

- Component lifecycle hooks
- Real-time validation
- Form handling
- Component testing
- Laravel integration


## 🤝 Contributing

Contributions are welcome! Feel free to open issues or submit pull requests.

1. Fork the repository
2. Create your feature branch (git checkout -b feature/amazing-feature)
3. Commit your changes (git commit -m 'Add some amazing feature')
4. Push to the branch (git push origin feature/amazing-feature)
5. Open a Pull Request


## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.
