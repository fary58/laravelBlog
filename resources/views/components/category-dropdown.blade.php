<div>
    <x-dropdown>


        <x-slot name="trigger">
            <button @click="show = true" class="py-2 pl-3 pr-9 text-sm font-semibold w-32 text-left">
                {{isset($currentCategory) ? ucwords($currentCategory->name) :' Categories'}}
            </button>
        </x-slot>

        <a href="/blog/public/"
           class="block tex-left px-3 leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white" href="1"

        >All</a>
        @foreach($categories as $category)
            <a href="/blog/public/?category={{$category->slug}}"
               class="block tex-left px-3 leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white
                        {{isset($currentCategory) && $currentCategory->id ===  $category->id ? 'bg-blue-500 text-white' : ''}}"

            >{{$category->name}}</a>
        @endforeach


    </x-dropdown>
</div>
