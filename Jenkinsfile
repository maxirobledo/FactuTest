pipeline{
    //agent any
    agent {
        docker { image 'node:16.13.1-alpine' }
    }
    
    environment{
        DOCKERHUB_CREDENTIALS = credentials('dockerhub')
    }

    stages{

        stage('Clone repository'){
            steps{
                checkout scm
            }
        }   

        stage('Build image'){
            steps{
                sh 'node --version'
                /*sh 'docker build -t maxirobledo/factutest:latest .'           
                echo 'Build Image Completed'  */
                /*script{
                    dockerImage = docker.build("maxirobledo/factutest:latest")
                }*/
            }
        }
        
        /*stage('Docker login'){
            steps{
                sh 'echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u DOCKERHUB_CREDENTIALS_USR --password-stdin'           
            }
        }
        
        stage('Push image'){
            steps{
                script{
                    docker.withRegistry('https://registry.hub.docker.com', 'dockerhub') {
                        //app.push("${env.BUILD_NUMBER}")
                        dockerImage.push("latest")
                    }
                } 
            }            
        } */
    }

}