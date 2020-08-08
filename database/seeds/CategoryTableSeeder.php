<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $now=\Carbon\Carbon::now()->toDateString();
        $el=['Laptops','Desktops','Mobile Phones','TVs','Digital Cameras'];
        \App\Category::insert([
            ['name'=> $el[0],'slug'=>$el[0],'created_at'=>$now,'updated_at'=>$now],
            ['name'=> $el[1],'slug'=>$el[1],'created_at'=>$now,'updated_at'=>$now],
            ['name'=> $el[2],'slug'=>$el[2],'created_at'=>$now,'updated_at'=>$now],
            ['name'=> $el[3],'slug'=>$el[3],'created_at'=>$now,'updated_at'=>$now],
            ['name'=> $el[4],'slug'=>$el[4],'created_at'=>$now,'updated_at'=>$now],
        ]);
    }
}
