<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    /** @test */
    public function a_post_has_a_title()
    {
        $post = new Post(['title' => 'Sample Post', 'content' => 'This is a sample post']);
        
        $this->assertEquals('Sample Post', $post->title);
    }
    
    // Add more tests as needed
}
