<div class="w-full h-full flex justify-center items-center">
    @if ($state == 'search')
    <div class="w-1/3 h-1/3 p-5 flex flex-col justify-around bg-white rounded-md shadow-xl">
        <h1 class="w-full text-center text-4xl font-semibold">WikiMedia</h1>
        <form wire:submit.prevent="submitSearch">
            <label class="text-xl font-semibold" for="text-search">Search</label><br>
            <input class="w-full px-3 py-1 border-2 rounded-md focus:outline-blue-400" wire:model="search" type="text"
            id="text-search"
            name="search"
            placeholder="Search..."
            >
            <input type="radio" name="lang" value="Id" wire:model="lang"><label>Id</label>
            <input type="radio" name="lang" value="En" wire:model="lang"><label>En</label>
        </form>
    </div>
        @if ($username == "Anonymous")
        <div wire:click="openLoginModal" class="w-16 h-16 absolute top-5 right-5 flex justify-center items-center rounded-full shadow-xl hover:animate-[expand_.1s_linear] hover:cursor-pointer" style="animation-fill-mode: forwards">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-1/2 h-1/2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
        </div>
        @endif
    @elseif ($state == 'login')
    <div class="w-full h-full flex justify-center items-center bg-gray-200">
        <div class="w-1/4 h-1/2 p-5 flex flex-col items-center bg-white">
            @if ($errors->any())
                <div class="fixed top-0 right-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="p-5 mt-5 bg-red-300 border-2 border-red-700 rounded-xl">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="w-full flex flex-col gap-5" action="/login" method="POST">
                @csrf
                <h2 class="self-center text-2xl font-semibold">Login</h2>
                <div>
                    <label class="text-xl font-semibold" for="text-username">Username</label><br>
                    <input class="w-full px-3 py-1 border-2 rounded-md focus:outline-blue-400" type="text"
                    id="text-username" 
                    name="username"
                    placeholder="Username"
                    required="true"
                    ><br>
                    <span class="text-sm font-medium text-gray-400 opacity-80">Only Alphabets, 3 to 20 Characters.</span>
                </div>
                <div>
                    <label class="text-xl font-semibold" for="password-password">Password</label><br>
                    <input class="w-full px-3 py-1 border-2 rounded-md focus:outline-blue-400" type="password"
                    id="password-password" 
                    name="password" 
                    placeholder="Password"
                    required="true"
                    ><br>
                    <span class="text-sm font-medium text-gray-400 opacity-80">Password is Required</span>
                </div>
                <div class="mb-3 flex justify-end">
                    <input class="w-full px-3 py-1 border-2 rounded-md hover:border-blue-400" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    @endif
</div>
