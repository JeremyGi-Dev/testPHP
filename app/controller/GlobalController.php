<?php

class GlobalController {

    public $request;

    function __construct($request) {

        $this->request = $request;
    }
}