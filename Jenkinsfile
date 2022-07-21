pipeline{
    agent any
    
    /*environment{
        DOCKERHUB_CREDENTIALS = credentials('dockerhub')
    }*/

    stages{
        stage('Clone repository'){
            steps{
                checkout scm
            }
        }   
        /*stage('Install'){
            steps{
                sh 'wget https://get.docker.com/ > dockerinstall && chmod 777 dockerinstall && ./dockerinstall'
                sh 'sudo chmod 666 /var/run/docker.sock'
            }
        }*/
        stage('Build image'){
            steps{
                //sh 'docker build -t maxirobledo/factutest:latest .' 
                echo "build app"          
            }
        }        
        stage('Docker login'){
            steps{
                //sh 'echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u DOCKERHUB_CREDENTIALS_USR --password-stdin'          
                echo "login" 
            }
        }
        stage('Push image'){
            steps{
                echo "push image"
                /*script{                    
                    docker.withRegistry('https://registry.hub.docker.com', 'dockerhub') {
                        //app.push("${env.BUILD_NUMBER}")
                        dockerImage.push("latest")
                }*/
            } 
        }            
    }
}