# PrefabFitness
The fitness functions for [`prefab`](https://github.com/neighborhoods/prefab).

The FunctionXY directories are example starting points that prefab should be able to build from.
X corresponds to the major version of prefab for this function. 
Y is an incrementing integer to distinguish the functions.

Each FunctionXY directory contains a specific README.md for that function.

## Setting up Xdebug for PrefabFitness
1. Determine the xdebug port for this project. You can find this in the Dockerfile in the line starting `EXPOSE`. 
You can also validate that by running, from your host, 
`docker-compose exec prefab_fitness php -i | grep xdebug.remote_port`. Set this value in PHPStorm Preferences under 
`Languages & Framworks > PHP > Debug` in the field "Debug Port".
2. In PHPStorm Preferences, under `Languages & Framworks > PHP > Servers`, add a new entry where Name and Host are 
`prefab_fitness.neighborhoods.com`. Check the box for "Use Path Mappings", and set the "Aboslute path on the server" for
top-level for the project (likely `/Users/yourname/Sites/PrefabFitness`) to 
`/var/www/html/prefab_fitness.neighborhoods.com`.  
3. You may need to turn off and on PHPStorm's debug listener for changes to take effect. 
