pipeline {
    agent any

    environment {
        APP_DIR = "/var/www/html/innov360"
        SERVER = "root@38.242.232.151"   // ⚠️ remplace IP ici
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
                set -e

                docker run --rm \
                -v $WORKSPACE:/app \
                -w /app \
                composer:2 \
                composer install \
                    --no-interaction \
                    --prefer-dist \
                    --optimize-autoloader
                '''
            }
        }

        stage('Setup Environment') {
            steps {
                sh '''
                set -e

                docker run --rm \
                -v $WORKSPACE:/app \
                -w /app \
                php:8.2-cli \
                bash -c "
                    if [ ! -f .env ]; then
                        cp .env.example .env;
                    fi

                    php artisan key:generate --force
                "
                '''
            }
        }

        stage('Deploy to Server') {
            steps {
                sshagent(['server-ssh']) {
                    sh '''
                    set -e

                    echo "🚀 Deploying to server..."

                    rsync -avz --delete \
                        --exclude='.env' \
                        --exclude='storage/logs' \
                        --exclude='node_modules' \
                        $WORKSPACE/ $SERVER:$APP_DIR/

                    ssh $SERVER "
                        set -e
                        cd $APP_DIR

                        echo '📦 Installing PHP dependencies...'
                        composer install --no-interaction --prefer-dist --optimize-autoloader

                        echo '🧹 Laravel optimization...'
                        php artisan migrate --force
                        php artisan config:clear
                        php artisan cache:clear
                        php artisan config:cache
                        php artisan route:cache
                        php artisan view:cache
                    "

                    echo "✅ Deployment completed successfully"
                    '''
                }
            }
        }
    }

    post {
        success {
            echo "🎉 Pipeline succeeded!"
        }
        failure {
            echo "❌ Pipeline failed!"
        }
    }
}