<x-layouts.app :title="__('Izveidot pieteikumu')">

    <form method="POST" class="space-y-3">
        @csrf

        <div>
            <x-forms.input label="E-pasts" name="email" type="email" placeholder="vards.uzvards@epasts.lv" autofocus />
        </div>

    </form>

</x-layouts.app>