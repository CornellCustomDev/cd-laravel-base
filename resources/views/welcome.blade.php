<x-cds.layout.app title="CD Laravel Base" subtitle="Custom Development">
    <x-cds.layout.main-article>
        <h1>Welcome to the CD Laravel Base Template!</h1>
        <p>This is a sample page using the Cornell Design System layout component.</p>
    </x-cds.layout.main-article>

    {{-- Just to demonstrate dark mode function --}}
    <aside>
        <div class="container">
            <div class="text-right full-margin">
                <button class="button red bear" x-data x-on:click="$flux.dark = ! $flux.dark">
                    Toggle Dark
                </button>
            </div>
        </div>
    </aside>

</x-cds.layout.app>
