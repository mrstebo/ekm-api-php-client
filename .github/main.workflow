workflow "Run tests" {
  on = "push"
  resolves = ["Run PHPUnit"]
}

action "Install dependencies" {
  uses = "actions/docker/cli@8cdf801b322af5f369e00d85e9cf3a7122f49108"
  runs = "docker run -it --rm -v $PWD:/app -w /app composer composer install"
}

action "Run PHPUnit" {
  uses = "actions/docker/cli@8cdf801b322af5f369e00d85e9cf3a7122f49108"
  needs = ["Install dependencies"]
  runs = "docker run -it --rm -v $PWD:/app -w /app php:7.2 vendor/bin/phpunit"
}
