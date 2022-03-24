pipeline {
  agent any
  environment {
    DOCKERHUB_CREDENTIALS = credentials('dockerhub')
  }
  stages {
    /*stage('Build') {
      steps {
        sh 'docker build -t maxirobledo/factutest:latest .'
      }
    }
    stage('Login') {
      steps {
        
        sh 'echo $DOCKERHUB_CREDENTIALS_PSW'
        sh 'docker login --username maxirobledo --password-stdin'
      }
    }
    stage('Push') {
      steps {
        sh 'docker push maxirobledo/factutest:latest'
      }
    }*/
    stage('Clone repository') {
        checkout scm
    }
    stage('Build image') {
       image = docker.build("maxirobledo/factutest")
    }
    stage('Push image') {    
      docker.withRegistry('https://registry.hub.docker.com', 'roble1988') {
        //app.push("${env.BUILD_NUMBER}")
        image.push("latest")
      }
    }
  }
  /*post {
    always {
      sh 'docker logout'
    }
  }*/
}