<?php 

class Home extends Controller
{
    public function index($user = null)
    {
        $userModel = $this->model('User');

        if($user)
        {
            $user  = $userModel->get($user);
            
        }

        // var_dump($user); // object(stdClass)#6 (1) { ["username"]=> string(4) "alex" }

        $this->view('templates/header');

        $this -> view('/index', [
            'user' => $user
        ]);

        $this -> view('templates/footer');
    }
}