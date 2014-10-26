iono/console
========
php console application package(beta)

#Installation
**require php >= 5.4**
```bash
$ composer create-project iono/console your-projectName --prefer-dist
```

#Usage
##Ioc Container
[illuminate/container](https://github.com/illuminate/container)

###auto provider
**use @Provide annotation**
```php
namespace App\Providers;

use Iono\Console\Application\Provider;
use Iono\Console\Application\Annotation\Provide;

/**
 * Class ApplicationProvider
 * @package App\Console\Providers
 * @Provide
 */
class ApplicationProvider extends Provider
{

    /**
     * register application container binding
     * @return void
     */
    public function register()
    {
        $this->container->bind("App\Repositories\RepositoryInterface", "App\Repositories\User");
    }

}
```
##component trait
default component
```php
// database component
'db' => "\\Iono\\Console\\Application\\Component\\DataStorage\\Db",
// cache component
'cache' => "\\Iono\\Console\\Application\\Component\\Cache\\Factory",
// redis component
'redis' => "\\Iono\\Console\\Application\\Component\\DataStorage\\Redis",
```

###usage your class
```php
namespace App\Repositories;

use Iono\Console\Application\Traits\Component;

/**
 * Class User
 * @package App\Repositories
 */
class User
{

    use Component;

    /**
     * @return mixed
     */
    public function getDbComponent()
    {
        // use db component
        return $this->db->connection();
    }
} 

```
component auto inject

##perform console
###console action 
basic
```bash
$ php iono console:action sample
```
arguments
```bash
$ php iono console:action sample?value=1$key=2
```
###action command list
```bash
$ php iono console:list
```
show command list(command name, class name, file path, description)

and more
