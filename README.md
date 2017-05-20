# Docker Image for Moodle 3.3

This image is based on ``php:apache``.

It's supposed to be used with docker-compose, with the provided ``docker-compose.yml`` file.
You'll probably want to pass the ``MOODLE_SERVER_URL`` environment variable to define the url your moodle instance will be accessed at, and proxy you apache/nginx/whatever to the 8080 port.

You will need to create a ``moodle_data`` dir writable by all :

```bash
	mkdir moodle_data
	sudo chmod 777 moodle_data
```

The data is saved in two volumes (pg_data and the moodle_data dir).

Finally, any custom configuration you'd need can be provided as ``custom_config.php``
