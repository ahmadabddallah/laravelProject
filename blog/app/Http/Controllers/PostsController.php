<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){
        $allPosts = [
            ['id' => 1, 'title' => 'PHP','Posted_By'=>'ahmed','created_at'=>'2022-10-10 09:00:00' ],
            ['id' => 2, 'title' => 'Laravel','Posted_By'=>'mohamed','created_at'=>'2022-10-15 09:10:00' ],
            ['id' => 3, 'title' => 'Vue','Posted_By'=>'fatma','created_at'=>'2022-10-17 09:20:00' ],
            ['id' => 4, 'title' => 'React','Posted_By'=>'sara','created_at'=>'2022-10-18 09:30:00' ],
            ['id' => 5, 'title' => 'Node','Posted_By'=>'amr','created_at'=>'2022-10-20 09:40:00' ],
            ['id' => 6, 'title' => 'Angular','Posted_By'=>'mona','created_at'=>'2022-10-22 09:50:00' ]
        ];

        return view('posts.index',['posts'=>$allPosts]);
    }

    public function show($postId){
        $singlePost = [
            ['id' => 1, 'title' => 'PHP','Posted_By'=>'ahmed','description'=>'php is cooooool','created_at'=>'2022-10-10 09:00:00' ],
            ['id' => 2, 'title' => 'Laravel','Posted_By'=>'mohamed','description'=>'laravel is cooooool','created_at'=>'2022-10-15 09:10:00' ],
            ['id' => 3, 'title' => 'Vue','Posted_By'=>'fatma','description'=>'vue is cooooool','created_at'=>'2022-10-17 09:20:00' ],

        ];
        return view('posts.show',['post'=>$singlePost]);
    }

    public function create(){
        return view('posts.create');

    }
}
