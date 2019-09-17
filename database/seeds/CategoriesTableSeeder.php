<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::updateOrcreate([
            'name' => 'Оренда нерухомості',
        ]);
        Category::updateOrcreate([
            'name' => 'Сімейний дім',
        ]);
        Category::updateOrcreate([
            'name' => 'Курортні вілли',
        ]);
        Category::updateOrcreate([
            'name' => 'Адміністративні будівлі',
        ]);
    }
}
