<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TrashPorter</title>
    @vite('resources/css/app.css')
</head>

<body class="max-w-[2000px] mx-auto text-neutral-900 dark:text-neutral-200 bg-white dark:bg-neutral-800">

    <nav class="mx-auto p-4">
        <div class="container mx-auto flex items-center justify-between pb-3 border-b-2">
            <a href="/"
                class="focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-sky-300 lg:absolute lg:left-1/2 lg:-translate-x-1/2 lg:top-9an z-50 hover:opacity-75 transition-opacity"
                aria-label="Go to homepage">
                <div class="w-40 mx-6">
                    <img src="assets/img/logo.PNG" width="200" class="py-0 w-48 md:w-64 lg:w-72"
                        alt="TrashPorter Logo">
                </div>
            </a>
            <button id="menu"
                class=" lg:hidden focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-sky-300 text-neutral-900 hover:text-neutral-600 transition-colors"
                aria-expanded="false" aria-label="Open Menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            
            <div role="menubar"
                class="hidden flex-col gap-4 absolute z-40 right-0 left-0 top-16 shadow-xl text-center text-lg p-6 items-center lg:flex lg:flex-row lg:static lg:shadow-none lg:justify-between lg:w-full">
                <a role="menuitem"
                    class="py-1 px-6 dark:text-neutral-900 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-sky-300 hover:text-neutral-600 transition-colors"
                    href="/">Home</a>
                <a role="menuitem"
                    class="py-1 px-6 dark:text-neutral-900 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-sky-300 hover:text-neutral-600 transition-colors"
                    href="/">Product</a>
                <a role="menuitem"
                    class="py-1 px-6 dark:text-neutral-900 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-sky-300 hover:text-neutral-600 transition-colors lg:mr-auto"
                    href="/">Catalog</a>
                <a role="menuitem"
                    class="py-1 px-6 dark:text-neutral-900 focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-sm ring-offset-4 ring-offset-sky-300 hover:text-neutral-600 transition-colors"
                    href="/">Login</a>
                <a role="menuitem"
                    class="py-2 px-6 bg-blue-500 text-white shadow-xl hover:shadow-none transition-shadow focus:outline-none focus-visible:ring-4 ring-neutral-900 rounded-md ring-offset-4 ring-offset-sky-300"
                    href="/">Sign Up</a>
            </div>
        </div>
    </nav>

    <main class="grid-rows">
        <section class="flex">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            {{-- <div class="
            flex
            absolute
            inset-0
            bottom-8
            md:bottom-24
            xl:bottom-32
            -z-10
            "> --}}
            <div
                class="
                mx-auto
                my-12
                lg:w-1/3
                md:w-5/6
                {{-- sm:w-3/4 sm:h-3/4
                md:w-full md:h-full --}} ">
                <img src="assets/img/trashcan.png" alt="trashcan" />
            </div>
            <div class="lg:mt-60 lg:mr-72 md:mt-20 md:mr-20 text-center">
                <h1 class="font-bold text-4xl tracking-tight text-gray-900 sm:text-6xl">Antar Jemput Sampah</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">Mengelola sampah membuat kita lebih menyayangi
                    lingkungan</p>

                <button
                    class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded-md mt-12">
                    Join Us
                </button>
            </div>
            {{-- </div>Antar Jemput Sampah
            Mengelola sampah membuat kita lebih
            menyayangi lingkungan --}}
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </section>
    </main>


    <script type="module" src="assets/js/main.js"></script>
</body>

</html>
