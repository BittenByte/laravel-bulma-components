<div @include('bulma::partials.css-attributes', ['id' => (isset($id) ? $id : ''), 'class' => 'card '. (isset($class) ? $class : '')])>
    @if(isset($header))
        <header class="card-header">
            <p class="card-header-title">
                {{ $header }}
            </p>
            <a class="card-header-icon">
              <span class="icon">
                <i class="fa fa-angle-down"></i>
              </span>
            </a>
        </header>
    @endif

    @if(isset($cardImage))
        <div class="card-image">
            <figure class="image is-4by3">
                <img src="{{ $cardImage['src'] }}" alt="{{ $cardImage['alt'] }}">
            </figure>
        </div>
    @endif

    <div class="card-content">
        @if(isset($media))
            {{ $media }}
        @endif

        <div class="content">
            {{ $slot }}
        </div>
    </div>

    @if(isset($footer))
        <footer class="card-footer">
            {{ $footer }}
        </footer>
    @endif
</div>