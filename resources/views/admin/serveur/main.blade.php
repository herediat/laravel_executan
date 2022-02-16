@extends('layouts.index')

@section('content')
<h1 class="">Bienvenu sur le serveur</h1>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
</div>

<!-- This is an example component -->
<div class="max-w-2xl mx-auto flex justify-center ">

    <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mx-96">
        <div class="flex flex-col items-center pb-10 w-96">
            <img class="mb-3 w-24 h-24 rounded-full shadow-lg"
                src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Bonnie image">
            <h3 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h3>
            <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
            <div class="flex mt-4 space-x-3 lg:mt-6">
                <a href="#"
                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                    friend</a>
            </div>
        </div>
    </div>
</div>






<script>
    let icon1 = document.getElementById("icon1");
    let menu1 = document.getElementById("menu1");
    const showMenu1 = (flag) => {
        if (flag) {
            icon1.classList.toggle("rotate-180");
            menu1.classList.toggle("hidden");
        }
    };
    let icon2 = document.getElementById("icon2");

    const showMenu2 = (flag) => {
        if (flag) {
            icon2.classList.toggle("rotate-180");
        }
    };
    let icon3 = document.getElementById("icon3");

    const showMenu3 = (flag) => {
        if (flag) {
            icon3.classList.toggle("rotate-180");
        }
    };

    let Main = document.getElementById("Main");
    let open = document.getElementById("open");
    let close = document.getElementById("close");

    const showNav = (flag) => {
        if (flag) {
            Main.classList.toggle("-translate-x-full");
            Main.classList.toggle("translate-x-0");
            open.classList.toggle("hidden");
            close.classList.toggle("hidden");
        }
    };

</script>
@endsection
