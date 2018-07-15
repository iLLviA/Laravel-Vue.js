<?php

use Illuminate\Http\Request;
use App\Http\Resources\TopicksResource;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' => 'api'],function(){
    // 記事を投稿す処理
    Route::post('/article/{id}',function($id){
        //投稿するユーザーを取得
        $user = App\User::where('id',$id)->first();

        //リクエストデータを元に記事を作成
        $article = new App\topicks();
        $article->title = request('title');
        $article->content = request('content');

        //ユーザーに関連づけて保存
        $user->articles()->save($article);

        //テストのためtitile、contentのデータをリターン
        return ['title' => request('title'),'content' => request('content')];
    });
    Route::get('/article/list_item',function(){
        $article = App\topicks::all();


        return TopicksResource::collection($article);
    });

});