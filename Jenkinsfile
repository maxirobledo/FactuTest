pipeline {
  agent any
  environment {
    DOCKERHUB_CREDENTIALS = credentials('dockerhub')
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
        sh 'echo $DOCKERHUB_CREDENTIALS_PSW'
        sh 'docker login --username maxirobledo --password-stdin'
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