<?php
class Advertisementlist extends Controller{
    protected function Index(){
        $viewmodel = new AdvertisementListModel();
        $this->returnView($viewmodel->Index(), true);
    }
}