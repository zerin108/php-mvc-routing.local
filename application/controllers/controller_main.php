<?php
/**
 * Created by PhpStorm.
 * User: Lama
 * Date: 16.03.2016
 * Time: 17:33
 */
class Controller_Main extends Controller{

    function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php', array(
            'title'=>'Main Page'
        ));
    }
}