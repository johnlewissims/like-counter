<?php
namespace Ejin\LikeCounter\Controllers;

use Illuminate\Support\Arr;
use Laminas\Diactoros\Response\JsonResponse;
use Laminas\Diactoros\Response\JsonHtml;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface;
use Flarum\User\User;
use Flarum\Post\Post;

class UserLikesController implements RequestHandlerInterface
{
    public function handle(Request $request): Response
    {
        // $users = User::get()->all();
        // foreach ($users as $user) {
        //   $posts = Post::where('user_id', $user->id)->with('likes')->get()->all();
        //   $likeCount = 0;
        //   foreach ($posts as $post) {
        //     $likeCount += $post->likes->count();
        //   }
        //   $user->ejin_like_count = $likeCount;
        //   $user->save();
        // }

        $userId = Arr::get($request->getQueryParams(), 'id');
        $userLikes = Post::where('user_id', $userId)->select('id')->withCount('likes')->get()->sum('likes_count');

        return new JsonResponse($userLikes);
    }
}
