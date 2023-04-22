pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                checkout([$class: 'GitSCM',
                          branches: [[name: '*/develop']],
                          userRemoteConfigs: [[url: 'https://github.com/RaulVillanueva/JenkinsEjercicio.git']]])
            }
        }
        stage('Test') {
            steps {
                bat 'php artisan test --filter AlumnosControllerTest'
            }
        }
        stage('Build') {
            steps {
                bat 'docker-compose build'
            }
        }
        stage('Stop containers') {
            steps {
                bat 'docker stop test-app'
                bat 'docker stop test-nginx'
            }
        }
        stage('Start container') {
            steps {
                bat 'docker-compose up -d'
            }
        }
    }
}
