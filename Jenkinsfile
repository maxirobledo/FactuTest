pipeline{
    agent any
    
    environment{
        //registry = "gustavoapolinario/docker-test"
        //registryCredential = 'dockerhub'
        dockerImage = ''
        //dockerHome = ''
    }

    stages{

        stage('Clone repository'){
            steps{
                checkout scm
            }
        }   
        
        /*stage('Initialize'){
            steps{
                script{
                    dockerHome = tool "docker"
                    env.PATH = "${dockerHome}/bin:${env.PATH}"
                }
            }
        }*/

        stage('Build image'){
            agent {
                dockerfile {
                    filename 'Dockerfile.txt'
                }
            steps{
                sh 'docker build -t maxirobledo/factutest:latest .'           
                echo 'Build Image Completed'  
                /*script{
                    dockerImage = docker.build("maxirobledo/factutest:latest")
                }*/
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
        } 
    }

}
