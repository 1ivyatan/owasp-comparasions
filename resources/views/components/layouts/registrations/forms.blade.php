@props([
    'action',
    'method'
])

<form method="POST" class="space-y-3">
    @csrf

    <div>
        <x-forms.input label="E-pasts" name="email" type="email" placeholder="vards.uzvards@epasts.lv" autofocus />
    </div>
        
    <div>
        <x-forms.input label="Tālrunis" name="phone" type="tel" placeholder="29999999" />
    </div>

    <div>
        <x-forms.input label="Temats" name="title" type="text" placeholder="Paziņojums..." />
    </div>

    <div>
        <x-forms.textarea label="Ziņojums" name="message" placeholder="Ziņa..." />
    </div>

    <div>
        <x-forms.select label="Prioritāte" name="priority" placeholder="..." :items="[ ['name' => 'Zema', 'value' => 'low'], ['name' => 'Vidēja', 'value' => 'med'], ['name' => 'Augsta', 'value' => 'high'] ]" />
    </div>
        
    <x-button type="primary" class="w-full">{{ __('Saglabāt') }}</x-button>
</form>