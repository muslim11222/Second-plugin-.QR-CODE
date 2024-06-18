<?php

/**
 * Plugin name: New QR code
 * Description: This is my second plugin
 * Plugin url: http://qr code.com
 * Version: 0.0.1
 * Author: Muslim Khan
 * Author URL: http://Muslim Khan
 */

 class new_qr_code{
    public function __construct() {
          add_action('init', array($this, 'initialize'));
     }

     function initialize() {
          add_filter('the_content',[$this,'display_qr_code']);
     }

     function display_qr_code($content){
          $post_url = get_permalink();
          $qr_code_image = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=".$post_url;
          $content = $content."<p><img src='{$qr_code_image}'></p>";
          return $content;
          // return $content. "<P> URL: {$post_url}</P>";

     }
 }

 new new_qr_code();



 

// qr code ar link
//https://goqr.me/api/doc/
