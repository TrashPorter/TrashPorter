<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TrashPorter</title>
    @vite('resources/css/app.css')
</head>

<body class="max-w-[2000px] 
mx-auto 
text-neutral-900 
dark:text-neutral-200
bg-white
dark:bg-neutral-800
">

    <nav class="mx-auto p-4">
        <div class="container
    mx-auto
    flex
    items-center
    justify-between
    pb-4
    border-b-2
    ">
            <a href="/"
                class="
        focus:outline-none 
        focus-visible:ring-4
        ring-neutral-900
        rounded-sm
        ring-offset-4
        ring-offset-sky-300
        lg:absolute
        lg:left-1/2 
        lg:-translate-x-1/2
        lg:top-9an
        z-50
        hover:opacity-75
        transition-opacity
        "
                aria-label="Go to homepage">
                <div class="w-40 mx-6">
                    <img src="assets/img/logo.PNG" width="200" class="py-0 w-48 md:w-64 lg:w-72"
                        alt="TrashPorter Logo">
                </div>
            </a>
            <button id="menu"
                class="
        lg:hidden
        focus:outline-none 
        focus-visible:ring-4
        ring-neutral-900
        rounded-sm
        ring-offset-4
        ring-offset-sky-300
        text-neutral-900
        hover:text-neutral-600
        transition-colors
        "
            aria-expanded="false" aria-label="Open Menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div role="menubar"
                class="
            hidden
            flex-col
            gap-4
            absolute
            z-40
            right-0
            left-0
            top-16
            shadow-xl
            text-center
            text-lg
            p-6
            items-center
            lg:flex
            lg:flex-row
            lg:static
            lg:shadow-none
            lg:justify-between
            lg:w-full
        ">
                <a role="menuitem"
                    class="
                py-1
                px-6
                
                dark:text-neutral-900
                focus:outline-none
                focus-visible:ring-4
                ring-neutral-900
                rounded-sm
                ring-offset-4
                ring-offset-sky-300
                hover:text-neutral-600
                transition-colors"
                    href="/">Home</a>
                <a role="menuitem"
                    class="
                py-1
                px-6
                dark:text-neutral-900
                focus:outline-none
                focus-visible:ring-4
                ring-neutral-900
                rounded-sm
                ring-offset-4
                ring-offset-sky-300
                hover:text-neutral-600
                transition-colors"
                    href="/">Product</a>
                <a role="menuitem"
                    class="
                py-1
                px-6
                dark:text-neutral-900
                focus:outline-none
                focus-visible:ring-4
                ring-neutral-900
                rounded-sm
                ring-offset-4
                ring-offset-sky-300
                hover:text-neutral-600
                transition-colors
                lg:mr-auto"
                    href="/">Catalog</a>
                <a role="menuitem"
                    class="
                py-1
                px-6
                dark:text-neutral-900
                focus:outline-none
                focus-visible:ring-4
                ring-neutral-900
                rounded-sm
                ring-offset-4
                ring-offset-sky-300
                hover:text-neutral-600
                transition-colors
                "href="/">Login</a>
                <a role="menuitem"
                    class="
                py-2
                px-6
                bg-sky-800
                text-white
                shadow-xl
                hover:shadow-none
                transition-shadow
                focus:outline-none
                focus-visible:ring-4
                ring-neutral-900
                rounded-md
                ring-offset-4
                ring-offset-sky-300"
                    href="/">Sign Up</a>
            </div>
        </div>
    </nav>

    <header class="relative pt-16 md:pt-24 lg:pt-48">
        <div
            class="
    absolute
    inset-0
    bottom-8
    md:bottom-24
    xl:bottom-32
    -z-10
    ">
        <div class="container
        mx-auto
        grid
        grid-rows-1
        place-items-end
        px-2">
            <img src="assets/img/trashcan.png" 
            class="
            row-start-1
            row-end-2
            col-start-1
            col-end-2
            mx-auto
            " 
            alt="trashcan">
        </div>
        <div>
            
        </div>
    </header>
    <script type="module" src="assets/js/main.js"></script>
</body>

</html>
