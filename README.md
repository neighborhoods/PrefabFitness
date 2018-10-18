# PrefabFitness
The fitness use cases for [`prefab`](https://github.com/neighborhoods/prefab).

The `UseCaseXY` directories are example starting points that prefab should be able to build from.
`X` corresponds to the major version of prefab for this use case. 
`Y` is an incrementing integer to distinguish the use cases.

Each `UseCaseXY` directory contains a specific `README.md` for that use case.

###Table of Contents

Use Case | README| Description
-----|------|------
UseCase 41 | [README](UseCase41/README.md) | <ul><li> Singular Root Nested `DAO`s</li> <li>Plural Root Nested `DAO`s</li><li> Subset `DAO`s</li> <li>Superset `DAO`s</li></ul>
UseCase 42 | (UseCase42/README.md) | Single root User `DAO`. Simplest code generation example
UseCase 43 | [README](UseCase43/README.md) | Triple nested `DAO`s

#### Running Prefab 
Setting up the container:

Make sure you have pulled the latest version of Mason from Master
``` bash
git clone git@github.com:neighborhoods/PrefabFitness.git
cd PrefabFitness
git checkout 4.x
cd ../Mason
docker-compose build prefab_fitness nginx && docker-compose up -d
docker-compose exec prefab_fitness bash
```

### Hitting different Use Case HTTP Endpoints
* In order to hit different use case endpoints, you must update the `root` in `Mason/nginx/sites/prefab_fitness.neighborhoods.com.conf` to the use case you would like to point at and rebuild nginx

*Note: This requirement should go away in the near future*
## Setting up Xdebug for PrefabFitness
1. Determine the xdebug port for this project. You can find this in `docker/xdebug.ini` under `xdebug.remote_port`. 
You can also validate that by running, from your host, 
`docker-compose exec prefab_fitness php -i | grep xdebug.remote_port`. Set this value in PHPStorm Preferences under 
`Languages & Framworks > PHP > Debug` in the field "Debug Port".
2. In PHPStorm Preferences, under `Languages & Framworks > PHP > Servers`, add a new entry where Name and Host are 
`prefab_fitness.neighborhoods.com`. Check the box for "Use Path Mappings", and set the "Aboslute path on the server" for
top-level for the project (likely `/Users/yourname/Sites/PrefabFitness`) to 
`/var/www/html/prefab_fitness.neighborhoods.com`.  
3. You may need to turn off and on PHPStorm's debug listener for changes to take effect. 
