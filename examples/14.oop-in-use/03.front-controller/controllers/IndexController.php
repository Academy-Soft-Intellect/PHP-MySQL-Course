<?php
class IndexController{
    public function index(){
        echo "<div>";
        echo "IndexController->index <br />";
        echo "<a href='?controller=contact&action=form'>Contact -> form</a>";
        echo "</div>";
    }
}