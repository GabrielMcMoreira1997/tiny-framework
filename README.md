![logo-no-background](https://github.com/Venzke/tiny-framework/assets/67403605/dab948a5-57cc-441f-9f71-b7f7d95a0b64)
# Tiny Framework
<table>
<tr>
<td>
  Tiny is a simple framework. Developed with the intention of simplifying the development of small projects. 
</td>
</tr>
</table>

## Usage
### Routes

#### How i create a new route?
Make a file .php in `PROJECT >> ROUTES`. Inside this file, insert code route. Only GET/POST available.
```php
  //Default route for news
  $this->get('news', function($params){
    echo "All news here";
  });

  //Specific route for news
  $this->get('news/{id}', function($params){
    echo "News: {$param['id']}";
  });
```
#### Rendering a view
Make a file .php in `PROJECT >> TEMPLATES` with your front-end. In `PROJECT >> ROUTES` make a new file .php. After, define a new route and call the method `render` of template class.
```php
$this->get('news', function($params){
    $tpl = $this->core->loadModule('template');
    $db = $this->core->loadModule('database');

    $sql = $db->query('SELECT * FROM news');
    $array = $sql->fetchAll();
    $tpl->render('news');
});
```
#### Database config
In your project folder, edit the `config.php` and your datas in $db array.
```php
  $config = array(
    'db' => array(
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'dbname' => 'db_name'
    )
);
```


### Development
Want to contribute? Great!

To fix a bug or enhance an existing module, follow these steps:

- Fork the repo
- Create a new branch (`git checkout -b improve-feature`)
- Make the appropriate changes in the files
- Add changes to reflect the changes made
- Commit your changes (`git commit -am 'Improve feature'`)
- Push to the branch (`git push origin improve-feature`)
- Create a Pull Request 

### Bug / Feature Request

If you'd like to request a new function, feel free to do so by opening an issue [here](https://github.com/Venzke/tiny-framework/issues/new). Please include sample queries and their corresponding results.


## Built with 

- [PHP](https://www.php.net/) Only PHP, so far.


## To-do (Improves)
- Add in packagist for download by composer.
- <strike>Add template engine</strike>. (Twig)
- add Monolog for logs.
- Group routes

## Team
Devs: Gabriel Moreira - https://github.com/Venzke
