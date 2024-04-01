<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold md:text-lg md:text-slate-700 dark:text-gray-200 leading-tight">
            {{ __($title) }}
        </h2>
    </x-slot>
    
    <x-slot:stats>
        <div class="px-4 pt-6 mx-auto w-full">
            <div>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <x-card-stats class="bg-white dark:bg-slate-800 text-slate-400">
                            <x-slot name="title">
                                Karyawan
                            </x-slot>
                            <x-slot name="count">
                                {{$jmlKaryawan}}
                            </x-slot>
                            <x-slot name="icon">
                                <x-card-stats-icon class="bg-white dark:bg-indigo-700">
                                    <i class="fa-solid fa-users dark:text-indigo-300"></i>
                                </x-card-stats-icon>
                            </x-slot>
                            <x-slot name="ket">
                                <span class="whitespace-nowrap">
                                    Jumlah karyawan
                                </span>
                            </x-slot>
                        </x-card-stats>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:stats>

</x-app-layout>
