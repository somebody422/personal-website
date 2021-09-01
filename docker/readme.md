

## Using docker-compose


docker-compose ...
  * build - (re)build all images
  * up - Start all services. "-d" will detatch and run in background
  * stop - Stop all services. Persistent memory/volumes will persist
  * kill - Send sigkill to all services and stop containers
  * down - Stop all services, then remove the containers from docker. Shared volumes will still persist!




## Volumes

Volumes provide a way to have persistent data. A few different ways to do it using docker-compose.yaml:
  * a relative path: ./path/to/dir:/target/dir - This will mount the directory into the container, allowing it to access files and make changes that persist across containers
  * Shared volume: volname:/target/dir - Will mount a volume that is persistent, and may be mounted and shared by multiple services/containers. Must declare in the global "volumes:" section, and can optionally give some more info like specifying a driver

To mess with / reset / delete volumes, use "docker volume .."
"docker volume ls" is a good starting point

