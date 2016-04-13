# Laravel-Basic-Level-


Basic Laravel 5.1 project scaffolding with Gulp, Bower, LESS, & Bootstrap.

Sample Laravel Task List

1)Registration 
2)Login
3)Role Creation
4)Role Assign
5)Product Creation
6)Basic Product Search
7)Product Rating
8)Newsletter



Overview

This project helps speed up the process of setting up a simple Laravel 5.1 project. It configures Bower, Gulp, and Bootstrap automatically in a maintainable way. It strives to keep vendor files seperate from project files and uses programming best practices where possible.

Project Tree

There are a few minor alterations from a standard Laravel installation. Most importantly, we keep our Bower components outside of our project and in /vendor/bower_components. They will be imported and overriden with the help of LESS and Gulp, ensuring that we won't have to make any drastic code changes if we want to update a component.

.
├── resources
|   └── assets
|       ├── js
|       |   └── application.js
|       └── less
|           ├── application.less
|           ├── bootstrap.less
|           └── variables.less
|
├── public
|   └── assets
|       ├── css
|       ├── fonts
|       ├── images
|       └── js
|
└── vendor
    └── bower_components

