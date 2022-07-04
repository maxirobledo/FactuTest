pipeline{
    agent any
    
    environment {
        //registry = "gustavoapolinario/docker-test"
        //registryCredential = 'dockerhub'
        dockerImage = ''
    }

    stages{

        stage('Clone repository') {
            steps{
                checkout scm
            }
        }   
        
        stage('Build image') {
            steps{
                script{
                    dockerImage = docker.build("maxirobledo/factutest")
                }
            }
        }
        
        stage('Push image') {
            steps{
                script{
                    docker.withRegistry('https://registry.hub.docker.com', 'dockerhub') {
                        //app.push("${env.BUILD_NUMBER}")
                        dockerImage.push("latest")
                    }
                } 
            }            
        }   
    }

}
