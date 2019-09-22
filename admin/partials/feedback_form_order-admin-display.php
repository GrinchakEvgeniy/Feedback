<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       plugin.com
 * @since      1.0.0
 *
 * @package    Feedback_form_order
 * @subpackage Feedback_form_order/admin/partials
 */
foreach ($data_feedback as $key) {

?>
	<div>
		
		<form action="<?php get_permalink();?>" method="post">
			<p><?php echo $key['name'].' | '.$key['number_phone'].' | '.$key['text']; ?></p>
			<input type="hidden" name="delete_order" value = "<? echo $key['id']?>" >
			<input type="submit" name="delete" value = "DELETE">
			 
			<hr>
		</form>
	</div>
<?php
}

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

