<div class="form-group has-feedback @error($fieldName) has-error @enderror">
    <label for="{{ $fieldName }}">{{ $label }}</label>
    <select id={{ $fieldName }} name={{ $fieldName }} class="form-control">
        {{ $slot }}
        @foreach ($items as $item)
        <option {{ $entity[$fieldName] === $item[$itemValue] ? 'selected' : '' }} 
                value={{ $item[$itemValue] }}>
            {{ $item[$itemText] }}
        </option>
        @endforeach
    </select>

    @error($fieldName)
    <span class="help-block">
        {{ $message }}
    </span>
    @enderror
</div>