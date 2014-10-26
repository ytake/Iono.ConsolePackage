<?php
namespace App\Repositories;

use Iono\Console\Application\Traits\Component;

/**
 * Class User
 * @package App\Repositories
 */
class User implements RepositoryInterface
{

    use Component;

    /** @var array */
    protected $users = [
        [
            'user_id' => 1,
            'user_name' => 'yuuki.takezawa'
        ]
    ];

    /**
     * @return array
     */
    public function all()
    {
        return $this->users;
    }

    /**
     * @return mixed
     */
    public function getDbComponent()
    {
        // use db component
        return $this->db->connection();
    }
} 