pipeline {
  agent any
  environment {
    //DOCKERHUB_CREDENTIALS = credentials('DockerHub')
    //USUARIO = credentials('DockerHub_USERNAME')
    //PASSWORD = credentials('DockerHub_PSW')
    USUARIO = 'maxirobledo'
    PASSWORD = 'roble1988'
  }
  stages {
    stage('Build') {
      steps {
        sh 'docker build -t maxirobledo/factutest:latest .'
      }
    }
    stage('Login') {
      steps {
        /*sh 'echo USUARIO = $USUARIO'
        sh 'echo PASSWORD = $PASSWORD'*/
        sh 'docker login -u $USUARIO -p PASSWORD'
      }
    }
    stage('Push') {
      steps {
        sh 'echo push to dockerhub'
        //sh 'docker push maxirobledo/factutest:latest'
      }
    }
  }
}

