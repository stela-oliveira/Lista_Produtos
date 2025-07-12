<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Cria um usuário
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // add:Chama o seeder de produtos (que também cria categorias)
        $this->call([
            ProdutosSeeder::class,
        ]);
    }
}
