<x-layout.app title="CD Laravel Base" subtitle="Custom Development">
    <x-layout.main-article>
        <h1>Form Inputs</h1>

        <h2>Text Input</h2>
        <x-cds.input
            label="Input with Error and Descriptions"
            name="field-error-desc"
            description="This field shows most of the standard features used in a basic html input"
            description-trailing="A field that shows an error message and trailing description."
            error:message="This field has an error."
            required
        />
    </x-layout.main-article>
</x-layout.app>
