pipeline {
  agent any
  stages {
    stage('Stiahnutie composera') {
      steps {
        sh 'sudo wget https://getcomposer.org/composer.phar'
      }
    }
    stage('Nainstalovanie zavislosti') {
      steps {
        sh 'sudo php ./composer.phar install --no-interaction'
      }
    }
    stage('Spustenie testovania') {
      steps {
        sh 'vendor/bin/phpunit'
      }
    }
  }
}