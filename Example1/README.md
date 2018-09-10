### Setup PrefabExamples

```bash
git clone git@github.com:neighborhoods/PrefabExamples.git
```

### Compose Example1
**\*WARNING - as of this writing you must use VCS explicitly as a repository in composer.json for composer to fallback to the filesystem when adding new files to `prefab`\***
```bash
cd Mason
docker-compose exec prefab_examples bash
cd Example1
composer install
cd vendor/neighborhoods
rm -rf prefab
composer update --prefer-source
exit
```

### Update the Prefab dependency to be used with git

```bash
cd PrefabExamples/Example1/vendor/neighborhoods
rm -rf prefab
git clone git@github.com:neighborhoods/prefab.git
cd prefab
git checkout 4.x
```
