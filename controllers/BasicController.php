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


  class BasicController extends Zend_Controller_Action
  {


      public function init()
      {

      }

      public function page1Action()
      {
        $this->getScript('page1.phtml'); // removed s
      }

      public function page2Action()
      {
        $this->getScript('page2.phtml'); // removed s
      }

      private function getScript($s)
      {
        //header("Content-Type: text/html;charset=utf-8");
        //headers will be sent in the phtml file no need to do it here
        
        require_once APP_PATH . SLASH . 'views' . SLASH . $s;
      }

  }