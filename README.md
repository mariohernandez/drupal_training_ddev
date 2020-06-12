# Drupal 8 Component-based Training
This is a hands-on training workshop by [Mediacurrent](https://mediacurrent.com).

## Requirements
Before proceeding, install Docker and DDev.

* **Docker**:  Install Docker on [macOS](https://ddev.readthedocs.io/en/stable/users/docker_installation/) or [Windows 10](https://ddev.readthedocs.io/en/stable/users/docker_installation/#windows-installation-docker-desktop-for-windows)
* **DDev**: Install DDev on [macOS](https://ddev.readthedocs.io/en/stable/#homebrewlinuxbrew-macoslinux) or [Windows 10](https://ddev.readthedocs.io/en/stable/#installation-or-upgrade-windows)

## 1. Setup your environment
After installing Docker and DDev, be sure Docker is up and running and follow the steps below.

* Using the command line tool of your choice, navigate to the directory where you would like to setup your project. This can be any directory in your computer, such as `Sites`, `My Documents`, etc.

* First clone the repo:
```
git clone git@github.com:mariohernandez/drupal_training_ddev.git
```

* Change into the newly created directory by the repo command above (`drupal_training_ddev`).  If you changed this directory name, use the name you specified.
```
cd drupal_training_ddev
```

* Then run:
```
ddev start
```
This will install Drupal and import the database which includes all the cofiguration needed for the training.  It will also enable the required modules.  This process could take a couple of minutes.

## 2. Working with the Drupal 8 theme
The theme name for this project is `training_theme`.  All documentation and exercises make reference of this theme name.  DDev already provides all the tools needed for compiling JSON, Twig, Sass, and JavaScript code.  This means you don't need install any of the Front-end tools in your local machine.

### 2.1 Installing the theme dependencies
The Drupal 8 theme is a Node-based theme which uses Pattern Lab, Gulp, Node Sass, and other node dependencies.

* Install the theme dependencies:
```
ddev nvm use && ddev npm install
```
_The first command sets your project to use the Node version specified in `.nvmrc`, and the second command installs al of node dependencies found in `package.json`.  You will only need to run these commands one time for the most part.  This could take a couple of minutes_.


### 2.2 Compiling your code
```
ddev npm run build
```
_This command will compile your entire theme codebase_.

### 2.3 Watching for changes (optional)
```
ddev npm run watch
```
_This command will compile your entire theme codebase and will stay running in the background watching for new changes.  Everytime you save new changes in your theme's code, it will compile them automatically_.

## 3. Login to your Drupal site
* In your browser open http://d8.ddev.site/user
* Username: `admin`, password: `admin`

If you wish to generate a one-time login token to automatically login as admin, run the following command:
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
