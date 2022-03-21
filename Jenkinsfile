pipeline {
  agent any
  options {
    buildDiscarder(logRotator(numToKeepStr: '5'))
  }
  environment {
    DOCKERHUB_CREDENTIALS = credentials('DockerHub')
  }
  stages {
    stage('Build') {
      steps {
        sh 'docker build -t maxirobledo/factutest:latest .'
      }
    }
    stage('Login') {
      steps {
        sh 'echo $DOCKERHUB_CREDENTIALS_PSW'
        sh 'echo docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin'
      }
    }
    stage('Push') {
      steps {
        sh 'docker push dmaxirobledo/factutest:latest'
      }
    }
  }
  post {
    always {
      sh 'docker logout'
    }
  }
}
