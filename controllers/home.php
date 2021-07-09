<?php
class Home extends Controller{
    protected function Index(){
        $viewmodel = new IndexModel();
        $this->returnView($viewmodel->Index(), true);
    }
}