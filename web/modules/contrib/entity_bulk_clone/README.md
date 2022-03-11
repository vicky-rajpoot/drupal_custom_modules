ENTITY BULK CLONE
-----------------

CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Recommended modules
 * Installation
 * Configuration

INTRODUCTION
------------

This module is used to do bulk clone of entity.
It will provide option to Bulk clone for entity node and drupalcommerce.

This will clone all fields including paragraphs fields
(https://www.drupal.org/project/paragraphs) of an entity `node` or `commerce`.

REQUIREMENTS
------------

These two modules are dependencies module for the entity bulk clone module.
  - Replicate (https://www.drupal.org/project/replicate)
  - Entity (https://www.drupal.org/project/entity)

To get the features of bulk clone for commerce product, need to install
the commerce modules.

- Install the commerce modules via composer (https://getcomposer.org/)

  ```
  composer require "drupal/commerce"

  ```

RECOMMENDED MODULES
-------------------

Markdown filter (https://www.drupal.org/project/markdown):
When enabled, display of the project's README.md help will be rendered
with markdown.

INSTALLATION
------------

Use [Composer](https://getcomposer.org/) to get entity bulk clone
(https://www.drupal.org/project/entity_bulk_clone) with all dependencies.

  ```
  composer require drupal/entity_bulk_clone

  ```

CONFIGURATION
-------------

This module does not require any configuration.
