<h1 class="font-bold text-xl mb-4">Friends</h1>
<ul>
    @foreach (range(1,8) as $item)
        <li class="mb-4">

            <div class="flex items-center text-sm">
                <img src="https://picsum.photos/40" alt="" class="rounded-full mr-2">
                Tengo
            </div>
        </li>
    @endforeach

</ul>
