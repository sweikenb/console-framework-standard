# sweikenb/console-framework-standard

Template project for creating console base applications including `.phar` builds.

License: **MIT**

## Using this template for project creation

Create your new project by using the template repository:

```bash
composer create-project sweikenb/console-framework-standard ./my-project-dir
```

If you want to use the process manager functionality for process forking, please also install the pcntl library when you
are in your new projects root-directory:

```bash
cd ./my-project-dir
composer require sweikenb/pcntl
```

# Getting started

Please have a look at the
framework [documentation](https://github.com/sweikenb/console-framework/blob/main/docs/index.md) for more details.

## Bundle your application into a single file

Please note that you have to enable the phar-extension of PHP and also need to set this in your `php.ini`:

```ini
phar.readonly = 0
```

If you are using the suhosin extension, please also whitelist the phar extension:

```ini
suhosin.executor.include.whitelist = "phar"
```

## Create the executable

```bash
php bin/console core:compile "my-application.phar" --executable
```
