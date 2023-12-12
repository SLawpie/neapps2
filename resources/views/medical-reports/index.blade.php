<x-app-layout>
    <x-slot name="header">
        <h2 class="bg-white dark:bg-slate-700 font-semibold text-xl text-slate-800 dark:text-gray-100 leading-tight">
            {{ __('medical-reports.name') }}
        </h2>
    </x-slot>

    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-700 text-slate-800 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 order-b border-gray-200">
                    Wykaz przeprowadzonych badań dla konkretnego lekarza.
                </div>
            </div>
        </div>
    </div>
    <div class="pt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-700 text-slate-800 dark:text-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 order-b border-gray-200">
                    
                    <form action="{{ route('medical-reports.import-file') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <div class="">
                            <div class="col-lg-6 col-xl-5">

                                <x-auth-validation-errors 
                                    class="mb-4" 
                                    :errors="$errors" 
                                />

                                <div class="custom-file flex flex-row">
                                    <div class="wait relative basis-full md:basis-1/3">
                                        <div class="">
                                            <label for="file-upload" class="custom-file-upload">
                                                <input id="file-upload" type="file" name="file" class="hidden" />
                                                <div id="file-upload-choose" class="w-full px-4 py-2 flex justify-center bg-blue-500 dark:bg-fuchsia-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-opacity-80 dark:hover:bg-opacity-80 active:bg-blue-500 dark:active:bg-fuchsia-500 focus:outline-none focus:border-blue-500 dark:focus:border-fuchsia-500 focus:ring ring-blue-500 dark:ring-fuchsia-500 disabled:opacity-25 transition ease-in-out duration-150 cursor-pointer">
                                                    wybierz plik
                                                </div>
                                            </label>
                                            <div class="pt-2">
                                                <div class="flex justify-center font-bold">
                                                    <div id="file-upload-title" class="hidden">
                                                        nazwa pliku z badaniami
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="file-upload-send" class="pt-6 hidden" onclick="pleaseWait(0)">
                                                <x-button type="submit" name="submit" class="w-full ">
                                                    <div id="please-wait-text-0" class="w-full flex justify-center items-center">
                                                        wczytaj plik
                                                    </div>
                                                    <div id="please-wait-0" class="hidden w-full ">
                                                        <div class="flex justify-center items-center">
                                                            <x-icons.wait class="text-white"/>
                                                            <div class="ml-3">
                                                                proszę czekać...
                                                            </div>
                                                        </div>
                                                   </div>
                                                </x-button>
                                            </div>
                                        </div>
                                    </div>
                                 </div>  
                            </div>
                        </div>
                    </form>

                    <script type="application/javascript">
//                     $('input[type="file"]').change(function(e){
//                            var fileName = e.target.files[0].name;
//                            $('.custom-file-label').html(fileName);
//                        });

                        $('input[type="file"]').change(function(e){
                            var fileName = e.target.files[0].name;
                            $('#file-upload-choose').html('ponów wybór pliku');
                            $('#file-upload-title').html(fileName);
                            $('#file-upload-title').toggleClass('hidden', false);
                            $('#file-upload-send').toggleClass('hidden', false);
                       });

                    </script>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
