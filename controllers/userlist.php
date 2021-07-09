<?php

class Userlist extends Controller
{
    protected function Index()
    {
        $viewmodel = new UserListModel();
        $this->returnView($viewmodel->Index(), true);
    }
}