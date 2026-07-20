<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'type' => 'success',
    'title' => 'Thông báo'
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'type' => 'success',
    'title' => 'Thông báo'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div
    class="p-3 rounded mb-3 <?php echo e($type === 'success'
        ? 'bg-green-100 text-green-800'
        : 'bg-yellow-100 text-yellow-800'); ?>"
>
    <strong><?php echo e($title); ?>:</strong>
    <?php echo e($slot); ?>

</div><?php /**PATH C:\laragon\www\Lab7\resources\views/components/alert.blade.php ENDPATH**/ ?>