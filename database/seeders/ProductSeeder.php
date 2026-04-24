<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'nome' => 'Rosa Vermelha Unidade',
                'fornecedor' => 'Flores do Vale',
                'descricao' => 'Corte Natural',
                'categoria' => 'Flores Naturais',
                'quantidade' => 30,
                'estoque_minimo' => 10,
                'preco' => 5.50, 
            ],
            [
                'nome' => 'Orquídea Phalaenopsis',
                'fornecedor' => 'Jardim Real',
                'descricao' => 'Vaso Médio',
                'categoria' => 'Plantas Ornamentais',
                'quantidade' => 5,
                'estoque_minimo' => 3,
                'preco' => 45.00,
            ],
            [
                'nome' => 'Vaso de Cerâmica Branco',
                'fornecedor' => 'Casa Verde',
                'descricao' => 'Tamanho Médio',
                'categoria' => 'Vasos e Cachepôs',
                'quantidade' => 0,
                'estoque_minimo' => 4,
                'preco' => 25.90,
            ],
            [
                'nome' => 'Buquê de Girassóis',
                'fornecedor' => 'Floratta',
                'descricao' => 'Arranjo Simples',
                'categoria' => 'Flores Naturais',
                'quantidade' => 8,
                'estoque_minimo' => 5,
                'preco' => 60.00,
            ],
            [
                'nome' => 'Adubo Orgânico 1kg',
                'fornecedor' => 'Terra Forte',
                'descricao' => 'Granulado',
                'categoria' => 'Adubos e Insumos',
                'quantidade' => 4,
                'estoque_minimo' => 4,
                'preco' => 15.00,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
