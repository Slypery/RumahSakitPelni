<aside class="flex shrink-0 flex-col h-full bg-gray-800 w-80 text-white overflow-auto">
    <div id="AppName" class="px-8 py-4 mt-2 text-2xl font-bold">
        <div class="h-4">
            <span class="text-gray-300">Rumah Sakit</span> <span class="text-amber-500">Pelni</span>
        </div>
        <div class="text-lg h-4 mt-1 text-white/70">SIM Layanan</div>
        <div class="text-sm text-white/60 mt-1">ISO <span class="text-amber-500/60">27001</span></div>
    </div>
    <div data-sidebar-dropdown data-sidebar-item class="flex flex-col px-4 mt-2 capitalize gap-2 cursor-pointer opacity-0 transition-opacity duration-300">
        <button data-sidebar-dropdown-toggle class="flex text-left px-4 gap-2 z-1 bg-gray-800 font-semibold hover:bg-gray-700 cursor-pointer">
            <div>01.</div>
            <div>Pengendalian Dokumen</div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-auto shrink-0 w-7 self-center transition-all duration-200">
                <path d="M12 15.0006L7.75732 10.758L9.17154 9.34375L12 12.1722L14.8284 9.34375L16.2426 10.758L12 15.0006Z"></path>
            </svg>
        </button>
        <div data-sidebar-dropdown-items class="flex flex-col opacity-30 ml-10 mr-5 gap-2 border-l border-gray-500 max-h-0 overflow-hidden transition-all duration-200">
            <a href="{{ route('01.04.index') }}" class="{{ $pageName == '01.04 Daftar Dokumen Eksternal' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">01.04</span> Daftar Dokumen Eksternal</a>
            <a href="{{ route('01.05.index') }}" class="{{ $pageName == '01.05 Serah Terima Dokumen-Rekaman' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">01.05</span> Serah Terima Dokumen-Rekaman</a>
            <a href="{{ route('01.06.index') }}" class="{{ $pageName == '01.06 Usulan Perubahan Dokumen' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">01.06</span> Usulan Perubahan Dokumen</a>
            <a href="{{ route('01.07.index') }}" class="{{ $pageName == '01.07 Pemusnahan Dokumen-Rekaman' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">01.07</span> Pemusnahan Dokumen Rekaman</a>
            <a href="{{ route('01.08.index') }}" class="{{ $pageName == '01.08 Surat Pernyataan Kerahasiaan' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">01.08</span> Surat Pernyataan Kerahasiaan</a>
            <a href="{{ route('01.09.index') }}" class="{{ $pageName == '01.09 Perjanjian Kerahasiaan' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">01.09</span> Perjanjian Kerahasiaan</a>
            <a href="{{ route('01.10.index') }}" class="{{ $pageName == '01.10 Laporan Pengkajian Dokumen-Rekaman' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">01.10</span> Laporan Pengkajian Dokumen-Rekaman</a>
        </div>
    </div>
    <div data-sidebar-dropdown data-sidebar-item class="flex flex-col px-4 mt-2 capitalize gap-2 cursor-pointer opacity-0 transition-opacity duration-300">
        <button data-sidebar-dropdown-toggle class="flex text-start px-4 gap-2 z-1 bg-gray-800 font-semibold hover:bg-gray-700 cursor-pointer">
            <div>02.</div>
            <div>Permintaan Tindakan Koreksi</div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-auto shrink-0 w-7 self-center transition-all duration-200">
                <path d="M12 15.0006L7.75732 10.758L9.17154 9.34375L12 12.1722L14.8284 9.34375L16.2426 10.758L12 15.0006Z"></path>
            </svg>
        </button>
        <div data-sidebar-dropdown-items class="flex flex-col opacity-30 ml-10 mr-5 gap-2 border-l border-gray-500 max-h-0 overflow-hidden transition-all duration-200">
            <a href="{{ route('02.01.index') }}" class="{{ $pageName == '02.01 Permintaan Tindakan Koreksi' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">02.01</span> Permintaan Tindakan Koreksi</a>
            <a href="{{ route('02.02.index') }}" class="{{ $pageName == '02.02 Daftar Status PTK' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">02.02</span> Daftar Status PTK</a>
            <a href="{{ route('02.03.index') }}" class="{{ $pageName == '02.03 Penyelesaian PTK Bermasalah' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">02.03</span> Penyelesaian PTK Bermasalah</a>
        </div>
    </div>
    <div data-sidebar-dropdown data-sidebar-item class="flex flex-col px-4 mt-2 capitalize gap-2 cursor-pointer opacity-0 transition-opacity duration-300">
        <button data-sidebar-dropdown-toggle class="flex text-start px-4 gap-2 z-1 bg-gray-800 font-semibold hover:bg-gray-700 cursor-pointer">
            <div>03.</div>
            <div>Audit Internal</div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-auto shrink-0 w-7 self-center transition-all duration-200">
                <path d="M12 15.0006L7.75732 10.758L9.17154 9.34375L12 12.1722L14.8284 9.34375L16.2426 10.758L12 15.0006Z"></path>
            </svg>
        </button>
        <div data-sidebar-dropdown-items class="flex flex-col opacity-30 ml-10 mr-5 gap-2 border-l border-gray-500 max-h-0 overflow-hidden transition-all duration-200">
            <a href="{{ route('03.01.index') }}" class="{{ $pageName == '03.01 Daftar Audit Internal' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">03.01</span> Daftar Audit Internal</a>
            <a href="{{ route('03.02.index') }}" class="{{ $pageName == '03.02 PTK Audit Internal' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">03.02</span> PTK Audit Internal</a>
            <a href="{{ route('03.03.index') }}" class="{{ $pageName == '03.03 Jadwal Tahunan Audit Internal' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">03.03</span> Jadwal Tahunan Audit Internal</a>
            <a href="{{ route('03.04.index') }}" class="{{ $pageName == '03.04 Jadwal Detail Audit Internal' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">03.04</span> Jadwal Detail Audit Internal</a>
            <a href="{{ route('03.05.index') }}" class="{{ $pageName == '03.05 Checklist Audit Internal' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">03.05</span> Checklist Audit Internal</a>
            <a href="{{ route('03.06.index') }}" class="{{ $pageName == '03.06 Laporan Audit Internal' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">03.06</span> Laporan Audit Internal</a>
            <a href="{{ route('03.07.index') }}" class="{{ $pageName == '03.07 Status Temuan Audit Internal' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">03.07</span> Status Temuan Audit Internal</a>
        </div>
    </div>
    <div data-sidebar-dropdown data-sidebar-item class="flex flex-col px-4 mt-2 capitalize gap-2 cursor-pointer opacity-0 transition-opacity duration-300">
        <button data-sidebar-dropdown-toggle class="flex text-start px-4 gap-2 z-1 bg-gray-800 font-semibold hover:bg-gray-700 cursor-pointer">
            <div>05.</div>
            <div>Kepatuhan Peraturan</div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-auto shrink-0 w-7 self-center transition-all duration-200">
                <path d="M12 15.0006L7.75732 10.758L9.17154 9.34375L12 12.1722L14.8284 9.34375L16.2426 10.758L12 15.0006Z"></path>
            </svg>
        </button>
        <div data-sidebar-dropdown-items class="flex flex-col opacity-30 ml-10 mr-5 gap-2 border-l border-gray-500 max-h-0 overflow-hidden transition-all duration-200">
            {{-- <a href="{{ route('05.01.index') }}" class="{{ $pageName == '05.01 Daftar Peraturan Keamanan Informasi' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">05.01</span> Daftar Peraturan Keamanan Informasi</a> --}}
            {{-- <a href="{{ route('05.02.index') }}" class="{{ $pageName == '05.02 Daftar Pemenuhan Peraturan' ? 'sidebar-item-active' : '' }} pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">05.02</span> Daftar Pemenuhan Peraturan</a> --}}
            <a href="#" class="pl-2 text-sm text-white/70 hover:underline hover:text-white/90"><span class="font-bold">05.03</span> Daftar Distribusi Peraturan</a>
        </div>
    </div>
    <div data-sidebar-item class="flex px-4 mt-1 opacity-0 transition-opacity duration-200">
        <a href="{{ route('user.index') }}" class="{{ $pageName == 'User List' ? 'sidebar-item-active' : '' }} flex w-full items-center px-4 py-1 hover:bg-gray-700 font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-3">
                <path d="M20 22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13Z"></path>
            </svg>
            <div>User List</div>
        </a>
    </div>
</aside>
