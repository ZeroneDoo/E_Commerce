<div id="sideBar"
    class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


    <!-- sidebar content -->
    <div class="flex flex-col">

        <!-- sidebar toggle -->
        <div class="text-right hidden md:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        <!-- end sidebar toggle -->

        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">apps</p>

        <!-- link -->
        <a href="{{ route('admin') }}"
            class="mb-3 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-envelope-open-text text-sm mr-2"></i>
            Produk
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="{{ route('kategori') }}"
            class="mb-3 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-shield-check text-sm mr-2"></i>
            Kategori
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#"
            class="mb-3 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-comments text-sm mr-2"></i>
            Pesanan
        </a>
        <!-- end link -->


        <!-- link -->
        <a href="#"
            class="mb-3 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-calendar-edit text-sm mr-2"></i>
            Laporan
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#"
            class="mb-3 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-file-invoice-dollar text-sm mr-2"></i>
            Kontak
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#"
            class="mb-3 capitalize font-medium text-base hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-folder-open text-sm mr-2"></i>
            Arsip
        </a>
        <!-- end link -->

    </div>
    <!-- end sidebar content -->

</div>
