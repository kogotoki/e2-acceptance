e2-acceptance
=============

Acceptance test suite for popular blog engine e2 (http://blogengine.ru/).

Problem
-------

E2 engine is cool, but not open source. So lets create open source clone of e2 :-)
And the first step is creating full acceptance test suite. Tests should cover
e2 features as full as possible.

Disclaimer
----------

First of all, this is a training project. I had no experience with acceptance testing,
so I would like to learn some with this.

Install
-------

To start acceptance tests follow `.travis.yml`:

```bash
curl -s http://getcomposer.org/installer | php
php composer.phar install --no-interaction
mysql -u your_mysql_user -p -e 'create database e2_acceptance;'
echo "modules: {config: {Db: {user: 'your_mysql_user', password: 'your_password'}}}" > codeception.yml
./run-server &

vendor/bin/codecept run
```
