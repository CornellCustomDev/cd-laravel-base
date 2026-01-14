<nav id="main-navigation" class="navbar navbar-tall fill dark active-red dropdown-menu dropdown-menu-on-demand" aria-label="Main">
    <div class="container" aria-label="Dropdown Menus">
        <a id="mobile-home" href="/"><span class="sr-only">Home</span></a>
        <button id="mobile-close" type="button"><span class="sr-only">Close menu</span></button>

        <ul>
            <x-cds.nav-item :href="route('home')">
                Template
            </x-cds.nav-item>
        </ul>
        <ul>
            <x-cds.nav-group match="examples/*">
                <a role="combobox"
                   aria-expanded="false"
                   aria-controls="dropdown-examples"
                   data-aria-controls="dropdown-examples"
                   tabindex="0">
                    Examples
                </a>

                <ul id="dropdown-examples" role="listbox">
                    <x-cds.nav-item :href="route('examples/cds')">
                        Cornell Design System
                    </x-cds.nav-item>

                    <x-cds.nav-item :href="route('examples/form')">
                        Forms
                    </x-cds.nav-item>

                    <x-cds.nav-item :href="route('examples/errors')">
                        Errors
                    </x-cds.nav-item>

                    <x-cds.nav-item :href="route('examples/table')">
                        Table
                    </x-cds.nav-item>

                    <x-cds.nav-item :href="route('examples/user-examples')">
                        User Examples
                    </x-cds.nav-item>
                </ul>
            </x-cds.nav-group>
        </ul>
    </div>
</nav>
