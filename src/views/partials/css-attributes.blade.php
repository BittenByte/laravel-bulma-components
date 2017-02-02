@foreach(['id', 'class'] as $attr)
    @if(isset($$attr) and !empty($attr)) {{ $attr }}="{{ $$attr }}" @endif 
@endforeach
