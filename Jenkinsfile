node {
    def app
    stage('Clone repository') {
        /* Cloning the Repository to our Workspace */
        checkout scm
    }
    //Verify tittle
    stage('Verify') {   
        //sh 'payload'
    }
    stage('Build image') {
        /* This builds the actual image */
        app = docker.build("maxirobledo/factutest")
    }
    stage('Push image') {
        /* 
			You would need to first register with DockerHub before you can push images to your account
		*/
        docker.withRegistry('https://registry.hub.docker.com', 'dockerhub') {
            //app.push("${env.BUILD_NUMBER}")
            app.push("latest")
            } 
                echo "Trying to Push Docker Build to my DockerHub"
    }
}
