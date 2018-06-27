<?php

use Illuminate\Database\Seeder;
use App\Category;
use function GuzzleHttp\Psr7\str;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Thư mục gốc
      Category::create([
        'name' => 'Uncategorized',
        'slug' => 'uncategorized',
        'order' => 0,
        'parent' => 0
      ]);
      // 2 Sách kinh tế
      $economicBook = Category::create([
        'name' => 'Sách kinh tế',
        'slug' => str_slug('Sách kinh tế'),
        'order' => 0,
        'parent' => 0
      ]);
      Category::create([
        'name' => 'Marketing - Bán hàng',
        'slug' => str_slug('Marketing - Bán hàng'),
        'order' => 0,
        'parent' => $economicBook->id,
      ]);
      Category::create([
        'name' => 'Ngoại thương',
        'slug' => str_slug('Ngoại thương'),
        'order' => 1,
        'parent' => $economicBook->id
      ]);
      Category::create([
        'name' => 'Tài chính - Kế toán',
        'slug' => str_slug('Tài chính - Kế toán'),
        'order' => 2,
        'parent' => $economicBook->id
      ]);
      Category::create([
        'name' => 'Tài chính & tiền tệ',
        'slug' => str_slug('Tài chính & tiền tệ'),
        'order' => 3,
        'parent' => $economicBook->id
      ]);
      // 7 Sách văn học
      $literatureBook = Category::create([
        'name' => 'Sách văn học',
        'slug' => str_slug('Sách văn học'),
        'order' => 0,
        'parent' => 0
      ]);
      Category::create([
        'name' => 'Tiểu thuyết',
        'slug' => str_slug('Tiểu thuyết'),
        'order' => 0,
        'parent' => $literatureBook->id
      ]);
      Category::create([
        'name' => 'Truyện dài',
        'slug' => str_slug('Truyện dài'),
        'order' => 1,
        'parent' => $literatureBook->id
      ]);
      Category::create([
        'name' => 'Phóng Sự,Ký Sự',
        'slug' => str_slug('Phóng Sự,Ký Sự'),
        'order' => 2,
        'parent' => $literatureBook->id
      ]);
      Category::create([
        'name' => 'Tự Truyện - Hồi Ký',
        'slug' => str_slug('Tự Truyện - Hồi Ký'),
        'order' => 3,
        'parent' => $literatureBook->id
      ]);
      //12 Sách chuyên nghành
      $specializedBook = Category::create([
        'name' => 'Sách Chuyên Ngành',
        'slug' => str_slug('Sách Chuyên Ngành'),
        'order' => 0,
        'parent' => 0
      ]);
      Category::create([
        'name' => 'Chính Trị, Triết Học',
        'slug' => str_slug('Chính Trị, Triết Học'),
        'order' => 0,
        'parent' => $specializedBook->id
      ]);
      Category::create([
        'name' => 'Lịch Sử, Địa Lý',
        'slug' => str_slug('Lịch Sử, Địa Lý'),
        'order' => 1,
        'parent' => $specializedBook->id
      ]);
      Category::create([
        'name' => 'Pháp Luật',
        'slug' => str_slug('Pháp Luật'),
        'order' => 2,
        'parent' => $specializedBook->id
      ]);
      Category::create([
        'name' => 'Sách Tôn Giáo',
        'slug' => str_slug('Sách Tôn Giáo'),
        'order' => 3,
        'parent' => $specializedBook->id
      ]);
      Category::create([
        'name' => 'Khoa Học Tự Nhiên - Xã Hội',
        'slug' => str_slug('Khoa Học Tự Nhiên - Xã Hội'),
        'order' => 4,
        'parent' => $specializedBook->id
      ]);
    }
}
