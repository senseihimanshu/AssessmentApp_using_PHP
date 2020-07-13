<?php
class Evaluates extends Controller{
    protected function Index(){
        $viewmodel = new EvaluateModel();
        $this->returnView($viewmodel->Index(), true);
    }

    protected function add(){
        $viewmodel = new EvaluateModel();
        $this->returnView($viewmodel->add(), true);
    }

    protected function getQuestion($id){
        $viewmodel = new EvaluateModel();
        $this->returnView($viewmodel->get($id), true);
    }
}