# Setup Instructions

#Clone the Repository
git clone <repository_url> my_laravel_project
cd my_laravel_project

#  Install Dependencies
composer install

#  Set Permissions
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Configure Environment
cp .env.example .env

# Update the .env file with your database credentials:
sed -i "s/DB_DATABASE=laravel/DB_DATABASE=laravel_db/" .env
sed -i "s/DB_USERNAME=root/DB_USERNAME=root/" .env
sed -i "s/DB_PASSWORD=/DB_PASSWORD=password/" .env


# Generate Application Key
php artisan key:generate


# Run Migrations and Seeders
php artisan migrate


# Seed the database:
php artisan db:seed

# Install NPM Dependencies
npm install
npm run build

#  Build Frontend Assets
# For development:

npm run dev


# To compile assets for production:
npm run build

# Start the Development Server
# Run the Laravel development server:
php artisan serve

# Start the Vite development server for real-time frontend updates:
npm run dev

Vishal  readme file ma aa content add mukide 
