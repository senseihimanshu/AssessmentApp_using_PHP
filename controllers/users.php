<?php
class Users extends Controller{
    protected function Index(){
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->Index(), true);
    }

    protected function add(){
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->add(), true);
    }
} 