### Defines the fitness of Prefab for
* Singular Root Nested `DAO`s
* Plural Root Nested `DAO`s
* Subset `DAO`s
* Superset `DAO`s

### Setup UseCase41

```bash
git clone git@github.com:neighborhoods/PrefabFitness.git
```

### Compose UseCase41
**\*WARNING - as of this writing you must use VCS explicitly as a repository in composer.json for composer to fallback to the filesystem when adding new files to `prefab`\***
```bash
cd Mason
docker-compose exec prefab_fitness bash
cd Example1
composer install
cd vendor/neighborhoods
rm -rf prefab
composer update --prefer-source
exit
```

### Update the Prefab dependency to be used with git

```bash
cd PrefabFitness/Example1/vendor/neighborhoods
rm -rf prefab
git clone git@github.com:neighborhoods/prefab.git
cd prefab
git checkout 4.x
```

### Clear everything composer

```bash
cd Mason
docker-compose exec prefab_fitness bash
cd Example1
rm -rf vendor; rm composer.lock; composer clear-cache
exit
```
