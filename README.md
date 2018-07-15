
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
* Then get a fresh copy of your database dump and place it in the `data` directory
* Now it's all down to just running some commands:

```bash
docker-compose up -d
```

What does it do:

* wordpress is accessible at http://localhost:8080
* admin user is `local-admin` with password `P@ssword!`
