@props(['disabled' => false])

<div class="relative flex w-full flex-wrap items-stretch mb-3">
    <span class="z-10 h-full leading-snug font-normal absolute text-center text-slate-300 bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
        {{$icon}}
    </span>
  
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'class' => 'px-3 py-3 placeholder-slate-300 relative text-sm w-full pl-10 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-300 dark:focus:border-indigo-600 focus:ring-indigo-200 dark:focus:ring-indigo-600 rounded-md shadow-sm'
        ]) !!}>
</div>

    
  {{-- <input class="px-3 py-3 placeholder-blueGray-300 relative text-sm w-full pl-10 "/> --}}