iono/console
========
php console application package(beta)

[![License](http://img.shields.io/packagist/l/iono/console-kernel.svg?style=flat)](https://packagist.org/packages/iono/console-kernel)
[![Latest Version](http://img.shields.io/packagist/v/iono/console-kernel.svg?style=flat)](https://packagist.org/packages/iono/console-kernel)
[![Total Downloads](http://img.shields.io/packagist/dt/iono/console-kernel.svg?style=flat)](https://packagist.org/packages/iono/console-kernel)
[![Dependency Status](https://www.versioneye.com/user/projects/544cdb179fc4d5b70e000037/badge.svg?style=flat)](https://www.versioneye.com/user/projects/544cdb179fc4d5b70e000037)
[![Scrutinizer Code Quality](http://img.shields.io/scrutinizer/g/ytake/Iono.ConsoleKernel.svg?style=flat)](https://scrutinizer-ci.com/g/ytake/Iono.ConsoleKernel/?branch=master)

#Installation
**require php >= 5.4**
```bash
$ composer create-project iono/console your-projectName dev-master --prefer-dist
```

#Usage
##Ioc Container
[illuminate/container](https://github.com/illuminate/container)

###auto provider
**use @Component annotation**
```php
namespace App\Providers;

use Iono\Console\Application\Provider;
use Iono\Console\Application\Annotation\Component;

/**
 * Class ApplicationProvider
 * @package App\Console\Providers
 * @Component
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
