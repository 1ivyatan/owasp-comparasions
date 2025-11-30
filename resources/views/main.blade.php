<x-layouts.app>
    <div class="mb-6 flex items-center text-sm">
        <span class="text-gray-500 dark:text-gray-400">{{ __('Sākums') }}</span>
    </div>

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ __('Kas ir Laravel?')}}</h1>
    </div>

<ul class="space-y-4 text-body list-disc list-inside text-gray-600 dark:text-gray-400">
    <li> Laravel ir populārākais PHP ietvars (framework), kas palīdz veidot tīmekļa
projektus efektīvāk un strukturētāk. Tas atvieglo bieži sastopamus uzdevumus:
maršrutēšana, autentifikācija, datu bāzes darbs utt.</li>
    <li>Laravel ir balstīts uz MVC (Model-View-Controller) arhitektūru.</li>
    <li>
        Tas piedāvā:
        <ul class="ps-5 mt-2 space-y-1 list-disc  list-inside">
            <li> Maršrutēšanu (routing) </li>
            <li> Blade šablonus (templating) </li>
            <li> Datu bāzes ORM (Eloquent) </li>
            <li> Validāciju, autentifikāciju, e-pastu u.c. </li>
        </ul>
    </li>
</ul>

</x-layouts.app>
