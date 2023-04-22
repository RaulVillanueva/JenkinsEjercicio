pipeline {
    agent any
    environment {
        OLD_CONTAINER_NAME = "test-${GIT_BRANCH}-1.0.0-${BUILD_NUMBER.toInteger() - 1}"
    }
    stages {
        stage('minus1') {
            steps {
                echo 'OLD_CONTAINER_NAME'
            }    
        }
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
                bat 'docker stop $(docker ps -aq)'
            }
        }
        stage('Start container') {
            steps {
                bat 'docker-compose up -d'
            }
        }
    }
}
