## Prerequiste
get the docker at here https://docs.docker.com/get-docker/

## Initialise
docker run --rm -v ${pwd}:/app composer install
<br>
docker-compose up
<br>
[Ctrl + C to after finish]

## Open another terminal
docker ps 
<br>
from the output, find the container with name "yourfoldername-app-1"
<br>
run this command to open the terminal in the conatainer<br>
docker exec -t -i container_name /bin/bash

