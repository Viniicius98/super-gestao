<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiteContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'telefone' => $this->faker->tollFreephoneNumber(),
            'email' => $this->faker->unique()->email(),
            'motivo_contatos_id' => $this->faker->numberBetween(1, 3),
            'mensagem' => $this->faker->text(200),
        ];
    }
}
