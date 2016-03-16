<?php
/**
 * Created by PhpStorm.
 * User: Lama
 * Date: 16.03.2016
 * Time: 14:52
 */

class View{
    /**
     * @param $content_view - content of site view;
     * @param $template_view - main view/template;
     * @param  null $data - array included all content elements. Usually generated in Model
     * */
    function generate($content_view, $template_view, $data = null){
        #extract all array elements to variables with names as indexes and values as array element value
        if(is_array($data)) extract($data);

        include "application/views/" . $template_view;
    }
}