pipeline {
  agent any
  environment {
    DOCKERHUB_CREDENTIALS = credentials('docker-hub')
  }
  stages {
    stage('Build') {
      steps {
        sh 'docker build -t maxirobledo/factutest:latest .'
      }
    }
    stage('Login') {
      steps {
        //Esto es un comentario
        sh 'echo $DOCKERHUB_CREDENTIALS_USR $DOCKERHUB_CREDENTIALS_PSW'
        sh 'docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin'
      }
    }
    stage('Push') {
      steps {
        sh 'docker push maxirobledo/factutest:latest'
      }
    }
  }
  post {
    always {
      sh 'docker logout'
    }
  }
}