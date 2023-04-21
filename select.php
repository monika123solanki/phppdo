<?php

class Post
{
    public $title;
    public $published;
    public $author;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts =[
            new Post('My First Post', 'abc', true),
            new Post('My Second Post', 'xyz', true),
            new Post('My Third Post', 'demo', true),
            new Post('My Fourth Post', 'test', false)
        ];

// method:1
// $publishedPosts = array_filter($posts, function ($post) {
//     return $post->published;
// });

// $unpublishedPosts = array_filter($posts, function ($post) {
//     return !$post->published;
// });

// var_dump($unpublishedPosts);

// var_dump($publishedPosts);

// method:2
//     $modified =array_map(function($post){
//         $post->published = true;
//         return $post;
//     },$posts);

//    var_dump($modified);


// method:3
// $titles = array_column($posts,'title');
// var_dump($titles);
//

// method:4
// foreach($posts as $index =>$post){
//     $posts[$index] = (array)$post;
// }
// var_dump($posts);


// method:5
// $posts = array_map(function($post){
//     return (array)$post;
// },$posts);

// var_dump($posts);
// $author = array_column($posts, 'author','title');
// var_dump($author);
