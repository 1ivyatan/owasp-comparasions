<x-layouts.app>
    <div class="mb-6 flex items-center text-sm">
        <a href="{{ route('main') }}"
            class="text-blue-600 dark:text-blue-400 hover:underline">{{ __('Sākums') }}</a>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2 text-gray-400" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
        <span class="text-gray-500 dark:text-gray-400">{{ __('Drošības salīdzinājumi') }}</span>
    </div>

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ __('Drošības salīdzinājumi')}}</h1>
    </div>

    <p class="mb-5"> Laravel ietvars jau ir sagatavojis drošības risinājumus salīdzinot ar parasto PHP, kurā pašam izstrādātājam ir jāsagatavo drošības risinājumus. </p>

    <div class="relative flex flex-col h-full text-gray-700 bg-white shadow-md rounded-lg bg-clip-border mb-4">
    <table class="w-full text-left table-auto text-slate-800">
        <thead>
            <tr class="text-slate-500 border-b border-slate-300 bg-slate-50">
                <th class="p-4">
                     Problēmas
                </th>
                <th class="p-4">PHP</th>
                <th class="p-4">+ Laravel</th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-slate-50">
                <td class="p-4">
                    <p class="text-sm">
                        Broken Access Control
                    </p>
                </td>
                <td class="p-4 overflow-scroll ">
                    <p class="text-sm">
                        Manuāli izmantot sesijas datus un salīdzināt ar noteiktām vērtībām.
                    </p>
                </td>
                <td class="p-4  overflow-scroll ">
                    <p class="text-sm">
                        Laravel piedāvā Middleware komponenti, kura jau filtrē pieprasījumus. Bieži tā tiek izmantota autentifikācijai un CSRF aizsardzībai.
                    </p>
                </td>
            </tr>

            <tr class="hover:bg-slate-50">
                <td class="p-4">
                    <p class="text-sm">
                        Injection
                    </p>
                </td>
                <td class="p-4 overflow-scroll ">
                    <p class="text-sm">
                        PHP funkcionalitātes kā PDO piedāvā apstrādāt pašus vaicājumus, lai aizsargātos no injekcijām.
                        PHP izmanto <pre>htmlspecialchars</pre>, lai filtrētu izvadītos datus.
                    </p>
                </td>
                <td class="p-4  overflow-scroll ">
                    <p class="text-sm">
                        Laravel jau sagatavotās komponentes palīdzēs aizsargāties no injekcijas uzbrukumiem. Ievades apstrādē jau piedāvā klases un modeļus, kurā var definēt datu veidus un ierobežojumus, kurā jau apstrādes laikā pēc noteiktiem iestatījumiem pārbauda un filtrē pieprasījumus, kuras iekļauj injekciju aizsardzības. Izvadē ar Blade var izmantot dubultfigūriekavas, kuras jau apstrādā izvadītos datus pret XSS uzbrukumiem.
                    </p>
                </td>
            </tr>


            <tr class="hover:bg-slate-50">
                <td class="p-4">
                    <p class="text-sm">
                        CSRF
                    </p>
                </td>
                <td class="p-4 overflow-scroll ">
                    <p class="text-sm">
                        Pašam jāveido drošības kodu vai žetonu, kuras gala produkts nav vienmēr drošākā, atkarībā kuras funkcionalitātes tika izmantotas.
                    </p>
                </td>
                <td class="p-4  overflow-scroll ">
                    <p class="text-sm">
                        Laravel jau katrā sesijā veido žetonu. Veidlapās ar Blade var ierakstīt <pre>{{ '@'.'csrf' }}</pre>, kas izveidos neredzamu lauku un iesneigšanas laikā mitināta aplikācija salīdzinās ar sesijā izveidotu žetonu un turpinās darbību, ja ir vienādas.
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    </div>

</x-layouts.app>
