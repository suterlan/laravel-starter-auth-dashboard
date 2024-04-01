<div 
  x-data="{ show: true }"
  x-show="show"
  x-transition
  x-init="setTimeout(() => show = false, 10000)"
  {{$attributes->merge([
    'class' => 'z-50 text-sm px-6 py-4 border-0 rounded-md absolute top-20 right-1 sm:right-5 mb-4 drop-shadow-lg'
  ])}}>
    <span class="text-xl inline-block mr-5 align-middle">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path d="M5.85 3.5a.75.75 0 00-1.117-1 9.719 9.719 0 00-2.348 4.876.75.75 0 001.479.248A8.219 8.219 0 015.85 3.5zM19.267 2.5a.75.75 0 10-1.118 1 8.22 8.22 0 011.987 4.124.75.75 0 001.48-.248A9.72 9.72 0 0019.266 2.5z" />
        <path fill-rule="evenodd" d="M12 2.25A6.75 6.75 0 005.25 9v.75a8.217 8.217 0 01-2.119 5.52.75.75 0 00.298 1.206c1.544.57 3.16.99 4.831 1.243a3.75 3.75 0 107.48 0 24.583 24.583 0 004.83-1.244.75.75 0 00.298-1.205 8.217 8.217 0 01-2.118-5.52V9A6.75 6.75 0 0012 2.25zM9.75 18c0-.034 0-.067.002-.1a25.05 25.05 0 004.496 0l.002.1a2.25 2.25 0 11-4.5 0z" clip-rule="evenodd" />
      </svg>      
    </span>
    
    <span class="inline-block align-middle mr-6">
      {{$slot}}
    </span>

    <button @click="show = false" class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mr-2 outline-none focus:outline-none">
      <span>×</span>
    </button>
</div>