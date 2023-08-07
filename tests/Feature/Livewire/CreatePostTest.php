<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    /** @test */
    public function returns_403_when_creating_post()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200)
            ->call('createPost')
            ->assertStatus(403);
    }
}
