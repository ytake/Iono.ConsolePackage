<?php
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