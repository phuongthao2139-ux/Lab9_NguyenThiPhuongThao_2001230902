<!DOCTYPE html>
<html lang="vi">
<?php echo $__env->yieldPushContent('styles'); ?>
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title','Articles'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial,
                sans-serif;
        }

        .container {
            max-width: 960px;
            margin: 24px auto;
        }

        .flash {
            padding: 10px;
            margin-bottom: 12px;
            background: #ECFDF5;
            color: #065F46;
            border-radius: 8px;
        }

        nav a {
            margin-right: 8px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #e5e7eb;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #f3f4f6;
        }
    </style>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>
    <?php echo $__env->make('partials.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="container">
        <?php if(session('success')): ?>
        <div class="flash"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <?php echo $__env->make('partials.breadcrumb', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH C:\laragon\www\Lab7\resources\views/layouts/app.blade.php ENDPATH**/ ?>