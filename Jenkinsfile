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
                }
            } 
        }            
    }
    post {
		always {
			sh 'docker logout'
		}
        failure{
            slackSend color: 'danger', message: ":x: ${env.JOB_NAME} - #${env.BUILD_NUMBER} Failure (<${env.BUILD_URL}|Open>)"
        }
        success{
            slackSend color: 'good', message: 'Se publicó exitosamente la imagen de la app'
        }
	}
}