<nav id="main-navigation" class="navbar navbar-tall fill dark active-red dropdown-menu dropdown-menu-on-demand" aria-label="Main">
    <div class="container" aria-label="Dropdown Menus">
        <a id="mobile-home" href="#"><span class="sr-only">Home</span></a>
        <button id="mobile-close"><span class="sr-only">Close menu</span></button>
        <ul>
            <li>
                <x-layouts.nav-link href="/">
                    Template
                </x-layouts.nav-link>
            </li>
        </ul>
        <ul>
            <li>
                <x-layouts.nav-link href="active.active-nav-link">
                    Active Link - RAW URL
                </x-layouts.nav-link>
            </li>
        </ul>
        <ul>
            <li>
                <a role="combobox" aria-expanded="false" data-aria-controls="dropdown-examples" aria-controls="dropdown-examples" tabindex="0">Examples</a>
                <ul id="dropdown-examples" role="listbox">
                    <li>
                        <x-layouts.nav-link href="{{ route('examples/cds') }}">
                            Cornell Design System
                        </x-layouts.nav-link>
                    </li>
                    <li>
                        <a href="{{ route('examples/form') }}">Forms</a>
                    </li>
                    <li>
                        <a href="{{ route('examples/errors') }}">Errors</a>
                    </li>
                    <li>
                        <a href="{{ route('examples/table') }}">Table</a>
                    </li>
                    <li>
                        <a href="{{ route('examples/user-examples') }}">User Examples</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
