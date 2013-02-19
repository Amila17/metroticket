<?php
class Model_Index extends RedBean
{
	public function addIndex()
	{
		$post = R::dispense('post');
		$post->text = 'Hello World';
		
		$id = R::store($post);
	}
}