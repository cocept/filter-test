Filter Test
=================
This is a demo project to showcase the usage of Cocept's filter bundle found [here](https://packagist.org/packages/cocept/filter).

# Setup

 - composer install
 - php app/console doctrine:schema:update --force
 - php app/console doctrine:fixtures:load
 - php app/console server:run

# Usage
Once you have the site running, try visiting the following URLs to see the filter in action:
 - http://localhost:8000/post/?filter_name=How+to+create+a+symfony+app
 - http://localhost:8000/post/?filter_name=How+to+create+a+symfony+app&filter_category=5
 - http://localhost:8000/post/?filter_category=5&operator_category=neq

