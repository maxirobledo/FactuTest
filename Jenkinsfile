pipeline{
    agent any
    environment{
        DOCKERHUB_CREDENTIALS= credentials('DockerHub')
    }
    stages{
        stage('Build'){
            steps{
                sh 'docker build -t maxirobledo/factutest:latest .'
            }
        }
        stage('Login'){
            steps{
                sh 'echo $DOCKERHUB_CREDENTIALS | $DOCKERHUB_CREDENTIALS_PSW'
                sh 'docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin '
            }
        }
        stage('Push'){
            steps{
                sh 'docker push maxirobledo/factutest:latest'
            }
        }
    }
    post{
        always{
            sh 'docker logout'
        }
    }
}