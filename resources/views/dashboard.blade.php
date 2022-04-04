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
                            @include('layouts.navigation_links')
                        </div>
                        <div class="lg:flex-1 lg:mx-10">

                            <div class="border border-blue-400 rounded-lg p-8 ">
                                <form action="" class="py-2">
                                    <textarea
                                        name=""
                                        id=""
                                        class="w-full"
                                        placeholder="Whats up ?"
                                    ></textarea>
                                    <hr class="my-4">

                                    <footer class="flex justify-between">
                                           <img src="https://picsum.photos/40" alt="" class="rounded-full mr-2">
                                                      <button type="submit"
                                                              class="bg-blue-400 rounded-lg shadow text-white px-2 py-2">
                                              Chik
                                                      </button>

                                    </footer>

                                </form>
                            </div>

                            <div>


                            </div>

                        </div>
                        <div class="lg:w-1/6">
                            @include('layouts.friends_list')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
