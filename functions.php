<?php 

function truth_oracle_files() {
  wp_enqueue_style('truth_oracle_styles', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'truth_oracle_files');


?>


