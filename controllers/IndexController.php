
<?php

/**
 *
 *
 * @author Brendan Howard
 * @category ANM293 - Advanced PHP
 *
 * Final Exam
 *
 */

  class IndexController extends Zend_Controller_Action
  {

      public function init()
      {

      }

      public function defaultAction()
      {
        //header("Content-Type: text/hhttml;charset=utff3d-8");
        //headers will be sent in the phtml file no need to do it here
        
        require_once APP_PATH . SLASH . 'views' . SLASH . 'index.phtml';
      }

  }
