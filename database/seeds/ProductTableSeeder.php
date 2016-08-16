<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new App\Product([
          'imagePath'   => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
          'title'       => 'Harry Potter',
          'description' => 'Super cool - at least as a child. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'price'       => 10
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'http://ecx.images-amazon.com/images/I/51jLBBnZnTL._SX323_BO1,204,203,200_.jpg',
          'title'       => 'Harry Potter and the Cursed Child - Parts I & II (Special Rehearsal Edition)',
          'description' => 'Being labelled as the boy who lived for his whole life has not been easy for Harry Potter. In the official eighth instalment of the Harry Potter series penned in the form of a two-part stage production play, J. K. Rowling weaves yet another thrilling and magical yarn featuring the life of Harry Potter nineteen years later in the post-Voldemort wizarding world.',
          'price'       => 30
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'http://ecx.images-amazon.com/images/I/5122-J9iMzL._SX325_BO1,204,203,200_.jpg',
          'title'       => 'Everyone Has A Story',
          'description' => 'Meera, a fledgling writer who is in search of a story that can touch millions of lives.
Vivaan, assistant branch manager at Citibank, who dreams of travelling the world.
Kabir, a café manager who desires something of his own. Nisha, the despondent café customer who keeps secrets of her own.',
          'price'       => 35
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'http://ecx.images-amazon.com/images/I/51m0wvVXZ1L._SX319_BO1,204,203,200_.jpg',
          'title'       => 'The Immortals of Meluha (Shiva Trilogy)',
          'description' => 'An intense story The Immortals of Meluha draws heavily from stories and legends of Hindu mythology that have been passed on from generation to generation.',
          'price'       => 15
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'https://images-eu.ssl-images-amazon.com/images/I/51H8vqITGxL._SY346_.jpg',
          'title'       => 'The Complete Sherlock Holmes',
          'description' => 'Housed in one superb volume, The Complete Sherlock Holmes Collection includes every Sherlock Holmes tale penned by the great Arthur Conan Doyle. With a linked table of contents, you can click on each and every chapter, making for easy navigation through this mammoth omnibus.',
          'price'       => 75
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'https://images-eu.ssl-images-amazon.com/images/I/51oTnI3HNQL.jpg',
          'title'       => 'The Memoirs of Sherlock Holmes',
          'description' => 'The Memoirs of Sherlock Holmes inspired The Map of Chaos by New York Times bestselling author Félix J. Palma. As a gift to readers, this ebook edition includes an excerpt from The Map of Chaos.',
          'price'       => 24
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'http://ecx.images-amazon.com/images/I/51nqwBj-F3L._SX322_BO1,204,203,200_.jpg',
          'title'       => 'Worlds Best Boyfriend',
          'description' => 'The book is a complete package defining love, friendship, betrayal and hatred that exists between the main characters of the story, Dhurv and Aranya. The story revolves around them. Both hate each other and could cross any limit to hurt each other, but still they cannot stay away from each other. The mad yet passionate attraction between the two describes modern day relationships that most people can relate to.',
          'price'       => 21
        ]);
        $product->save();
    }
}
