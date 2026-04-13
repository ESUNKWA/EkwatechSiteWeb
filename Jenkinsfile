pipeline {
    agent any

    environment {
        APP_DIR = "/var/www/html/innov360"
    }

    stages {

        stage('Install Dependencies') {
            steps {
                sh 'composer install --no-interaction --prefer-dist --optimize-autoloader'
            }
        }

        stage('Setup Environment') {
            steps {
                sh '''
                if [ ! -f .env ]; then
                    cp .env.example .env
                fi
                php artisan key:generate
                '''
            }
        }

        stage('Permissions') {
            steps {
                sh '''
                chmod -R 775 storage bootstrap/cache
                '''
            }
        }

        stage('Migrate Database') {
            steps {
                sh 'php artisan migrate --force'
            }
        }

        stage('Optimize') {
            steps {
                sh '''
                php artisan config:clear
                php artisan cache:clear
                php artisan config:cache
                php artisan route:cache
                php artisan view:cache
                '''
            }
        }

        stage('Restart Services') {
            steps {
                sh '''
                sudo systemctl restart apache2
                '''
            }
        }
    }
}