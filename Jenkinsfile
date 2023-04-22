pipeline {
    agent any
    environment {
        BUILD_NUMBER_MINUS_ONE = "${BUILD_NUMBER.toInteger() - 1}"
    }
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
        stage('Start container') {
            steps {
                bat 'docker-compose up -d'
            }
        }
    }
}
