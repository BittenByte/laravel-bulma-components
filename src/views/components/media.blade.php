<div @include('bulma::partials.css-attributes', ['id' => (isset($id) ? $id : ''), 'class' => 'media '. (isset($class) ? $class : '')])>
    <div class="media-left">
        {{ $mediaLeft }}
    </div>
    <div class="media-content">
        {{ $slot }}
    </div>
</div>