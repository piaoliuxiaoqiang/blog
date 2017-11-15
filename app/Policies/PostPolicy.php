<?php

namespace App\Policies;

use App\User;
use APP\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //自定义更新权限
    public function update(User $user,Post $post){
        return $user->id==$post->user_id;
    }
    //自定义删除权限
    public function delete(User $user,Post $post){
        return $user->id==$post->user_id;
    }
}
