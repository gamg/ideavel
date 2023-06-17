<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-6 text-gray-900 dark:text-gray-100s space-x-8">
                    <a href="{{ route('idea.create') }}" class="px-4 py-4 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-sm text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700">Agregar</a>
                    <a href="#" class="px-4 py-4 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-sm text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700">Las Mejores</a>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                @forelse($ideas as $idea)
                    <div class="p-6 flex space-x-2">
                    <svg fill="#ffffff" width="24px" height="24px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>lightbulb-on</title>
                                <path d="M20 24.75h-8c-0.69 0-1.25 0.56-1.25 1.25v2c0 0 0 0 0 0 0 0.345 0.14 0.658 0.366 0.885l2 2c0.226 0.226 0.538 0.365 0.883 0.365 0 0 0.001 0 0.001 0h4c0 0 0.001 0 0.002 0 0.345 0 0.657-0.14 0.883-0.365l2-2c0.226-0.226 0.365-0.538 0.365-0.883 0-0.001 0-0.001 0-0.002v0-2c-0.001-0.69-0.56-1.249-1.25-1.25h-0zM18.75 27.482l-1.268 1.268h-2.965l-1.268-1.268v-0.232h5.5zM27.125 12.558c0.003-0.098 0.005-0.214 0.005-0.329 0-2.184-0.654-4.216-1.778-5.91l0.025 0.040c-1.919-3.252-5.328-5.447-9.263-5.644l-0.027-0.001h-0.071c-3.934 0.165-7.338 2.292-9.274 5.423l-0.028 0.049c-1.17 1.687-1.869 3.777-1.869 6.031 0 0.012 0 0.025 0 0.037v-0.002c0.184 2.294 0.923 4.383 2.081 6.176l-0.032-0.052c0.322 0.555 0.664 1.102 1.006 1.646 0.671 0.991 1.314 2.13 1.862 3.322l0.062 0.151c0.194 0.455 0.637 0.768 1.153 0.768 0 0 0.001 0 0.001 0h-0c0.173-0 0.338-0.035 0.489-0.099l-0.008 0.003c0.455-0.194 0.768-0.638 0.768-1.155 0-0.174-0.036-0.34-0.1-0.49l0.003 0.008c-0.669-1.481-1.374-2.739-2.173-3.929l0.060 0.095c-0.327-0.523-0.654-1.044-0.962-1.575-0.939-1.397-1.557-3.083-1.71-4.901l-0.003-0.038c0.019-1.735 0.565-3.338 1.485-4.662l-0.018 0.027c1.512-2.491 4.147-4.17 7.185-4.332l0.022-0.001h0.052c3.071 0.212 5.697 1.934 7.162 4.423l0.023 0.042c0.864 1.293 1.378 2.883 1.378 4.593 0 0.053-0 0.107-0.002 0.16l0-0.008c-0.22 1.839-0.854 3.496-1.807 4.922l0.026-0.041c-0.287 0.487-0.588 0.968-0.889 1.446-0.716 1.066-1.414 2.298-2.020 3.581l-0.074 0.175c-0.067 0.148-0.106 0.321-0.106 0.503 0 0.69 0.56 1.25 1.25 1.25 0.512 0 0.952-0.308 1.146-0.749l0.003-0.008c0.625-1.33 1.264-2.452 1.978-3.52l-0.060 0.096c0.313-0.498 0.625-0.998 0.924-1.502 1.131-1.708 1.891-3.756 2.12-5.961l0.005-0.058zM15.139 5.687c-0.199-0.438-0.633-0.737-1.136-0.737-0.188 0-0.365 0.041-0.525 0.116l0.008-0.003c-2.463 1.415-4.215 3.829-4.711 6.675l-0.008 0.057c-0.011 0.061-0.017 0.132-0.017 0.204 0 0.617 0.447 1.129 1.035 1.231l0.007 0.001c0.063 0.011 0.135 0.018 0.209 0.018h0c0.615-0.001 1.126-0.446 1.23-1.031l0.001-0.008c0.366-2.067 1.575-3.797 3.252-4.852l0.030-0.017c0.437-0.2 0.735-0.634 0.735-1.138 0-0.187-0.041-0.364-0.115-0.523l0.003 0.008zM1.441 3.118l4 2c0.16 0.079 0.348 0.126 0.546 0.126 0.69 0 1.25-0.56 1.25-1.25 0-0.482-0.273-0.9-0.672-1.109l-0.007-0.003-4-2c-0.16-0.079-0.348-0.126-0.546-0.126-0.69 0-1.25 0.56-1.25 1.25 0 0.482 0.273 0.9 0.672 1.109l0.007 0.003zM26 5.25c0.001 0 0.001 0 0.002 0 0.203 0 0.395-0.049 0.564-0.135l-0.007 0.003 4-2c0.407-0.212 0.679-0.63 0.679-1.112 0-0.69-0.56-1.25-1.25-1.25-0.199 0-0.387 0.046-0.554 0.129l0.007-0.003-4 2c-0.413 0.21-0.69 0.631-0.69 1.118 0 0.69 0.559 1.25 1.249 1.25h0zM30.559 20.883l-4-2c-0.163-0.083-0.355-0.132-0.559-0.132-0.69 0-1.249 0.559-1.249 1.249 0 0.486 0.278 0.908 0.683 1.114l0.007 0.003 4 2c0.163 0.083 0.355 0.132 0.559 0.132 0.69 0 1.249-0.559 1.249-1.249 0-0.486-0.278-0.908-0.683-1.114l-0.007-0.003zM5.561 18.867l-3.913 1.83c-0.428 0.205-0.718 0.634-0.718 1.131 0 0.691 0.56 1.25 1.25 1.25 0.191 0 0.372-0.043 0.534-0.119l-0.008 0.003 3.913-1.83c0.428-0.205 0.718-0.634 0.718-1.131 0-0.691-0.56-1.25-1.25-1.25-0.191 0-0.372 0.043-0.534 0.119l0.008-0.003zM2 13.25h1c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0h-1c-0.69 0-1.25 0.56-1.25 1.25s0.56 1.25 1.25 1.25v0zM30 10.75h-1c-0.69 0-1.25 0.56-1.25 1.25s0.56 1.25 1.25 1.25v0h1c0.69 0 1.25-0.56 1.25-1.25s-0.56-1.25-1.25-1.25v0z"></path>
                            </g>
                        </svg>
                    <div class="flex-1 pl-3">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800 dark:text-gray-100">{{ $idea->user->name }}</span>
                                <small class="ml-2 text-sm text-gray-600 dark:text-gray-100">{{ $idea->created_at->format('d/m/Y') }}</small>
                                @unless($idea->created_at->eq($idea->updated_at))
                                    <small class="text-sm text-gray-400"> &middot; Editado</small>
                                @endunless
                            </div>
                            @auth
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link :href="$myroute='zzz'">
                                            {{ __('Ver') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="$myroute='zzz'">
                                            {{ __('Edit') }}
                                        </x-dropdown-link>
                                        <form method="POST" action="">
                                            @csrf
                                            @method('delete')
                                            <x-dropdown-link :href="$myroute='zzz'" onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Delete') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            @endauth
                        </div>
                        <p class="mt-3 text-lg text-gray-900 dark:text-gray-100">{{ $idea->title }}</p>
                        <small class="text-sm text-gray-400 flex mt-3">
                            <svg width="16px" height="16px" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>like [#1385]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-259.000000, -760.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M203,620 L207.200006,620 L207.200006,608 L203,608 L203,620 Z M223.924431,611.355 L222.100579,617.89 C221.799228,619.131 220.638976,620 219.302324,620 L209.300009,620 L209.300009,608.021 L211.104962,601.825 C211.274012,600.775 212.223214,600 213.339366,600 C214.587817,600 215.600019,600.964 215.600019,602.153 L215.600019,608 L221.126177,608 C222.97313,608 224.340232,609.641 223.924431,611.355 L223.924431,611.355 Z" id="like-[#1385]"> </path> </g> </g> </g> </g></svg>
                            <span class="ml-2">{{ $idea->likes }}</span>
                        </small>
                    </div>
                </div>
                @empty
                    <h2 class="text-xl text-white p-4">No existen ideas almacenadas!</h2>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
