@props([
    'action',
    'method',
    'content'
])

<form method="{{ $method }}" class="space-y-3" action={{ $action }}>
    @csrf
    @method($method)

    <div>
        <x-forms.input label="E-pasts" name="email" type="email" placeholder="vards.uzvards@epasts.lv" autofocus value="{{ isset($content) ? $content->email : '' }}"/>
    </div>
        
    <div>
        <x-forms.input label="Tālrunis" name="phone" type="tel" placeholder="2*******" value="{{ isset($content) ? $content->phone : '' }}"/>
    </div>

    <div>
        <x-forms.input label="Temats" name="title" type="text" placeholder="Paziņojums..." value="{{ isset($content) ? $content->title : '' }}"/>
    </div>

    <div>
        <x-forms.textarea label="Ziņojums" name="message" placeholder="Ziņa..." value="{{ isset($content) ? $content->message : '' }}"/>
    </div>

    <div>
        <x-forms.select label="Prioritāte" name="priority" placeholder="..." :items="App\Enums\Registration\Priority::values()" value="{{ isset($content) ? $content->priority : '' }}"/>
    </div>
        
    <x-button type="primary" class="w-full">{{ __('Saglabāt') }}</x-button>
</form>