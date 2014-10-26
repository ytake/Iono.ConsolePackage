<?php
namespace App\Console;

use Iono\Console\Application;
use App\Repositories\RepositoryInterface;

/**
 * Class SampleConsole
 * @package App\Console
 */
class SampleConsole extends Application
{

    use Application\Traits\Component;

    /** @var string  */
    protected $command = 'sample';

    /** @var  string */
    protected $description = "sample application";

    /** @var RepositoryInterface  */
    protected $repository;

    /**
     * construct injection sample
     * @param RepositoryInterface $repository
     * @see App\Providers\ApplicationProvider
     */
    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $array
     * @return mixed|void
     */
    public function action(array $array)
    {
        // use configure component
        $config = $this->config->get('config');
        // use binding
        print_r($this->repository->all());

        print_r($this->repository->getDbComponent());
    }
}