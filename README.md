# Wordpress on Docker

This small application is an example of how to get Wordpress running with
[Docker Compose](https://docs.docker.com/compose/) quickly. It's meant for
local development and enables debug output by default.

Your application's files will be served from the `app/wp-content/` folder
that is mapped into the `wordpress` container. You will need to alter the
`.gitignore` file to explicitly allow your application's plugins and themes
to be saved with git.

## Getting Started

First make sure the folder you are running this project from has a unique
name. Normally, if you name the folder after the project you will be fine.
The reason is that `docker-compose` will name it's containers and data volumes
using the name of the parent folder as an identifier.

Once your project is in a folder with the correct name, you can run
`docker-compose up` to start the database and wordpress containers.
It takes a bit to initialize the database the first time, but after the `db` logs
stop outputting information for a bit you should be able to go to
[http://localhost](http://localhost) in your browser to view your new Wordpress
installation. Follow the setup proceedure to get your site up and running.

You can cancel the `docker-compose` process at anytime to stop the webserver.
Since we're using Compose and a shared database volume, the next time you
run `docker-compose up` the app will be in the same state that it was the
last time you used it. No need to setup Wordpress again.

### Adding a Theme and Plugins

You can add a theme and plugins to your Wordpress install by changing the files
in the `app/wp-content/` folder. If you'd like to persist those changes in git,
you will need to add lines to the `.gitignore` file to explicitly add specific
files and folders.

For example, adding `!/app/wp-content/themes/custom-theme/` will allow you to
save the folder `app/wp-content/themes/custom-theme/` as part of your git project.

## Existing Site Setup

If you'd prefer to get started with an existing site's data, move a copy of the
following folders from a backup of your install into this project's
`app/wp-content` folder:

- `wp-content/plugins/`
- `wp-content/uploads/`

Only files/folders inside of the `app/wp-content/` folder are mounted into the
`wordpress` container.

### Existing Database

You will need to create a backup of the production database and mount it
into the `db` containers `/docker-entrypoint-initdb.d/` folder *before*
you try to start the project for the first time. You can read more about it
from the [`mariadb` container's README](https://hub.docker.com/_/mariadb/)
but an example of mapping a file on your machine called `backup.sql` could
look like this in your `docker-compose.yml` file:

```yaml
    ...

    db:
      image: mariadb:10.1.17
      environment:
        MYSQL_ROOT_PASSWORD: example
      volumes:
        - dbdata:/var/lib/mysql
        - ./backup.sql:/docker-entrypoint-initdb.d/backup.sql

    ...
```

You should make sure the following lines are at the top of the sql backup
file so that the existing data is loaded into the database this project expects.

```sql
CREATE DATABASE IF NOT EXISTS `wp_wordpress`;
USE "wp_wordpress";
```

If you have already started the project before, you will need to remove
the existing database volume so it will be recreated the next time you
start the app. The following will shutdown any containers and remove them
from the app, then remove the named data volume our database info is
stored to.

```
docker-compose down
docker volume rm wordpressondocker_dbdata
```
