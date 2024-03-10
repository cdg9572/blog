<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    // 다른 메서드들과 함께 클래스 내에 create 메서드 추가
    public function create(array $attributes = [])
    {
        return [
            //
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraphs(30),
            'user_id' => User::factory()
        ];
    }
}