node {
    def app
    stage('Clone repository') {
        /* Cloning the Repository to our Workspace */
        checkout scm
    }
    stage('Build image') {
        //app = docker.build("maxirobledo/factutest")
        def newApp = docker.build "maxirobledo/factutes:latest"
        newApp.push()
    }
    /*stage('Push image') {
        docker.withRegistry('https://registry.hub.docker.com', 'dockerhub') {
            //app.push("${env.BUILD_NUMBER}")
            app.push("latest")
            } 
                echo "Trying to Push Docker Build to my DockerHub"
    }*/
}
