{{-- <div class="md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-screen items-center flex-1 rounded mt-20"> --}}
  <ul class="md:flex-col md:min-w-full flex flex-col list-none pt-4 gap-1">
    <li class="items-center">
      <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
        <i class="fa-solid fa-house fa-lg opacity-75 mr-2"></i>
          {{ __('Dashboard')}}
      </x-nav-link>
    </li>
  </ul>

  <div class="my-3">
    <span class="text-slate-400 font-light text-sm">User Settings</span>
    <hr class="md:min-w-full" />
  </div>

  <ul class="md:flex-col md:min-w-full flex flex-col list-none gap-1">
    @can('view-users')
      <li class="items-center">
        <x-nav-link :href="route('admin.users')" :active="request()->routeIs('admin.users*')">
            <i class="fa-solid fa-users-gear fa-lg opacity-75 mr-2"></i>
            {{ __('Users')}}
        </x-nav-link>
      </li>
    @endcan
    @can('view-role')
      <li class="items-center">
        <x-nav-link :href="route('admin.roles')" :active="request()->routeIs('admin.roles*')">
          <i class="fa-solid fa-user-shield fa-lg opacity-75 mr-2"></i>
          {{ __('Roles')}}
        </x-nav-link>
      </li>
    @endcan
    @can('view-permission')
      <li class="items-center">
        <x-nav-link :href="route('admin.permission')" :active="request()->routeIs('admin.permission*')">
          <i class="fa-solid fa-file-shield fa-lg opacity-75 mr-2"></i>
          {{ __('Permission')}}
        </x-nav-link>
      </li>
    @endcan
  </ul>

  <div class="my-3">
    <span class="text-slate-400 font-light text-sm">Application</span>
    <hr class="md:min-w-full" />
  </div>

{{-- </div> --}}