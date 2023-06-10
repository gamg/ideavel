<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-xl pb-3">My Idea Title - lacinia suscipit tellus</h1>
                    <p>Praesent augue risus, lacinia suscipit tellus sed, porta eleifend ipsum. Donec iaculis nulla nec mi consectetur malesuada. Sed dictum leo tortor, a lacinia ante pulvinar ut. Donec imperdiet, enim et lacinia consequat, metus leo aliquam nunc, vel commodo nisi diam in ex. Curabitur eget tincidunt elit. Phasellus porta tristique odio, nec ornare nibh consectetur a. Sed velit enim, volutpat sed molestie nec, tincidunt a quam.</p>
                    <form method="POST" action="">
                        @csrf
                        @method('put')
                        <div class="mt-4 space-x-8">
                            <x-primary-button>Like/Unlike</x-primary-button>
                            <a href="#" class="dark:text-gray-100">{{ __('Back') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
