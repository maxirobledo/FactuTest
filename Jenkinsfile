pipeline {
  agent any
  environment {
    //DOCKERHUB_CREDENTIALS = credentials('DockerHub')
    USUARIO = credenciales ('DockerHub_USERNAME')
    PASSWORD = credenciales ('DockerHub_PASSWORD')
  }
  stages {
    stage('Build') {
      steps {
        sh 'docker build -t maxirobledo/factutest:latest .'
      }
    }
    stage('Login') {
      steps {
        //sh 'echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin'
        sh 'echo USUARIO = $USUARIO'
        sh 'echo PASSWORD = $PASSWORD'
      }
    }
    stage('Push') {
      steps {
        sh 'push to dockerhub'
        //sh 'docker push maxirobledo/factutest:latest'
      }
    }
  }
  post {
    always {
      sh 'docker logout'
    }
  }
}

