<div class="processing_response_div">
<?php 
if(!empty($GLOBALS["processing_response"])){
?>
	<p class="processing_response"><? echo $GLOBALS["processing_response"];?></p>
<?
} 
?>
	<form action="<?php get_permalink();?>" method="post">
		<input type="hidden" name="create_order"><br>
		<label>Имя</label><br>
		<input type="text" name="user_name"><br>
		<label>Номер телефона</label><br>
		<input type="text" name="user_phone"><br>
		<label>Детали заказа (например, "изготовление батареи")</label><br>
		<input type="text" name="user_text"><br>
		<input type="submit" name="submit" value="Отправить"><br>
		
	</form>
</div><br>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
