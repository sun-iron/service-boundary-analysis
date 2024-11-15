# Dynamic Service Boundary analysis with Backtrace
This source code is data from a research paper by sunpark (sunpark@soongsil.ac.kr) titled "Automation of Domain-Based Microservice Transition from Monolithic Systems through Service Call Analysis."

## 1. What is Backtrace
A 'Backtrace' provides call stack information when an error occurs during code execution, allowing developers to debug issues more easily.

> In computing, a stack trace (also called stack backtrace[1] or stack traceback[2]) is a report of the active stack frames at a certain point in time during the execution of a program. (`wikipedia.com` https://en.wikipedia.org/wiki/Stack_trace)

## 2. How to use at PHP
The source code in this document was written and tested using the PHP programming language. When call the `debug_backtrace()` function in PHP, it returns stack information as an array.

> debug_backtrace (`php.net` https://www.php.net/manual/en/function.debug-backtrace.php)

## 3. Pre-installed
* LEMP (Linux, NginX, Mysql, PHP)
  * OS : Ubuntu 22.04 TLS
  * Web Server : NginX 1.18.0
  * WAS : PHP 8.1.2-1ubuntu2.19
  * DBMS : 10.6.18-MariaDB-0ubuntu0.22.04.1
  > LEMP stack Install Guide: How To Install Linux, Nginx, MySQL, PHP (LEMP stack) on Ubuntu (https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-ubuntu)
* CMS (Content Management System)
  * CMS : Wordpress
  * Plug-in : query-monitor (https://github.com/johnbillion/query-monitor)

> WordPress Install Guide: How to Install WordPress (https://developer.wordpress.org/advanced-administration/before-install/howto-install/)

## 4. PHP Backtrace Sample

## 5. Change wpdb class



  
