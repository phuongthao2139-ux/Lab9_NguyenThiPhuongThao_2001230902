@props([
    'type' => 'success',
    'title' => 'Thông báo'
])

<div
    class="p-3 rounded mb-3 {{ $type === 'success'
        ? 'bg-green-100 text-green-800'
        : 'bg-yellow-100 text-yellow-800' }}"
>
    <strong>{{ $title }}:</strong>
    {{ $slot }}
</div>