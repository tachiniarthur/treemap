# Treemap

## Technologies Used

- **Laravel**: PHP framework for backend development.

## Requirements

- PHP >= 8.0
- Composer
- Node.js >= 16.x
- NPM or Yarn

## Installation

1. **Clone the Repository**

```bash
git clone https://github.com/tachiniarthur/treemap.git
cd treemap
```

2. **Install Backend Dependencies**

```bash
composer install
```

3. **Configure the Environment**

Copy the .env.example file to .env and set up the necessary environment variables, such as database connection.

```bash
cp .env.example .env
```

4. **Generate Application Key**

```bash
php artisan key:generate
```

5. **Install Frontend Dependencies**

```bash
npm install
```

6. **Compile Assets**

```bash
npm run dev
```

7. **Run Migrations and Seeds**

```bash
php artisan migrate --seed
```

8. **Start the Server**

```bash
php artisan serve
```

## Usage

Access the application via a browser at http://localhost:8000.
