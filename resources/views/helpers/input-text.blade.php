<div class="form-group @error($fieldName) has-error @enderror">
    <label for="{{ $fieldName }}">{{ $label }}</label>
    <input type="text" class="form-control" id="{{ $fieldName }}" name="{{ $fieldName }}"
        value="{{ @old($fieldName, $entity[$fieldName]) }}">

    @error($fieldName)
    <span class="help-block">
        {{ $message }}
    </span>
    @enderror
</div>