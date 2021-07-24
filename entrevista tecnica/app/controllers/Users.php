<?php
class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function register()
    {
        $data = [
            'username' => '',
            'email' => '',
            'password' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
            ];

            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            if ($this->userModel->register($data)) {
                header('location: ' . URLROOT . '/users/login');
            } else {
                die('Something went wrong.');
            }
        }

        $this->view('users/register', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
            ];


            $loggedInUser = $this->userModel->login($data['username'], $data['password']);

            if ($loggedInUser) {
                $this->createUserSession($loggedInUser);
            } else {
                $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                $this->view('users/login', $data);
            }
        } else {
            $data = [
                'username' => '',
                'password' => '',
            ];
        }
        $this->view('users/login', $data);
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
        header('location:' . URLROOT . '/pages/index');
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . '/users/login');
    }
}