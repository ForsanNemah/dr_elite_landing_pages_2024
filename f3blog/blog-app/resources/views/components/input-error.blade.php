@props(['for'])

@error($for)
    <p contenteditable="true" {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
@enderror
