<?php
class Users extends Controller{
    protected function Index(){
        $viewmodel = new EvaluateModel();
        $this->returnView($viewmodel->Index(), true);
    }
}