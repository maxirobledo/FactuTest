pipeline{
    agent {
        dockerfile true
    }
    
    /*environment{
        //registry = "gustavoapolinario/docker-test"
        //registryCredential = 'dockerhub'
        dockerImage = ''
        //dockerHome = ''
    }*/

    stages{

        stage('Test') {
            steps {
                sh 'node --version'
            }
        }

        /*stage('Clone repository'){
            steps{
                checkout scm
            }
        } */  
        
        /*stage('Initialize'){
            steps{
                script{
                    dockerHome = tool "docker"
                    env.PATH = "${dockerHome}/bin:${env.PATH}"
                }
            }
        }*/

        /*stage('Build image'){
            steps{
                script{
                    dockerImage = docker.build("maxirobledo/factutest:latest")
                }
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
