<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{--            {{ __('Dashboard') }}--}}
            <img src="images/tweet.svg" alt="">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="lg:flex">
                        <div class="lg:w-1/6 ">
                            @include('chikchika.navigation_links')
                        </div>
                        <div class="lg:flex-1 lg:mx-10">
                             @include('chikchika.publish_chiks')
                        <div class="border border-gray-300 rounded-lg my-4 p-2">
                             @foreach($chiks as $chik)
                                @include('chikchika.chiks')
                            @endforeach






                        </div>

                        </div>
                        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
                            @include('chikchika.friends_list')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
