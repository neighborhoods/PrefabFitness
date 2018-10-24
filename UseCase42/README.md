### Defines the fitness of Prefab for
* Singular Root `DAO`

Inside the container
```bash
cd UseCase42
composer install
./vendor/bin/prefab gen:fab
```

This will generate all necessary components to respond to the http route:
`prefab_fitness.local.nhds/mv1/users/?searchCriteria[filters][0][field]=key&searchCriteria[filters][0][values][0]=b73992e9abbd5cda1807d5129067a166e4bc9e02&searchCriteria[filters][0][values][1]=d27d35132e6eb4776b658df28da70b3725781f54&searchCriteria[filters][0][condition]=in&searchCriteria[filters][0][glue]=and&searchCriteria[pageSize]=50&searchCriteria[currentPage]=0`

Note: For the purposes of this example, the repository has been overriden to respond with an example record instead of going to the database, so any request to prefab_fitness.local.nhds/mv1/users/ with valid search criteria will respond with the same record

#### Setting up PrefabFitness to pull Prefab from the Github repository instead of Satis
##### Compose UseCase42
**\*WARNING - as of this writing you must use VCS explicitly as a repository in composer.json for composer to fallback to the filesystem when adding new files to `prefab`\***
```bash
cd Mason
docker-compose exec prefab_fitness bash
cd UseCase42
composer install
cd vendor/neighborhoods
rm -rf prefab
composer update --prefer-source
exit
```

### Update the Prefab dependency to be used with git

```bash
cd PrefabFitness/UseCase42/vendor/neighborhoods
rm -rf prefab
git clone git@github.com:neighborhoods/prefab.git
cd prefab
git checkout 4.x
```

### Clear everything composer

```bash
cd Mason
docker-compose exec prefab_fitness bash
cd UseCase42
rm -rf vendor; rm composer.lock; composer clear-cache
exit
```
