<div @include('bulma::partials.css-attributes', ['id' => (isset($id) ? $id : ''), 'class' => 'media '. (isset($class) ? $class : '')])>
    @if(isset($mediaLeft))
        <div class="media-left">
            {{ $mediaLeft }}
        </div>
    @endif
    <div class="media-content">
        {{ $slot }}
    </div>
</div>