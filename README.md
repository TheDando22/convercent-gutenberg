# Convercent corporate site compatible with Gutenberg Blocks
The Convercent corporate site is built on WordPress and hosted on WP Engine. Development is expected to happen locally and this readme will walk you through setting up the project on your local machine.

## Setting up your local environment
You’ll need to make sure you have the following supporting pieces of software installed in order to get your local environment set up. 

* Node
* Local app
* Git
* WordPress CLI

Once you have ensured that you have the above installed, you can skip over the _Supporting software_ section below.

### Supporting software

#### Node
To install node follow the link for your os below:

[How to Install Node.js® and NPM on Windows - Treehouse Blog](http://blog.teamtreehouse.com/install-node-js-npm-windows)

[How to Install Node.js and NPM on a Mac](http://blog.teamtreehouse.com/install-node-js-npm-mac)

[How to Install Node.js and NPM on Linux - Treehouse Blog](http://blog.teamtreehouse.com/install-node-js-npm-linux)

#### Local app
The Local app can automate virtual setup for local environments. It handles pushing and pulling, making it very easy to get your files on and off the remote server. Local is compatible with WP Engine, and will use your crudentials to get set up correctly. Download and install the Local app and follow instructions to set up your local environment using the links below:

[Local](https://localwp.com/?download)

[Vagrant](https://www.vagrantup.com/)

#### Git
Download and install git using the link below:

[Git - Installing Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)

#### WordPress CLI 
Download and install the WordPress CLI (Command Line Interface) using the link below:

[WP CLI - Installing](http://wp-cli.org/#installing)

### Getting started guide  
To start pushing and pulling to the remote server with git, follow the istructions in the link below:

[Getting Started Guide](https://wpengine.com/support/git/)

### Clone this repo
Remove `index.php` from `public` and then clone the repo into the `public` directory.

```
rm public/index.php
git clone git@github.com:Convercent/corporate-website.git public
```


```
If you followed instructions in the getting start guide, then all done - happy developing :)
```


### Add uploads folder from site backup
Copy the uploads folder (replacing the existing uploads folder) into `wp-content`.


## Why are certain things missing from this repo?
There are multiple schools of thought regarding which files and directory in a WordPress project should be tracked in git. For this project we are omitting, in addition to the typically ignored files and directories, `wp-admin` and `wp-content/uploads`.

Because WP Engine automatically updates WordPress, it makes sense to ignore WP core files from the git repository. As for the media files (which are stored in `wp-content/uploads`) these are better handled separate from code pushes because they will (for the most part) be added, deleted, and managed in the CMS (likely in production).

