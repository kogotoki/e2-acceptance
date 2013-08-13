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

``` bash
curl -s http://getcomposer.org/installer | php
php composer.phar install --no-interaction
mysql -u your_mysql_user -p -e 'create database e2_acceptance;'
echo "modules: {config: {Db: {user: 'your_mysql_user', password: 'your_password'}}}" > codeception.yml
./run-server &

vendor/bin/codecept run
```

Features to test
----------------

- posts
    - write post
        - [x] set title and text
        - insert videos, pictures, galleries and audio files to text
        - set tags
        - set url
            - save history of urls and keep redirects
        - set publish date
        - unpublish post when publish date in future
        - attach files and pictures
    - [x] publish post
    - edit post
    - [x] delete post
    - [x] show post page
    - highlight (select, mark) post as favourite / selected / starred
    - allow / disallow comments to post
- comments
    - write comment
        - subscribe to replies by email while writing comment
    - admin can
        - edit or delete comment
        - delete comment
        - highlight comment
- look for guests
    - latests posts on home page
    - pagination starting from home page
    - rss feed
    - search page
    - page with all tags
    - page with all posts
    - page with selected posts
    - page with hot posts
- admin actions
    - installation
    - sign in
    - sign out
    - view sign in sessions
    - clear sign in sessions
    - change blog title
    - change blog description
    - change author
    - change password
    - change database connection
    - change language
    - change theme
    - change 'posts per page'
    - show or not 'selected posts' block
    - show or not 'hot posts' block
    - enable / disable commenting
        - only for recent posts
        - change email address for notification