@props(['value', 'hasError' => false])

<label @class(['text-danger' => $hasError])>
    {{ $value ?? $slot }}
</label>
