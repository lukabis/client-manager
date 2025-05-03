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

5. **Install frontend dependencies**

    ```bash
    npm install
    ```

6. **Run database migrations**

    ```bash
    ./vendor/bin/sail artisan migrate
    ```

7. **Start the Vite development server**

    ```bash
    npm run dev
    ```

8. **Access the application**

    Open your browser and visit http://localhost
