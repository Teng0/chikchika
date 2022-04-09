<div class="border border-blue-400 rounded-lg p-8 ">
    <form action="{{url('chik')}}" method="post" class="py-2">
        @csrf

        <textarea
             name="body"
             id="body"
             class="w-full"
             placeholder="Whats up ?"
         ></textarea>
        <hr class="my-4">

        <footer class="flex justify-between">
            <img src="{{auth()->user()->avatar}}" alt="" class="rounded-full mr-2">
            <button type="submit"
                    class="bg-blue-400 rounded-lg shadow text-white px-2 py-2">
                Chik
            </button>

        </footer>

    </form>
    @error('body')
        <p class="text-red-600">{{$message}}</p>
    @enderror

</div>
