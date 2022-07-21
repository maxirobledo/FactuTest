pipeline{
    agent any
    
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
                sh 'docker build -t maxirobledo/factutest:0.6.1 .'           
            }
        }        
        stage('Docker login'){
            steps{
                sh 'echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin'          
            }
        }
        stage('Push image'){
            steps{
                script{                                        
                    sh 'docker push maxirobledo/factutest:0.6.1'
                    /*docker.withRegistry('https://registry.hub.docker.com', 'dockerhub') {
                        //app.push("${env.BUILD_NUMBER}")
                        dockerImage.push("latest")*/
                }
            } 
        }            
    }
    post {
		always {
			sh 'docker logout'
		}
	}
}