#!/bin/bash

docker stop $(docker ps -qa); docker rm $(docker ps -qa);
docker rmi -f $(docker images -qa);
docker network rm $(docker network ls -q) 2>/dev/null
docker-compose up --build
say done
