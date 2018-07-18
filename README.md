# IntrospectData Wordpress Dev Setup

## Prerequisites

* [Docker](https://docs.docker.com/install/)
* [Docker-Compose](https://docs.docker.com/compose/install/)
* an editor of your choosing...
    * we like [Atom](https:///atom.io)

## How to use this

* Download or clone this repo to your local machine... however you want to do that.
* Now figure out whether you're working on plugins, themes, both or you just want to play with your existing wp-content directory. Here are a few options:
    * Get a copy of our wordpress directory and just put it in the `wp-root` directory in this project. Update the `docker-compose.yml` file's volume mounts to only mount that directory (instead of plugins and themes directly)
        * copy the `wp-config-sample.php` file from the root of this directory to `wp-root/wp-config-sample.php`
        * give everyone read rights to this directory - mostly because the user inside of docker will need access and it's fairly easy to run: `chmod -R +x wp-root/`
* Then get a fresh copy of your database dump and place it in the `data` directory
* Now it's all down to just running some commands:

```bash
docker-compose up -d
```

What does it do:

* wordpress is accessible at http://localhost:8080
* admin user is `local-admin` with password `P@ssword!`

## Dev Setup

The above process gets you set up for running the site locally... but what about actually doing plugin or theme development? No sweat--here's what you do:

* After you've completed the setup above, but before you run `docker-compose`, replace the downloaded directories for your themes and/or plugins with cloned repos from our source control setup.  
* For example--if you're doing development on our custom `themename` theme:

```bash
rm -rf wp-root/wp-content/themes/themename
rm -rf wp-root/wp-content/themes/themename-child
git clone git@github.com:IntrospectData/themename.git wp-root/wp-content/themes/themename
git clone git@github.com:IntrospectData/themename-child.git wp-root/wp-content/themes/themename-child
sudo chmod -R +r wp-root
docker-compose up -d
```

that's it!
