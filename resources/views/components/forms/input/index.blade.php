@props(['label', 'value' => ''])
<div class="form-group">
	<x-forms.input.label :value="$label" :hasError="$errors->has($attributes->get('name'))" />
	<input 
		{{ $attributes->class(['form-control', 'is-invalid' => $errors->has($attributes->get('name')) ]) }} 
		value="{{ old($attributes->get('name')) ?? $value }}"
		{{ $attributes->has('readonly') ? 'readonly' : '' }} {{ $attributes->has('disabled') ? 'disabled' : '' }}
		>
	<x-forms.input.error :field="$attributes->get('name')" />
</div>