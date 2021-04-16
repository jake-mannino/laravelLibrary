<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory {
  
  protected $model = Book::class;
  

  public function definition()
  {
    return [
      'title' => $this->faker->realText($this->faker->numberBetween(0,20)),
      'isbn' => $this->faker->isbn13,
      'excerpt' => $this->faker->text,
      'pages' => $this->faker->numberBetween(2, 50),
      'cost' => $this->faker->randomFloat(2, 10, 50),
      'value' => $this->faker->randomFloat(2, 10, 50),
      'reading_difficulty' => $this->faker->numberBetween(1,10),
      'released' => $this->faker->datetime(),
      'current_conditon' => 1,
      'status' => 1,
      
      
    ];
  }
  
}
