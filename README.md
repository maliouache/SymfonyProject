# SymfonyProject
 1- Open terminal in the folder where you want to deploy the code source

 2- execute the following commands:
    -$git clone https://github.com/maliouache/SymfonyProject.git
    -$cd SymfonyProject/ProjectSymfony
    -$php ../composer.phar update

 3- create a database in mysql

 4- make sure to give the right access to the database by modifiying the file ./app/config/parameters.yml and then continue with the following commands
    -$php bin/console doctrine:schema:update --force
    -$php bin/console server:start

 5- open the page localhost:8000 in the browser


Please make sure you are connected to internet since it uses bootstrap ressources :)
