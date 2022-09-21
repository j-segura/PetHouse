@props(['active'])

@php
$classes = ($active ?? false)
            ? 'link link_active'
            : 'link link_noactive';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
