@auth
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>

{{--    <x-nav-link :href="route('calendar')" :active="request()->routeIs('dashboard')">--}}
{{--        {{ __('Kalender') }}--}}
{{--    </x-nav-link>--}}

    @if (auth()->user()->role_id === 1)
        <x-nav-link :href="route('users.admin')" :active="request()->routeIs('admin')">
            {{ __('Administratief') }}
        </x-nav-link>
    @endif
@endauth
