<x-layout>
    <x-page-heading>Login</x-page-heading>

    <x-forms.form method="POST" action="/login" class="min-w-[20rem] md:min-w-[30rem] mb-8">
        <x-forms.input label="Your email" name="email" type="email" />

        <x-forms.input label="Password" name="password" type="password" />

        <x-forms.divider />

        <x-forms.button class="w-full">
            Login
        </x-forms.button>
    </x-forms.form>
</x-layout>
