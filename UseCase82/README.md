# Use Case 82
### Debugging a single listing endpoint

This use case demonstrates how to log errors using DEBUG_MODE. For more information, see the [Prefab README](https://github.com/neighborhoods/Prefab/blob/8.x/README.md).

The project is already configured with the environment variable DEBUG_MODE="true", and also with the specific permissions to the /Log/HTTP.log file. 
You can force an error, like removing the last line of http-buildable-directories.yml file, then make an HTTP request, you will be able to see that error on the /Logs/HTTP.log file.

#### Getting Started
1. Navigate to the root of UseCase82 on your terminal
2. Run `composer install` to install the project dependencies
3. Run `./expose-nhds-tld`. This allows us to make local requests to the `nhds` top level domain in the test request below.
4. Run `docker-compose build && docker-compose up -d` to build and start the Nginx, Postgres, Redis, and PHP containers
5. Run `docker-compose exec prefab_fitness ./bin/database_setup.sh` to create the prefab_fitness database, run migrations, and seed the database with mock data
6. Run `./vendor/bin/prefab` to run Prefab and generate the Listing HTTP endpoint
    - Note to Docker For Mac users: This command can be run either inside the container or on the host machine. However, filesystem access using Docker For Mac is often extremely slow. Since Prefab writes a large number of files to disk, running Prefab inside the Docker container can take a significant amount of time. Therefore, it is recommended you run Prefab on the host machine.

Your project is now ready! Notice you now have a `fab/` directory with `Listing` machinery under `fab/MV1` and general HTTP machinery under `fab/Prefab5`. You can now query your database over HTTP using 
[Search Criteria](https://github.com/neighborhoods/Prefab/blob/8.x/README.md#search-criteria). 

This project is configured to listen for requests to `use_case_82.local.nhds`. Here is an example cURL request to get all listings with an `id` less than 20:

```
curl -g -X GET \
   'http://use_case_82.local.nhds/v1/listing/?searchCriteria[filters][0][glue]=and&searchCriteria[filters][0][field]=id&searchCriteria[filters][0][condition]=lt&searchCriteria[filters][0][values][0]=20'
```

You can prime the containers before making the first http request.
``` bash
bin/prime_http_containers.php
```
You will see the cached container(s) in data/cache.

