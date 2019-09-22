<?php

/**
 * 
 */
class DatabaseForm {
	public $processing_response;

	public function __construct(){
		
	}
	
	public function initialDB($post){
		if(isset($post['delete_order'])){
			$this->deleteorder($post['delete_order']);
		}

		if(isset($post['create_order'])){
			$this->validation($post['user_name'], $post['user_phone'], $post['user_text']);
			
		}

	}

	public function validation($name, $phone, $user_text){
		if (!$name == '') {
			if(!$phone == ''){
				if(!$user_text == ''){
					$this->createorder($name, $phone, $user_text);
					$GLOBALS["processing_response"] = "Запрос отправлен!";
					header('Location: '. get_permalink());
					return;
				}
				$GLOBALS["processing_response"] = "Заполните текстовую форму!";
				return;
			}
			$GLOBALS["processing_response"] = "Введите номер телефона!";
			return;
		}
		$GLOBALS["processing_response"] = "Введите имя!";
	}

	public function createorder($name, $phone, $user_text){
		global $wpdb;
		$wpdb->query( "INSERT INTO form_feedback (name, number_phone, text) VALUES ( '".$name."', '".$phone."', '".$user_text."' )");
	}

	public function deleteorder($id){
		global $wpdb;

		$wpdb->query("DELETE FROM form_feedback WHERE ID = $id" );
	}

	public function getOrders(){
		global $wpdb;

	    return $wpdb->get_results("
	      SELECT * 
	      FROM form_feedback
	      ", ARRAY_A
	    );
	}
}