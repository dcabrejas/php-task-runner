# Task Runner 
This is useful when you have to run multiple maintenance tasks on a cron in a server


## Usage
Set up the cron :
```
0 4 * * 1-4 /usr/bin/php-7.0 /home/www-data/___scripts/nightly/index.php  1>> /home/www-data/___scripts/nightly/logs/debug.log 2>> /home/www-data/___scripts/nightly/logs/error.log
```

You can add new tasks in the task folders, every task goes into one php file.
Every php file inside tasks will be picked up and run by the `index.php` file.