# Drupal 8 training
This is a hands-on training workshop by [Mediacurrent](https://mediacurrent.com).

## Requirements
Before proceeding, install Docker and DDev.

* **Docker**:  Install Docker on [macOS](https://ddev.readthedocs.io/en/stable/users/docker_installation/) or [Windows 10](https://ddev.readthedocs.io/en/stable/users/docker_installation/#windows-installation-docker-desktop-for-windows)
* **DDev**: Install DDev on [macOS](https://ddev.readthedocs.io/en/stable/#homebrewlinuxbrew-macoslinux) or [Windows 10](https://ddev.readthedocs.io/en/stable/#installation-or-upgrade-windows)

## 1. Setup your environment
After installing Docker and DDev, setup your project by following these steps.

* Using the command line, navigate to the directory where you would like to setup your project. This can be any directory such as `Sites`, `My Documents`, etc.

* Clone the repo by running:
```
git clone git@github.com:mariohernandez/drupal_training_ddev.git
```

* Change into the newly created directory by the repo command above (`drupal_training_ddev`).  If you changed this directory name, use the name you specified.
```
cd drupal_trianing_ddev
```

* Then run:
```
ddev start
```
This will install Drupal and import the database which includes all the cofiguration needed for the training.  It will also enable the required modules.

## 2. Working with the training_theme theme
DDev already provides all the tools needed for compiling JSON, Twig, Sass, and JavaScript code.  This means you don't need install any of the Front-end tools needed by the theme.

* While in `drupal_trianing_ddev`, change directory to the `training_theme`:
```
cd themes/custom/training_theme
```

* Install all theme dependencies:
```
ddev nvm-use && ddev npm-install
```
_This sets your project to use the Node version specified in `.nvmrc`_.


```
ddev build
```
_The first two commands above only need to be ran one time.  The `npm run build` will be used to compile all your theme's code_.

Another commands we will use while working in our theme will be:
```
ddev watch
```
_This will watch for any changes your make to Sass, Twig, JSON or JavaScript and it will automatically compile them_.

## 3. Login to your Drupal site
* In your browser open http://d8.ddev.site
* Username: `admin`, password: `admin`

If you wish to generate a one-time login token type the following in yor command line:
```
ddev . drush uli
```
_This will provide a unique URL that by clicking on or pasting in your browser will automatically log you in_.

## What's included
This project includes the following:
* Latest Drupal 8
* Drupal 8 theme, `training_theme`
  * Pattern Lab
  * Gulp
  * NVM, NodeJS, and NPM
* Twig debugging enabled
* Contrib modules:
  * [Components](https://www.drupal.org/project/components)
  * [Paragraphs](https://www.drupal.org/project/paragraphs)
  * [Devel](https://www.drupal.org/project/devel)
  * [Admin toolbar](https://www.drupal.org/project/admin_toolbar)
  * [Twig field value](https://www.drupal.org/project/twig_field_value)
  * [Views reference field](https://www.drupal.org/project/viewsreference)
  * [Focal point](https://www.drupal.org/project/focal_point)
* Core modules
  * Media
  * Media library
  * Responsive image
* Custom content types, paragraph types, and views
