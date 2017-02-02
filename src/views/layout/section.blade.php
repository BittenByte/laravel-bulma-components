<section @include('bulma::partials.css-attributes', ['id' => (isset($id) ? $id : ''), 'class' => 'section '. (isset($class) ? $class : '')])>
    <div class="container">
        {{ $slot }}
    </div>
</section>