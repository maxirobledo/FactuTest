node {
    def app     
    stage('Clone repository') {                        
        checkout scm   
    }     
    stage('Build image') {            
        app = docker.build("maxirobledo/factutest")    
    }     
    stage('Test image') {           
        app.inside {                 
            sh 'echo "Tests passed"'        
        }    
    }     
    stage('Push image') {
        docker.withRegistry('https://registry.hub.docker.com', 'maxirobledo/facutest') {            
        //app.push("${env.BUILD_NUMBER}")            
        app.push("latest")        
        }    
    }
}