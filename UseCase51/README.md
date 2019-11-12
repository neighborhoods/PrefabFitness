# Use Case 51
### Generating a single listing endpoint

This use case demonstrates how to generate an HTTP endpoint using Prefab. Notice the only file inside `src` is a single file named `Listing.prefab.definition.yml`. For more information on how to create these files, see the [Prefab README](https://github.com/neighborhoods/Prefab/blob/5.x/README.md).

#### Getting Started
1. Navigate to the root of UseCase51 on your terminal
1. `composer install` to install the project dependencies
1. Run `./expose-nhds-tld`. This allows us to make local requests to the `nhds` top level domain in the test request below.
1. `docker-compose build && docker-compose up -d` to build and start the Nginx, Postgres, Redis, and PHP containers
1. `docker-compose exec prefab_fitness ./bin/database_setup.sh` to create the prefab_fitness database, run migrations, and seed the database with mock data
1. `./vendor/bin/prefab` to run Prefab and generate the Listing HTTP endpoint
    - Note to Docker For Mac users: This command can be run either inside the container or on the host machine. However, filesystem access using Docker For Mac is often extremely slow. Since Prefab writes a large number of files to disk, running Prefab inside the Docker container can take a significant amount of time. Therefore, it is recommended you run Prefab on the host machine.

Your project is now ready! Notice you now have a `fab/` directory with `Listing` machinery under `fab/MV1` and general HTTP machinery under `fab/Prefab5`. You can now query your database over HTTP using 
[Search Criteria] (TODO: Link to search criteria documentation once it exists). 

This project is configured to listen for requests to `use_case_51.local.nhds`. Here is an example cURL request to get all listings with an `id` less than 20:

```
curl -g -X GET \
   'http://use_case_51.local.nhds/mv1/listing/?searchCriteria[filters][0][glue]=and&searchCriteria[filters][0][field]=id&searchCriteria[filters][0][condition]=lt&searchCriteria[filters][0][values][0]=20'
```
