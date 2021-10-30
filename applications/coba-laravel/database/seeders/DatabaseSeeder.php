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
        

        // User::create([
        //     'name' => 'Fajar Hasbi Noer',
        //     'email'=> 'fajarhasbinoer2@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::factory(3)->create();

        // Category::create([
        //     'name' => 'Web Programing',
        //     'slug' => 'web-programing'
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        Post::factory(5)->create();

//         Post::create([
//             'title' => 'Judul Pertama',
//             'slug' => 'Judul-pertama',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati expedita sed quasi ut facere, earum dolorum cumque magnam!',
//             'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
//             Obcaecati expedita sed quasi ut facere, earum dolorum cumque magnam! Quia velit quidem ipsa sunt, ex autem officiis ipsum corrupti voluptatibus. 
//             Consequatur officia repellat vel blanditiis. Architecto dolorum eaque labore est nulla libero ex repellat eveniet illo possimus sequi a sunt ratione nam odio nesciunt, reprehenderit rerum omnis dolor adipisci magni placeat? Rerum, eveniet iure provident, minus culpa voluptatum dolore magni neque itaque atque asperiores doloremque expedita nam autem esse aspernatur soluta nesciunt sequi cumque quidem. 
//             Consectetur magnam rem soluta eveniet nam mollitia! Amet nulla, fuga temporibus autem animi fugit cumque quis.
//             Obcaecati expedita sed quasi ut facere, earum dolorum cumque magnam!',
            
//             'category_id' =>1,

//             'user_id' =>1
//        ]);

//        Post::create([
//         'title' => 'Judul Kedua',
//         'slug' => 'Judul-kedua',
//         'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati expedita sed quasi ut facere, earum dolorum cumque magnam!',
//         'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
//         Obcaecati expedita sed quasi ut facere, earum dolorum cumque magnam! Quia velit quidem ipsa sunt, ex autem officiis ipsum corrupti voluptatibus. 
//         Consequatur officia repellat vel blanditiis. Architecto dolorum eaque labore est nulla libero ex repellat eveniet illo possimus sequi a sunt ratione nam odio nesciunt, reprehenderit rerum omnis dolor adipisci magni placeat? Rerum, eveniet iure provident, minus culpa voluptatum dolore magni neque itaque atque asperiores doloremque expedita nam autem esse aspernatur soluta nesciunt sequi cumque quidem. 
//         Consectetur magnam rem soluta eveniet nam mollitia! Amet nulla, fuga temporibus autem animi fugit cumque quis.
//         Obcaecati expedita sed quasi ut facere, earum dolorum cumque magnam!',
        
//         'category_id' =>1,

//         'user_id' =>1
//    ]);

//    Post::create([
//     'title' => 'Judul Ketiga',
//     'slug' => 'Judul-ketiga',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati expedita sed quasi ut facere, earum dolorum cumque magnam!',
//     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
//     Obcaecati expedita sed quasi ut facere, earum dolorum cumque magnam! Quia velit quidem ipsa sunt, ex autem officiis ipsum corrupti voluptatibus. 
//     Consequatur officia repellat vel blanditiis. Architecto dolorum eaque labore est nulla libero ex repellat eveniet illo possimus sequi a sunt ratione nam odio nesciunt, reprehenderit rerum omnis dolor adipisci magni placeat? Rerum, eveniet iure provident, minus culpa voluptatum dolore magni neque itaque atque asperiores doloremque expedita nam autem esse aspernatur soluta nesciunt sequi cumque quidem. 
//     Consectetur magnam rem soluta eveniet nam mollitia! Amet nulla, fuga temporibus autem animi fugit cumque quis.
//     Obcaecati expedita sed quasi ut facere, earum dolorum cumque magnam!',
    
//     'category_id' =>2,

//     'user_id' =>1
// ]);
    }
}
