[![Travis build status](https://travis-ci.org/sQu4rks/koalification.png?branch=master)](https://travis-ci.org/sQu4rks/koalification)
# koalification
koalifying php for a faster web

What is koalification
---------------------

Koalification is a simple php library set to provide abstraction for php-written web applications. Just to
clearify, this is no let-the-black-box-do-some-vuduu-stuff framework. You still keep full controlle of
your source code. That is, why we generate code rather than doing the stuff on abstract layers. 

We currently provide:

* A simple Database Abstraction that maps your table to objects and provides higher-level functions to access your data
* A simple Template Engine that enables you to capsulate your content and data
* A simple but secure user authentification model to spin up a web app with backend quickly
* A simple system to support multi-language sites

You see the tendency here ?

First steps
-----------

1. Clone down the code
3. Run the manager.php script with init option. This will let you choose the database backend, generate SQL and classes for you
4. Develop your app

Too fast ? See the wiki for a step-by-step tutorial.

Origin
------

This project was developed as a part of the CS261 - Web Data Management course at university of Basel. For a working application see proEndura. 

Developed with :heart: in Basel, CH - by Sein Coray([@seincoray](https://github.com/seincoray)) and Marcel Neidinger([@sQu4rks](https://github.com/sQu4rks))
