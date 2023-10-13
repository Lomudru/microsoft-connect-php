
# Microsoft Connect

A way to login to your website with the api microsoft graph

## Create a account on microsoft azure

- Go to [Azure](https://portal.azure.com/) and create a account
- Select App registration
- New inscription
- Create your app


## Installation

Install my project with composer

```bash
  composer init
  composer require adnanhussainturki/microsoft-api-php
```

the change the signin.php

```
    $tenant = "common";
    $client_id = "Your client ID";
    $client_secret = "Your Client Secret";
    $callback = "http://localhost/microsoft-connect/callback.php?who=microsoft"; // redirection
    $scopes = ["User.Read"];
```
