<article @include('bulma::partials.css-attributes', ['id' => (isset($id) ? $id : ''), 'class' => 'message '. (isset($class) ? $class : '')])>
    <div class="message-header">
        <p>{{ $header }}</p>
        @if(isset($delete) and $delete)
            <button class="delete"></button>
        @endif
    </div>
    @if (!empty(trim($slot)))
        <div class="message-body">
            {{ $slot }}
        </div>
    @endif
</article>