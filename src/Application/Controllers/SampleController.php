<?php
namespace App\Controllers;

use Comnect\Console\Controller;

/**
 * Class SampleController
 * @package App\Controllers
 */
class SampleController extends Controller
{

    /**
     * @Autowired("App\Repositories\SampleRepositoryInterface")
     */
    protected $sample;

	/**
	 * @param array $array
	 * @return mixed|void
	 */
	public function perform(array $array)
	{
        // perform
	}
}