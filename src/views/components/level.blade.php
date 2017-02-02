<nav @include('bulma::partials.css-attributes', ['id' => (isset($id) ? $id : ''), 'class' => 'level '. (isset($class) ? $class : '')])>
    @if(isset($leftSide))
        <div class="level-left">
            {{-- level items or elements --}}
            {{ $leftSide }}
        </div>
    @endif
    @if(isset($rightSide))
        <div class="level-right">
            {{-- level items or elements --}}
            {{ $rightSide }}
        </div>
    @endif
    {{ $slot }}
</nav>