@php
    $current = Route::currentRouteName();
    $labels = [
        'articles.index'  => 'Danh sách bài viết',
        'articles.create' => 'Tạo bài viết',
        'articles.edit'   => 'Sửa bài viết',
        'articles.show'   => 'Xem bài viết',
    ];
    $currentLabel = $labels[$current] ?? null;
@endphp
@if($currentLabel && $current !== 'articles.index')
    <div class="breadcrumb">
        <a href="{{ route('articles.index') }}">Articles</a> &raquo; {{ $currentLabel }}
    </div>
@endif