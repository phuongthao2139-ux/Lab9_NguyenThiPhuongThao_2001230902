<?php
    $current = Route::currentRouteName();
    $labels = [
        'articles.index'  => 'Danh sách bài viết',
        'articles.create' => 'Tạo bài viết',
        'articles.edit'   => 'Sửa bài viết',
        'articles.show'   => 'Xem bài viết',
    ];
    $currentLabel = $labels[$current] ?? null;
?>
<?php if($currentLabel && $current !== 'articles.index'): ?>
    <div class="breadcrumb">
        <a href="<?php echo e(route('articles.index')); ?>">Articles</a> &raquo; <?php echo e($currentLabel); ?>

    </div>
<?php endif; ?><?php /**PATH C:\laragon\www\Lab7\resources\views/partials/breadcrumb.blade.php ENDPATH**/ ?>