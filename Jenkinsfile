pipeline{
    agent any
    
    stages{
        stage('Clone repository') {
            steps{
                        checkout scm
            }
        }   
        stage("build"){
            steps{
                echo "build"
            }
        }
        stage('Build image') {
            steps{
                app = docker.build("maxirobledo/factutest")
            }
        }
        stage('Push image') {
            steps{
                docker.withRegistry('https://registry.hub.docker.com', 'dockerhub') {
                //app.push("${env.BUILD_NUMBER}")
                app.push("latest")
                } 
            }            
        }   
    }

}
