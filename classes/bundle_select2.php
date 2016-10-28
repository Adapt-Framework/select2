<?php

namespace select2{
    
    /* Prevent Direct Access */
    defined('ADAPT_STARTED') or die;
    
    class bundle_select2 extends \adapt\bundle{
        
        public function __construct($data){
            parent::__construct('select2', $data);
        }
        
        public function boot(){
            if (parent::boot()){
                
                $this->dom->head->add(new adapt\html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => "/adapt/select2/select2-{$this->version}/static/css/select2.min.css")));
                $this->dom->head->add(new html_script(array('type' => 'text/javascript', 'src' => "/adapt/select2/select2-{$this->version}/static/js/select2.min.js")));
                $this->dom->head->add(
                    new html_script("\$(document).ready(function(){ \$('.view.select2').select2(); });", array('type' => 'text/javascript'))
                );
                
                return true;
            }
            
            return false;
        }
        
    }
    
    
}

?>