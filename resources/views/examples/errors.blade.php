<x-layouts.app title="CD Laravel Base" subtitle="Custom Development">
    <x-layouts.main-article>
        <div class="container">
            <h1>Errors</h1>
            <p>This page is used to test error handling in the application.</p>

            @php
                // Simulate validation errors for demonstration purposes
                $errors = new Illuminate\Support\MessageBag();
                $errors->add('field-error', 'Input is a required field. Please find it <a href="">here - link to input</a>');
            @endphp
            <x-cds.callout-error :$errors />

            <x-cds.input
                label="Input with Error" name="field-error"
                error:message="This field has an error."
                invalid
            />
        </div>
    </x-layouts.main-article>
</x-layouts.app>
