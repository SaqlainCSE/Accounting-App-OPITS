@props(['field'])

@error ($field)
    <div class="small text-danger">
        <i class="fa-solid fa-exclamation-circle"></i>
        {{ $message }}
    </div>
@enderror
