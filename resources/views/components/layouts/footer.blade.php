<footer class="bg-teal-800 min-h-screen">

    <div class="bg-gray-400 text-right text-sm p-2">Be Agile. Run Agile</div>

    <div class="flex flex-col sm:flex-row">

        <div class="flex-1 text-center sm:text-left text-white p-8 ">
            <img src="/images/baykus_orange.svg" width="28" alt="Company Icon" class="mx-auto sm:mx-0 my-2">
            <a href="https://kapkara.one" class="text-base">kapkara</a>
            <p class="text-amber-500 text-sm">simplicity in action</p>
        </div>

        <div class="flex-1 p-16 items-center text-center">
            <h3 class="text-2xl mb-3 text-neutral-50">{{ env('APP_NAME') }}</h3>
            <div class="text-blue-500 size-16 text-center mx-auto my-6">
                <x-carbon-money />
            </div>
        </div>

        <div class="flex-1 text-center sm:text-right text-neutral-50 font-light p-8">
            <p class="text-base">All Rights Reserved</p>
            <p class="text-sm">&copy; 2023.012</p>
        </div>

    </div>

    <p class="mt-8 md:mt-0 text-center text-gray-400 text-sm"> &copy; kapkara web technologies <br>Contact us</p>

</footer>


