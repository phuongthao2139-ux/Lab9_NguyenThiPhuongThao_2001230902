<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public static function sample(): array
    {
        return [
            1 => ['id' => 1, 'title' => 'Giới thiệu Laravel 12', 'body' => 'Nội dung A'],
            2 => ['id' => 2, 'title' => 'Blade Components', 'body' => 'Nội dung B'],
        ];
    }

    public function resolveRouteBinding($value, $field = null)
    {
        $data = self::sample()[(int) $value] ?? abort(404, 'Không tìm thấy bài viết.');
        $article = new self();
        $article->id = $data['id'];
        $article->title = $data['title'];
        $article->body = $data['body'];
        $article->exists = true;
        return $article;
    }
}