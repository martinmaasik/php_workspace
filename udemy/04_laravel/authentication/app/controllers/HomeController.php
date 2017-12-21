<?php

class HomeController extends BaseController {
	public function home() {

		// $user = User::find(1);
		// echo '<pre>', print_r($user), '</pre>';
		// echo $user = User::find(1)->username;
		// Mail::send('emails.auth.test', array('name' => 'miki'), function($message) {
		// 	$message->to('martinmaasik123@gmail.com', 'Martin Maasik')->subject('Test email');
		// });

		return View::make('home');

	}
}
