<?

require_once 'initialize.php';

$args = array(
	'where' => "WHERE id='". $pageURL . "'",
);

$post = new Query( $args );

?>


<div class="single">

<? echo View::formatSingle( $post ); ?>

</div></div>
 <?php
 require('footer.php');
