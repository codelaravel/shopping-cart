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
          'price'       => 10,
          'qty'         => 10
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'http://ecx.images-amazon.com/images/I/51jLBBnZnTL._SX323_BO1,204,203,200_.jpg',
          'title'       => 'Harry Potter and the Cursed Child - Parts I & II (Special Rehearsal Edition)',
          'description' => 'Being labelled as the boy who lived for his whole life has not been easy for Harry Potter. In the official eighth instalment of the Harry Potter series penned in the form of a two-part stage production play, J. K. Rowling weaves yet another thrilling and magical yarn featuring the life of Harry Potter nineteen years later in the post-Voldemort wizarding world.',
          'price'       => 30,
          'qty'         => 12
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'http://ecx.images-amazon.com/images/I/5122-J9iMzL._SX325_BO1,204,203,200_.jpg',
          'title'       => 'Everyone Has A Story',
          'description' => 'Meera, a fledgling writer who is in search of a story that can touch millions of lives.
Vivaan, assistant branch manager at Citibank, who dreams of travelling the world.
Kabir, a café manager who desires something of his own. Nisha, the despondent café customer who keeps secrets of her own.',
          'price'       => 35,
          'qty'         => 6
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'http://ecx.images-amazon.com/images/I/51m0wvVXZ1L._SX319_BO1,204,203,200_.jpg',
          'title'       => 'The Immortals of Meluha (Shiva Trilogy)',
          'description' => 'An intense story The Immortals of Meluha draws heavily from stories and legends of Hindu mythology that have been passed on from generation to generation.',
          'price'       => 15,
          'qty'         => 5
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'https://images-eu.ssl-images-amazon.com/images/I/51H8vqITGxL._SY346_.jpg',
          'title'       => 'The Complete Sherlock Holmes',
          'description' => 'Housed in one superb volume, The Complete Sherlock Holmes Collection includes every Sherlock Holmes tale penned by the great Arthur Conan Doyle. With a linked table of contents, you can click on each and every chapter, making for easy navigation through this mammoth omnibus.',
          'price'       => 75,
          'qty'         => 7
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'https://images-eu.ssl-images-amazon.com/images/I/51oTnI3HNQL.jpg',
          'title'       => 'The Memoirs of Sherlock Holmes',
          'description' => 'The Memoirs of Sherlock Holmes inspired The Map of Chaos by New York Times bestselling author Félix J. Palma. As a gift to readers, this ebook edition includes an excerpt from The Map of Chaos.',
          'price'       => 24,
          'qty'         => 9
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'http://ecx.images-amazon.com/images/I/51nqwBj-F3L._SX322_BO1,204,203,200_.jpg',
          'title'       => 'Worlds Best Boyfriend',
          'description' => 'The book is a complete package defining love, friendship, betrayal and hatred that exists between the main characters of the story, Dhurv and Aranya. The story revolves around them. Both hate each other and could cross any limit to hurt each other, but still they cannot stay away from each other. The mad yet passionate attraction between the two describes modern day relationships that most people can relate to.',
          'price'       => 21,
          'qty'         => 2
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'https://images-na.ssl-images-amazon.com/images/I/51WcS497JJL._SX332_BO1,204,203,200_.jpg',
          'title'       => 'Armageddon: How Trump Can Beat Hillary',
          'description' => 'The 2016 election is truly America\'s Armageddon—the ultimate and decisive battle to save America, a fight to defeat Hillary Clinton and the forces seeking to flout our constitutional government and replace it with an all-powerful president backed up by an activist judiciary that answers to no one.',
          'price'       => 15,
          'qty'         => 1
        ]);
        $product->save();
//
        $product = new App\Product([
          'imagePath'   => 'https://images-na.ssl-images-amazon.com/images/I/41Z2swEmwaL._SX396_BO1,204,203,200_.jpg',
          'title'       => 'HTML and CSS: Design and Build Websites',
          'description' => 'Every day, more and more people want to learn some HTML and CSS. Joining the professional web designers and programmers are new audiences who need to know a little bit of code at work (update a content management system or e-commerce store) and those who want to make their personal blogs more attractive. Many books teaching HTML and CSS are dry and only written for those who want to become programmers, which is why this book takes an entirely new approach.',
          'price'       => 15,
          'qty'         => 0
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'https://images-na.ssl-images-amazon.com/images/I/51OAGRVUBeL._SX404_BO1,204,203,200_.jpg',
          'title'       => 'Adobe Photoshop CC Classroom in a Book (2015 release)',
          'description' => 'Creative professionals seeking the fastest, easiest, most comprehensive way to learn Adobe Photoshop choose Adobe Photoshop CC Classroom in a Book (2015 release) from Adobe Press. The 14 project-based lessons in this book show users step-by-step the key techniques for working in Photoshop and how to manipulate images, edit motion-based content, and create image composites.',
          'price'       => 25,
          'qty'         => 5
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'https://images-na.ssl-images-amazon.com/images/I/516qU3P3rXL._SX398_BO1,204,203,200_.jpg',
          'title'       => 'Intro to Java Programming, Comprehensive Version (10th Edition)',
          'description' => 'Daniel Liang teaches concepts of problem-solving and object-oriented programming using a fundamentals-first approach. Beginning programmers learn critical problem-solving techniques then move on to grasp the key concepts of object-oriented, GUI programming, advanced GUI and Web programming using Java.',
          'price'       => 28,
          'qty'         => 15
        ]);
        $product->save();

        $product = new App\Product([
          'imagePath'   => 'http://ecx.images-amazon.com/images/I/51nqwBj-F3L._SX322_BO1,204,203,200_.jpg',
          'title'       => 'JavaScript and JQuery: Interactive Front-End Web Development',
          'description' => 'By the end of the book, not only will you be able to use the thousands of scripts, JavaScript APIs, and jQuery plugins that are freely available on the web, and be able to customize them - you will also be able to create your own scripts from scratch.',
          'price'       => 38,
          'qty'         => 6
        ]);
        $product->save();
    }
}
