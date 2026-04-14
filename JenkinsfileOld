pipeline {
    agent any

    environment {
        APP_DIR = "/var/www/html/innov360"
    }

    options {
        skipDefaultCheckout(true)
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
                sh 'php artisan migrate --force || true'
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

        stage('Deploy to Server') {
            steps {
                sshagent(['server-ssh']) {
                    sh """
                    ssh -o StrictHostKeyChecking=no root@38.242.232.151 '
                        cd $APP_DIR &&
                        git pull origin main &&
                        composer install --no-interaction --prefer-dist --optimize-autoloader &&
                        php artisan migrate --force &&
                        php artisan config:cache
                    '
                    """
                }
            }
        }

        stage('Restart Services') {
            steps {
                sshagent(['server-ssh']) {
                    sh '''
                    ssh root@38.242.232.151 "
                        sudo systemctl restart apache2
                    "
                    '''
                }
            }
        }
    }
}