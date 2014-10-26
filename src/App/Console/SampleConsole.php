<?php
namespace App\Console;

use Iono\Console\Application;

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

    public function __construct()
    {

    }

    /**
     * @param array $array
     * @return mixed|void
     */
    public function action(array $array)
    {
        // use configure component
        $config = $this->config->get('config');
        // use db component
        $connection = $this->db->connection();

    }
}