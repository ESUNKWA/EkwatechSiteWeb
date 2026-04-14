pipeline {
    agent any

    environment {
        APP_DIR = "/var/www/html/innov360"
    }

    stages {

        stage('Checkout') {
            steps {
                git credentialsId: 'github-token',
                    branch: 'main',
                    url: 'https://github.com/ESUNKWA/innov360.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh '''
                docker run --rm \
                -v $WORKSPACE:/app \
                -w /app \
                composer:2 \
                composer install --no-interaction --prefer-dist --optimize-autoloader
                '''
            }
        }

        stage('Setup Environment') {
            steps {
                sh '''
                docker run --rm \
                -v $WORKSPACE:/app \
                -w /app \
                php:8.2-cli \
                bash -c "
                    if [ ! -f .env ]; then
                        cp .env.example .env;
                    fi
                    php artisan key:generate
                "
                '''
            }
        }

        stage('Deploy to Server') {
            steps {
                sshagent(['server-ssh']) {
                    sh '''
                    rsync -avz --delete $WORKSPACE/ root@IP:/var/www/html/innov360/

                    ssh root@IP "
                        cd /var/www/html/innov360 &&
                        composer install --no-interaction --prefer-dist --optimize-autoloader &&
                        php artisan migrate --force &&
                        php artisan config:cache &&
                        php artisan route:cache
                    "
                    '''
                }
            }
        }
    }
}