# TLDR ; Create an API using CakePHP

## Introduction

### API Development Requirement
* CakePHP - version 4
* PHP - version 7 & above

---

###### Getting Started
Lets go through the project structure in this application by getting to know the location of route, controller and how it works.

### Location and its functionality
1. Route
   > In this file where we define route or url for client to call. More details, please view on the code level in routes.php in line 81 - line 94.


   * Location - config/routes.php

2. Controller
   > In this file, where we define our logic and return the data. Since we are using `Laravel Action Classes Concept`, all the logic define in action. More details can view in `CardsController.php`.

   >`CardsController.php` is extends class from `src/Controller/ApiController.php`. To make more clean code, we create `success()` method in `ApiController.php` just to return a data in fix structure.

   * Location - src/Controller

3. Action Class
   > In Laravel, there is a call Action Classes, where one action has one class. Why use Action Class? just because to make it as Single Responsibility Principle. This kind of method make it more simpler, cleaner and easily scalable. More details can view in `GetCardList.php`.

   > This action class has their own interface also known as contract. In order to able to use Contract in Controller, we need to register and bind the Contract with the Action Class by defining in `src/Application.php`. More details you can view in `src/Traits/BindService.php`

   * Location - src/Actions/Card

4. Migration
   > In CakePHP, we can simply create a table we use migration file. There is a command to generate a migration file, eg: `bin/cake bake migration CreateCards`. By using migration file, it easy for other team members to have a same table structure that we have and see the history of table structure.

   * Location - config/Migrations

5. Seeder
   > As a developer, we do need have a data for a clearer vision what kind data that we present to the client. Thanks to seeder, instead of create manually in table, we can create a seeder class, just to automate insert multiple dummy data.

   * Location - config/Seeds
---

###### Installation

To run this project, you need to run several command.

1. `composer install` - To install all the packages that require for this project.
2. `bin/cake migrate` - To migrate the table into database.
3. `php vendor/bin/phinx seed:run -s CardsSeed` - To seed a data into table.
4. `bin/cake server` - To run the project.

