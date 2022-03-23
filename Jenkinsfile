pipeline {
  agent any
  environment {
    DOCKERHUB_CREDENTIALS = credentials('DockerHub')
  }
  stages {
    stage('Build') {
      steps {
        sh 'docker version'
      }
    }
  }
}