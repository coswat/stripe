@props([
'type' => 'text', 'name','label'
])
<div class="element-label"><span>{{ $label }}</span></div>
 <input type="{{ $type }}" name="{{ $name }}" class="form-control" value="{{ old($name) }}">
    </div>
 @error($name)
 {{ $message }}
 @enderror