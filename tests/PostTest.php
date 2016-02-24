<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends TestCase
{
  use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testNewPost()
    {
      $this->visit('/posts/create')
      ->type('new post', 'title')
      ->type('text', 'body')
      ->press('Create Post')
      ->see('new post');
    }

    public function testPostDelete()
    {
      $post = new App\Post;
      $post->create(['title' => 'post', 'body' => 'text']);
      $this->visit('/posts/5')
           ->press('Delete')
           ->seePageIs('posts');
    }

    public function testPostValidation()
    {
      $this->visit('/posts/create')
           ->type('', 'title')
           ->type('', 'body')
           ->press('Create Post')
           ->seePageIs('/posts/create');
    }
}
