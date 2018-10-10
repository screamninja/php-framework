<?php

namespace PFW\Models;

use PFW\Core\Model;

/**
 * Class Register
 * @package PFW\Models
 */
class Register extends Model
{
    /**
     * @var array
     */
    private $data;

    /**
     * Register constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param Auth $auth
     * @param User $user
     * @return array
     */
    public function signUp(Auth $auth, User $user): array
    {
        $notice = $auth->checkData();
        $user_isset = $user->issetUser($this->data);
        if (empty($notice)) {
            if ($user_isset) {
                $notice['error'] = 'An account already exists with this login or email address.';
            } elseif (!$user->addUser($this->data)) {
                $notice['error'] = 'User didn\'t to add';
            } else {
                $notice['user'] = $this->data['login'];
                $_SESSION['logged_user'] = $this->data['login'];
            }
        }
        return $notice;
    }
}
