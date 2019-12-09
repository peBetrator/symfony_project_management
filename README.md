# symfony-project-management

#### admin credentials:

{admin: admin}

## functions

### admin:

- admin panel
- managing users, projects, roles

### roles:

- specifying users' access to the projects
- using an Access entity to configure access more accurately

### users:

- registration / authorization
- reading/writing/deleting projects

## start server

- Set up PHP (installing/setting up global variables)
- Install [Composer](https://getcomposer.org/download/)
- Install [Symfony](https://symfony.com/download)

Run in project directory:

1. to get all packages and generate autoload files

```sh
composer install
```

2. to create DB instance

```sh
php bin/console doctrine:database:create
```

3. to check what entities are going to be imported to DB

```sh
php bin/console doctrine:schema:update --dump-sql
```

4. to update DB entities

```sh
php bin/console doctrine:schema:update --force
```

5. to prepopulate DB with fixtures

```sh
php bin/console doctrine:fixtures:load
```

6. to start server

```sh
symfony server:start
```
