<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hospital>
 */
class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        // $table->string("name");
        // $table->string("mobile");
        // $table->longText("disease");
        // $table->longText("medicine");
        // $table->string("slug");
        $name=fake()->name();
        $slug=$name."-".rand();

        return [
            "name"=>$name,
            "mobile"=>fake()->phoneNumber,
            "disease"=>fake()->sentences(3,true),
            "medicine"=>fake()->sentences(5,true),
            "slug"=>str::slug($slug)
        ];
    }
}
