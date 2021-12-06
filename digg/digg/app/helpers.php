<?php 

function get_footer($page = 'footer'){
  include "tpl/$page.php";
}

function get_header($page = 'header'){
  global $page_title;
  include "tpl/$page.php";
}