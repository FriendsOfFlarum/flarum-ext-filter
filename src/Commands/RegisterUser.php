<?php 

namespace issyrocks12\filter\Commands;

use Flarum\Core\User;

class RegisterUser
{
    public $actor;
    public $data;
    public function __construct(User $actor, array $data)
    {
        $this->actor = $actor;
        $this->data = $data;
    }
}