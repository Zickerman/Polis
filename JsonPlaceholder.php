<?php

class JsonPlaceholder {
	
	private array $posts;
	
	public function getAllPosts()
	{
		$ch = curl_init('https://jsonplaceholder.typicode.com/posts');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = json_decode(curl_exec($ch), true);
		curl_close($ch);
		
		$this->posts = $result;
		
		return $result;
	}
	
	public function getUserPosts(int $userId)
	{
		$userPosts = [];
		
		foreach ($this->posts as $id => $post) {
			if ($userId == $post['userId']) {
				$userPosts[$id] = $post;
			}
		}
		
		return $userPosts;
	}
	
	public function getAllUsers()
	{
		$ch = curl_init('https://jsonplaceholder.typicode.com/users');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = json_decode(curl_exec($ch), true);
		curl_close($ch);
		
		return $result;
	}
	
	public function getToDoTasks()
	{
		$ch = curl_init('https://jsonplaceholder.typicode.com/todos');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = json_decode(curl_exec($ch), true);
		curl_close($ch);

		return $result;
	}
	
	public function updateUser($id, $data)
	{
		$ch = curl_init('https://jsonplaceholder.typicode.com/posts/' . $id);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		
		return $result;
	}
	
}

$jsonPlaceholder = new JsonPlaceholder();

$posts = $jsonPlaceholder->getAllPosts();
$users = $jsonPlaceholder->getAllUsers();
$userPosts = $jsonPlaceholder->getUserPosts($_POST['user'] ?: 1 );


$userId = 1;
//for checking put method
//$data = array(
//	'id' => 1,
//	'title' => 'foo',
//	'body' => 'bar',
//	'userId' => $userId,
//);
//var_dump($jsonPlaceholder->updateUser($userId, $data));





