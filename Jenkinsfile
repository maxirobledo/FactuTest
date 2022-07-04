pipeline{
    agent any
    
    stages{
        stage('Clone repository') {
            steps{
                checkout scm
            }
        }   
        stage('Build image') {
            steps{
                script {
                    def app = docker.build("maxirobledo/factutest")
                }
            }
        }
        stage('Push image') {
            steps{
                script{
                    docker.withRegistry('https://registry.hub.docker.com', 'dockerhub') {
                        //app.push("${env.BUILD_NUMBER}")
                        app.push("latest")
                    }
                } 
            }            
        }   
    }

}
