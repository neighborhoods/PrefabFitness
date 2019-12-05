./bin/create_database.php
if [ $? -eq 0 ]; then
  ./vendor/bin/phinx migrate;
  ./vendor/bin/phinx seed:run;
fi
