<nav id="main-navigation" class="navbar navbar-tall fill dark active-red dropdown-menu dropdown-menu-on-demand" aria-label="Main">
    <div class="container" aria-label="Dropdown Menus">
        <a id="mobile-home" href="#"><span class="sr-only">Home</span></a>
        <button id="mobile-close"><span class="sr-only">Close menu</span></button>
        <ul>
            <li><a href="/">Template</a></li>
        </ul>
        <ul>
            <li>
                <a role="combobox" aria-expanded="false" data-aria-controls="dropdown-examples" aria-controls="dropdown-examples" tabindex="0">Examples</a>
                <ul id="dropdown-examples" role="listbox">
                    <li>
                        <a href="{{ route('examples/cds') }}">Cornell Design System</a>
                    </li>
                    <li>
                        <a href="{{ route('examples/form') }}">Form Inputs</a>
                        <a role="combobox" aria-expanded="false" data-aria-controls="dropdown-testing" aria-controls="dropdown-testing" tabindex="0">Testing</a>
                        <ul id="dropdown-testing" role="listbox">
                            <li>
                                <a href="{{ route('examples/testing/cds') }}">Cornell Design System</a>
                            </li>
                            <li>
                                <a href="{{ route('examples/testing/form') }}">Forms</a>
                            </li>
                            <li>
                                <a href="{{ route('examples/testing/errors') }}">Errors</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
