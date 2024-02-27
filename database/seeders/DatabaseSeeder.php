<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Organization;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Admin 1',
            'email' => 'admin1@gmail.com',
            'password' => 123456
        ]);

        User::factory()->create([
            'name' => 'Admin 2',
            'email' => 'admin2@gmail.com',
            'password' => 123456
        ]);

        Category::factory()->create([
            'name' => 'Sports'
        ]);

        Category::factory()->create([
            'name' => 'Ceremony'
        ]);

        Category::factory()->create([
            'name' => 'Events'
        ]);

        Category::factory()->create([
            'name' => 'Learning'
        ]);

        Organization::factory()->create([
            'name' => 'OSIS',
            'image' => 'contoh.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristique porta sem, id iaculis ante ultricies vitae. Nulla commodo dolor urna, quis tristique ex elementum ac. Praesent non gravida metus, id malesuada dolor. Sed et diam at nisl vehicula placerat sed vitae massa. Maecenas vel metus nec lacus laoreet commodo. Curabitur egestas velit sed iaculis consectetur. Mauris dapibus congue nisl a lobortis.
            Nullam efficitur, odio ac tempor pulvinar, diam neque vehicula sem, et dignissim dui mauris ac eros. Ut maximus vulputate nunc sed convallis. Integer finibus velit sapien, vitae semper arcu consectetur sed. Curabitur molestie pellentesque cursus. Etiam eget libero ac neque tincidunt tempus eu et odio. Donec volutpat mollis dignissim. Aenean feugiat odio velit, vitae consectetur ipsum feugiat egestas. Suspendisse potenti. Duis diam quam, malesuada vitae molestie at, sodales vel metus. Proin luctus sem neque, congue pharetra tortor sodales eget. Quisque consectetur, diam at consequat placerat, nisl nibh malesuada ipsum, at fermentum enim neque nec sem. Morbi rhoncus varius lacinia. Morbi magna est, ullamcorper in neque eget, placerat porttitor lacus.            
            Integer consequat vehicula purus laoreet blandit. Aliquam tincidunt consectetur purus ut euismod. In ultrices, neque non laoreet ultricies, quam risus pulvinar erat, ut mattis turpis tellus id augue. Donec pulvinar, massa in pretium maximus, nibh nisi tincidunt mauris, vel pulvinar neque dui sed risus. Aliquam viverra non enim sit amet tempor. Etiam auctor commodo quam non imperdiet. Sed mattis quam leo, eu consequat nisl rhoncus ut. Ut vehicula eros lectus, sed euismod est laoreet eu. Duis sed bibendum enim. Morbi condimentum turpis turpis, id molestie enim tincidunt quis. Nunc sit amet tellus viverra, vulputate tellus posuere, interdum sem. Morbi ut finibus leo. Morbi sit amet nisl odio. Nunc gravida felis et turpis rutrum, sed accumsan est suscipit. Nullam mollis nec sem vitae vehicula. Suspendisse potenti.'
        ]);
        Organization::factory()->create([
            'name' => 'ITSC',
            'image' => 'contoh.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristique porta sem, id iaculis ante ultricies vitae. Nulla commodo dolor urna, quis tristique ex elementum ac. Praesent non gravida metus, id malesuada dolor. Sed et diam at nisl vehicula placerat sed vitae massa. Maecenas vel metus nec lacus laoreet commodo. Curabitur egestas velit sed iaculis consectetur. Mauris dapibus congue nisl a lobortis.
            Nullam efficitur, odio ac tempor pulvinar, diam neque vehicula sem, et dignissim dui mauris ac eros. Ut maximus vulputate nunc sed convallis. Integer finibus velit sapien, vitae semper arcu consectetur sed. Curabitur molestie pellentesque cursus. Etiam eget libero ac neque tincidunt tempus eu et odio. Donec volutpat mollis dignissim. Aenean feugiat odio velit, vitae consectetur ipsum feugiat egestas. Suspendisse potenti. Duis diam quam, malesuada vitae molestie at, sodales vel metus. Proin luctus sem neque, congue pharetra tortor sodales eget. Quisque consectetur, diam at consequat placerat, nisl nibh malesuada ipsum, at fermentum enim neque nec sem. Morbi rhoncus varius lacinia. Morbi magna est, ullamcorper in neque eget, placerat porttitor lacus.            
            Integer consequat vehicula purus laoreet blandit. Aliquam tincidunt consectetur purus ut euismod. In ultrices, neque non laoreet ultricies, quam risus pulvinar erat, ut mattis turpis tellus id augue. Donec pulvinar, massa in pretium maximus, nibh nisi tincidunt mauris, vel pulvinar neque dui sed risus. Aliquam viverra non enim sit amet tempor. Etiam auctor commodo quam non imperdiet. Sed mattis quam leo, eu consequat nisl rhoncus ut. Ut vehicula eros lectus, sed euismod est laoreet eu. Duis sed bibendum enim. Morbi condimentum turpis turpis, id molestie enim tincidunt quis. Nunc sit amet tellus viverra, vulputate tellus posuere, interdum sem. Morbi ut finibus leo. Morbi sit amet nisl odio. Nunc gravida felis et turpis rutrum, sed accumsan est suscipit. Nullam mollis nec sem vitae vehicula. Suspendisse potenti.'
        ]);
        Organization::factory()->create([
            'name' => 'Rohani Islam',
            'image' => 'contoh.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristique porta sem, id iaculis ante ultricies vitae. Nulla commodo dolor urna, quis tristique ex elementum ac. Praesent non gravida metus, id malesuada dolor. Sed et diam at nisl vehicula placerat sed vitae massa. Maecenas vel metus nec lacus laoreet commodo. Curabitur egestas velit sed iaculis consectetur. Mauris dapibus congue nisl a lobortis.
            Nullam efficitur, odio ac tempor pulvinar, diam neque vehicula sem, et dignissim dui mauris ac eros. Ut maximus vulputate nunc sed convallis. Integer finibus velit sapien, vitae semper arcu consectetur sed. Curabitur molestie pellentesque cursus. Etiam eget libero ac neque tincidunt tempus eu et odio. Donec volutpat mollis dignissim. Aenean feugiat odio velit, vitae consectetur ipsum feugiat egestas. Suspendisse potenti. Duis diam quam, malesuada vitae molestie at, sodales vel metus. Proin luctus sem neque, congue pharetra tortor sodales eget. Quisque consectetur, diam at consequat placerat, nisl nibh malesuada ipsum, at fermentum enim neque nec sem. Morbi rhoncus varius lacinia. Morbi magna est, ullamcorper in neque eget, placerat porttitor lacus.            
            Integer consequat vehicula purus laoreet blandit. Aliquam tincidunt consectetur purus ut euismod. In ultrices, neque non laoreet ultricies, quam risus pulvinar erat, ut mattis turpis tellus id augue. Donec pulvinar, massa in pretium maximus, nibh nisi tincidunt mauris, vel pulvinar neque dui sed risus. Aliquam viverra non enim sit amet tempor. Etiam auctor commodo quam non imperdiet. Sed mattis quam leo, eu consequat nisl rhoncus ut. Ut vehicula eros lectus, sed euismod est laoreet eu. Duis sed bibendum enim. Morbi condimentum turpis turpis, id molestie enim tincidunt quis. Nunc sit amet tellus viverra, vulputate tellus posuere, interdum sem. Morbi ut finibus leo. Morbi sit amet nisl odio. Nunc gravida felis et turpis rutrum, sed accumsan est suscipit. Nullam mollis nec sem vitae vehicula. Suspendisse potenti.'
        ]);
        Organization::factory()->create([
            'name' => 'Pramuka',
            'image' => 'contoh.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristique porta sem, id iaculis ante ultricies vitae. Nulla commodo dolor urna, quis tristique ex elementum ac. Praesent non gravida metus, id malesuada dolor. Sed et diam at nisl vehicula placerat sed vitae massa. Maecenas vel metus nec lacus laoreet commodo. Curabitur egestas velit sed iaculis consectetur. Mauris dapibus congue nisl a lobortis.
            Nullam efficitur, odio ac tempor pulvinar, diam neque vehicula sem, et dignissim dui mauris ac eros. Ut maximus vulputate nunc sed convallis. Integer finibus velit sapien, vitae semper arcu consectetur sed. Curabitur molestie pellentesque cursus. Etiam eget libero ac neque tincidunt tempus eu et odio. Donec volutpat mollis dignissim. Aenean feugiat odio velit, vitae consectetur ipsum feugiat egestas. Suspendisse potenti. Duis diam quam, malesuada vitae molestie at, sodales vel metus. Proin luctus sem neque, congue pharetra tortor sodales eget. Quisque consectetur, diam at consequat placerat, nisl nibh malesuada ipsum, at fermentum enim neque nec sem. Morbi rhoncus varius lacinia. Morbi magna est, ullamcorper in neque eget, placerat porttitor lacus.            
            Integer consequat vehicula purus laoreet blandit. Aliquam tincidunt consectetur purus ut euismod. In ultrices, neque non laoreet ultricies, quam risus pulvinar erat, ut mattis turpis tellus id augue. Donec pulvinar, massa in pretium maximus, nibh nisi tincidunt mauris, vel pulvinar neque dui sed risus. Aliquam viverra non enim sit amet tempor. Etiam auctor commodo quam non imperdiet. Sed mattis quam leo, eu consequat nisl rhoncus ut. Ut vehicula eros lectus, sed euismod est laoreet eu. Duis sed bibendum enim. Morbi condimentum turpis turpis, id molestie enim tincidunt quis. Nunc sit amet tellus viverra, vulputate tellus posuere, interdum sem. Morbi ut finibus leo. Morbi sit amet nisl odio. Nunc gravida felis et turpis rutrum, sed accumsan est suscipit. Nullam mollis nec sem vitae vehicula. Suspendisse potenti.'
        ]);

        Article::factory()->create([
            'author_id' => 1,
            'category_id' => 3,
            'organization_id' => null,
            'title' => 'HUT SMKN 2 Klaten ke 58 Diselenggarakan dengan Meriah',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristique porta sem, id iaculis ante ultricies vitae. Nulla commodo dolor urna, quis tristique ex elementum ac. Praesent non gravida metus, id malesuada dolor. Sed et diam at nisl vehicula placerat sed vitae massa. Maecenas vel metus nec lacus laoreet commodo. Curabitur egestas velit sed iaculis consectetur. Mauris dapibus congue nisl a lobortis.
            Nullam efficitur, odio ac tempor pulvinar, diam neque vehicula sem, et dignissim dui mauris ac eros. Ut maximus vulputate nunc sed convallis. Integer finibus velit sapien, vitae semper arcu consectetur sed. Curabitur molestie pellentesque cursus. Etiam eget libero ac neque tincidunt tempus eu et odio. Donec volutpat mollis dignissim. Aenean feugiat odio velit, vitae consectetur ipsum feugiat egestas. Suspendisse potenti. Duis diam quam, malesuada vitae molestie at, sodales vel metus. Proin luctus sem neque, congue pharetra tortor sodales eget. Quisque consectetur, diam at consequat placerat, nisl nibh malesuada ipsum, at fermentum enim neque nec sem. Morbi rhoncus varius lacinia. Morbi magna est, ullamcorper in neque eget, placerat porttitor lacus.            
            Integer consequat vehicula purus laoreet blandit. Aliquam tincidunt consectetur purus ut euismod. In ultrices, neque non laoreet ultricies, quam risus pulvinar erat, ut mattis turpis tellus id augue. Donec pulvinar, massa in pretium maximus, nibh nisi tincidunt mauris, vel pulvinar neque dui sed risus. Aliquam viverra non enim sit amet tempor. Etiam auctor commodo quam non imperdiet. Sed mattis quam leo, eu consequat nisl rhoncus ut. Ut vehicula eros lectus, sed euismod est laoreet eu. Duis sed bibendum enim. Morbi condimentum turpis turpis, id molestie enim tincidunt quis. Nunc sit amet tellus viverra, vulputate tellus posuere, interdum sem. Morbi ut finibus leo. Morbi sit amet nisl odio. Nunc gravida felis et turpis rutrum, sed accumsan est suscipit. Nullam mollis nec sem vitae vehicula. Suspendisse potenti.',
            'image' => 'articles-1.jpg',
        ]);
    }
}
