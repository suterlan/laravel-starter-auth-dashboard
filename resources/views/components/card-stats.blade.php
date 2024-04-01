<div {{ $attributes->merge(['class' => 'relative flex flex-col min-w-0 break-words rounded-2xl mb-6 xl:mb-0 shadow-lg' ]) }}>
  <div class="flex-auto p-4">
    <div class="flex flex-wrap">
      <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
        <h5 class="text-blueGray-400 uppercase font-bold text-xs">
          {{$title}}
        </h5>
        <span class="font-semibold text-xl text-blueGray-700">
          {{$count}}
        </span>
      </div>
      <div class="relative w-auto pl-4 flex-initial">
        {{$icon}}
      </div>
    </div>
    <p class="text-sm text-blueGray-400 mt-4">
      {{$ket}}
    </p>
  </div>
</div>