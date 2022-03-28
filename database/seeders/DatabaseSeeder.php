<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Herfian',
            'username' => 'vermilian',
            'email' => 'iyanvermilian@gmail.com',
            'password' => bcrypt('123456')
        ]);

        // User::create([
        //     'name' => 'Kafri',
        //     'email' => 'kafri@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, culpa eveniet! Aliquam impedit nostrum exercitationem ipsam deleniti.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, culpa eveniet! Aliquam impedit nostrum exercitationem ipsam deleniti. Quam, rem corrupti fuga fugiat amet nemo eius quia laborum facilis laudantium illum natus saepe expedita eaque quasi.</p><p> Omnis quibusdam veniam dolores commodi reprehenderit eos magnam eaque, itaque officia hic consectetur nam rem labore ea asperiores inventore cum deleniti,</p><p> illum corrupti nesciunt? Fuga repudiandae harum eligendi quod ullam, animi nobis repellat corrupti in natus pariatur adipisci accusantium magnam porro non commodi. Sed cum expedita ipsa fuga quae, libero, eos neque architecto vitae porro facilis quisquam. Repellat doloribus, nam maxime iusto est enim.</p><p>Facere saepe aliquam rerum nostrum? Laudantium quod provident autem obcaecati nemo illo necessitatibus corrupti, aspernatur ullam numquam nesciunt debitis animi perferendis fugit,  praesentium et sed rerum, asperiores ab aliquam rem odio recusandae quidem? Eligendi nostrum asperiores quo voluptates. Quibusdam a dolorem possimus placeat molestias rerum? Itaque facere repudiandae eum odit ipsum?</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, culpa eveniet! Aliquam impedit nostrum exercitationem ipsam deleniti.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, culpa eveniet! Aliquam impedit nostrum exercitationem ipsam deleniti. Quam, rem corrupti fuga fugiat amet nemo eius quia laborum facilis laudantium illum natus saepe expedita eaque quasi.</p><p> Omnis quibusdam veniam dolores commodi reprehenderit eos magnam eaque, itaque officia hic consectetur nam rem labore ea asperiores inventore cum deleniti,</p><p> illum corrupti nesciunt? Fuga repudiandae harum eligendi quod ullam, animi nobis repellat corrupti in natus pariatur adipisci accusantium magnam porro non commodi. Sed cum expedita ipsa fuga quae, libero, eos neque architecto vitae porro facilis quisquam. Repellat doloribus, nam maxime iusto est enim.</p><p>Facere saepe aliquam rerum nostrum? Laudantium quod provident autem obcaecati nemo illo necessitatibus corrupti, aspernatur ullam numquam nesciunt debitis animi perferendis fugit,  praesentium et sed rerum, asperiores ab aliquam rem odio recusandae quidem? Eligendi nostrum asperiores quo voluptates. Quibusdam a dolorem possimus placeat molestias rerum? Itaque facere repudiandae eum odit ipsum?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, culpa eveniet! Aliquam impedit nostrum exercitationem ipsam deleniti.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, culpa eveniet! Aliquam impedit nostrum exercitationem ipsam deleniti. Quam, rem corrupti fuga fugiat amet nemo eius quia laborum facilis laudantium illum natus saepe expedita eaque quasi.</p><p> Omnis quibusdam veniam dolores commodi reprehenderit eos magnam eaque, itaque officia hic consectetur nam rem labore ea asperiores inventore cum deleniti,</p><p> illum corrupti nesciunt? Fuga repudiandae harum eligendi quod ullam, animi nobis repellat corrupti in natus pariatur adipisci accusantium magnam porro non commodi. Sed cum expedita ipsa fuga quae, libero, eos neque architecto vitae porro facilis quisquam. Repellat doloribus, nam maxime iusto est enim.</p><p>Facere saepe aliquam rerum nostrum? Laudantium quod provident autem obcaecati nemo illo necessitatibus corrupti, aspernatur ullam numquam nesciunt debitis animi perferendis fugit,  praesentium et sed rerum, asperiores ab aliquam rem odio recusandae quidem? Eligendi nostrum asperiores quo voluptates. Quibusdam a dolorem possimus placeat molestias rerum? Itaque facere repudiandae eum odit ipsum?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, culpa eveniet! Aliquam impedit nostrum exercitationem ipsam deleniti.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, culpa eveniet! Aliquam impedit nostrum exercitationem ipsam deleniti. Quam, rem corrupti fuga fugiat amet nemo eius quia laborum facilis laudantium illum natus saepe expedita eaque quasi.</p><p> Omnis quibusdam veniam dolores commodi reprehenderit eos magnam eaque, itaque officia hic consectetur nam rem labore ea asperiores inventore cum deleniti,</p><p> illum corrupti nesciunt? Fuga repudiandae harum eligendi quod ullam, animi nobis repellat corrupti in natus pariatur adipisci accusantium magnam porro non commodi. Sed cum expedita ipsa fuga quae, libero, eos neque architecto vitae porro facilis quisquam. Repellat doloribus, nam maxime iusto est enim.</p><p>Facere saepe aliquam rerum nostrum? Laudantium quod provident autem obcaecati nemo illo necessitatibus corrupti, aspernatur ullam numquam nesciunt debitis animi perferendis fugit,  praesentium et sed rerum, asperiores ab aliquam rem odio recusandae quidem? Eligendi nostrum asperiores quo voluptates. Quibusdam a dolorem possimus placeat molestias rerum? Itaque facere repudiandae eum odit ipsum?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
