<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Cafe | Food List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="p-4 shadow-sm bg-black ">
        <div class="inline-block text-lg text-white">
            <h1>Gajah Gembrot Ungu ki asu ncen</h1>
        </div>
        <div class="text-white  float-right rounded-full mx-1 px-2 "><a href="#" class="align-middle">Log Out</a></div>
        <div class="text-white  float-right rounded-full mx-1 px-2"><a href="#" class="align-middle">About</a></div>
        <div class="text-white  float-right rounded-full mx-1 px-2 "><a href="#" class="align-middle">Home</a></div>
    </header>
    <div class="container mt-4 mx-auto">
        <div class="flex justify-evenly">
            <form>
                <div class="flex items-center justify-center ">
                    <div class="flex border-2 border-gray-200 rounded">
                        <input type="text" class="px-4 py-2 w-80" placeholder="Nama Pelanggan">
                        <button class="px-4 text-black bg-white border-l font-2xl hover:bg-black hover:text-white">
                            +
                        </button>
                    </div>
                </div>
            </form>
            <form>
                <div class="flex items-center justify-center">
                    <div class="flex border-2 rounded">
                        <input type="text" class="px-4 py-2 w-80" placeholder="Search...">
                        <button class="flex items-center justify-center px-4 border-l ">
                            <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div class="card m-2 cursor-pointer border border-gray-400 rounded-lg hover:shadow-md hover:border-opacity-0 transform hover:-translate-y-1 transition-all duration-200">
                <div class="m-3">
                    <img src="assets/images/burger.png">
                    <h2 class="text-lg mb-2 mt-2 font-bold -tracking-longer">Burger</h2>
                    <ul>
                        <li>
                            <div class="flex items-center space-x-4 ">
                                <div class="flex-1 min-w-0">
                                    Harga :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    $2
                                </div>
                            </div>
                            <div class="flex items-center space-x-4  mt-2">
                                <div class="flex-1 min-w-0">
                                    Kategori :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    Makanan
                                </div>
                            </div>
                            <div class="flex items-center space-x-4  mt-2">
                                <div class="flex-1 min-w-0">
                                    Status :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    Tersedia
                                </div>
                            </div>
                            <div class="flex items-center space-x-4  mt-2">
                                <div class="flex-1 min-w-0">
                                    Qty :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    <form>
                                        <input type="number" class="border border-black p-1">
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card m-2 cursor-pointer border border-gray-400 rounded-lg hover:shadow-md hover:border-opacity-0 transform hover:-translate-y-1 transition-all duration-200">
                <div class="m-3">
                    <img src="assets/images/esteh.png" class="p-2 h-52 mx-auto">
                    <h2 class="text-lg mb-2 mt-1 font-bold -tracking-longer">Es Teh</h2>
                    <ul>
                        <li>
                            <div class="flex items-center space-x-4 ">
                                <div class="flex-1 min-w-0">
                                    Harga :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    $0.5
                                </div>
                            </div>
                            <div class="flex items-center space-x-4  mt-2">
                                <div class="flex-1 min-w-0">
                                    Kategori :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    Minuman
                                </div>
                            </div>
                            <div class="flex items-center space-x-4  mt-2">
                                <div class="flex-1 min-w-0">
                                    Status :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    Tersedia
                                </div>
                            </div>
                            <div class="flex items-center space-x-4  mt-2">
                                <div class="flex-1 min-w-0">
                                    Qty :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    <form>
                                        <input type="number" class="border border-black p-1">
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card m-2 cursor-pointer border border-gray-400 rounded-lg hover:shadow-md hover:border-opacity-0 transform hover:-translate-y-1 transition-all duration-200">
                <div class="m-3">
                    <img src="assets/images/burger.png">
                    <h2 class="text-lg mb-2 mt-2">Burger</h2>
                    <ul>
                        <li>
                            <div class="flex items-center space-x-4 ">
                                <div class="flex-1 min-w-0">
                                    Harga :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    $2
                                </div>
                            </div>
                            <div class="flex items-center space-x-4  mt-2">
                                <div class="flex-1 min-w-0">
                                    Kategori :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    Makanan
                                </div>
                            </div>
                            <div class="flex items-center space-x-4  mt-2">
                                <div class="flex-1 min-w-0">
                                    Status :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    Tersedia
                                </div>
                            </div>
                            <div class="flex items-center space-x-4  mt-2">
                                <div class="flex-1 min-w-0">
                                    Qty :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    <form>
                                        <input type="number" class="border border-black p-1">
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card m-2 cursor-pointer border border-gray-400 rounded-lg hover:shadow-md hover:border-opacity-0 transform hover:-translate-y-1 transition-all duration-200">
                <div class="m-3">
                    <img src="assets/images/esteh.png" class="p-2 h-52 mx-auto">
                    <h2 class="text-lg mb-2 mt-1 font-bold -tracking-longer">Es Teh</h2>
                    <ul>
                        <li>
                            <div class="flex items-center space-x-4 ">
                                <div class="flex-1 min-w-0">
                                    Harga :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    $0.5
                                </div>
                            </div>
                            <div class="flex items-center space-x-4  mt-2">
                                <div class="flex-1 min-w-0">
                                    Kategori :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    Minuman
                                </div>
                            </div>
                            <div class="flex items-center space-x-4  mt-2">
                                <div class="flex-1 min-w-0">
                                    Status :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    Tersedia
                                </div>
                            </div>
                            <div class="flex items-center space-x-4  mt-2">
                                <div class="flex-1 min-w-0">
                                    Qty :
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    <form>
                                        <input type="number" class="border border-black p-1">
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>