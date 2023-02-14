<?php

namespace Core;

session_start();

class Controller
{
    protected $layout = 'default';
    protected $title = '';
    
    protected function render($view, $data = []) {
        
        return new Page($this->layout, $this->title, $view, $data);
        
    }
}
