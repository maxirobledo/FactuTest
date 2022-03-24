pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        sh 'docker build -t maxirobledo/factutest:latest .'
      }
    }
    stage('Login') {
      steps {
        sh 'echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin'
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
