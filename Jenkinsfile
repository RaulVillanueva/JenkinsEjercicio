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
                sh 'php artisan test --filter AlumnosControllerTest'
            }
        }
        stage('Build') {
            steps {
                sh 'docker-compose build'
            }
        }
        stage('Stop containers') {
            steps {
                sh 'docker stop $(docker ps -q)'
            }
        }
        stage('Start container') {
            steps {
                sh 'docker-compose up -d'
            }
        }
    }
}
