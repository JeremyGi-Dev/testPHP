<?php

include '../../config/routing.php';

class IndexController extends GlobalController {

    public function IndexAction(){

        $this->render_view('app/view/index.php');

    }
}


