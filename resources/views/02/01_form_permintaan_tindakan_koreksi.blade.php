@extends('layouts.app')
@section('sidebar')
    <x-side-bar pageName="{{ $pageName }}"></x-side-bar>
@endsection
@section('header')
    <h1 class="font-bold text-3xl line-clamp-2">{{ $pageName }}</h1>
@endsection
@section('content')
    <script type="module">
        $(() => {
            // your table
            let $table = $('#DataTable');
            // specified the column of your table
            let $column = [{
                    data: 'no_rekaman_ptk'
                },
                {
                    data: 'tanggal_ptk'
                },
                {
                    data: 'unit_kerja_penerbit_ptk'
                },
                {
                    data: 'unit_kerja_penerima_ptk'
                },
                {
                    data: 'nama_pembuat'
                },
                {
                    data: 'nama_penerima'
                },
                {
                    data: 'nama_vice_president'
                },
                {
                    data: 'tanggal_penyelesaian'
                },
                {
                    data: 'is_signed'
                },
                {
                    data: 'signed_at'
                },
                {
                    data: 'document_scan'
                },
                {
                    data: 'created_by'
                }
            ];

            // initiate DataTable
            $table = $table.DataTable({
                serverSide: true,
                ajax: '{{ route('02.01.index') }}',
                deferLoading: false,
                columns: [{
                    data: "id",
                    visible: false
                }].concat($column.concat([{
                    data: "action",
                    searchable: false,
                    orderable: false
                }]))
            });

            // button for add new document, you may want to change the route inside it
            $('.dt-search').closest('.dt-layout-end').append(`
            <a href="{{ route('02.01.create') }}" class="flex items-center h-9 px-4 rounded bg-blue-500 hover:bg-blue-600 border border-blue-700 text-white font-semibold cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-[17px] mr-1"><path d="M11 bc1qpjq2u4vwnyxe3u0flg8hfp3c8mfmd9f38ydu07 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z"></path></svg>
                Add New Document
            </a>
            `);

            // button for sort by newest and oldest
            $('.dt-length').closest('.dt-layout-start').append(`
            <button id="sortNewest" class="flex items-center h-9 px-4 rounded bg-gray-200 hover:bg-gray-500 hover:text-white border border-gray-700 font-semibold cursor-pointer">Newest</button>
            <button id="sortOldest" class="flex items-center h-9 px-4 rounded bg-gray-200 hover:bg-gray-500 hover:text-white border border-gray-700 font-semibold cursor-pointer">Oldest</button>
            `);
            $('#sortNewest').on('click', function() {
                $table.order(0, 'desc').draw();
            });
            $('#sortOldest').on('click', function() {
                $table.order(0, 'asc').draw();
            });
            $table.on('order.dt', function() {
                var $order = $table.order();
                var $column = $order[0][0];
                var $direction = $order[0][1];
                if ($column == 0) {
                    if ($direction == 'desc') {
                        $('#sortNewest').addClass('!bg-gray-700 text-white');
                        $('#sortOldest').removeClass('!bg-gray-700 text-white');
                    } else {
                        $('#sortNewest').removeClass('!bg-gray-700 text-white');
                        $('#sortOldest').addClass('!bg-gray-700 text-white');
                    }
                } else {
                    $('#sortNewest').removeClass('!bg-gray-700 text-white');
                    $('#sortOldest').removeClass('!bg-gray-700 text-white');
                }
            });

            // draw the table
            $table.order(0, 'desc').draw();
        })
    </script>
    <div class="overflow-auto">
        <div class="px-8 border-gray-500 text-nowrap min-w-min">
            <table id="DataTable" class="row-border">
                <thead>
                    <tr>
                        <th></th>
                        <th>No Rekaman PTK</th>
                        <th>Tanggal PTK</th>
                        <th>Unit Kerja Penerbit PTK</th>
                        <th>Unit Kerja Penerima PTK</th>
                        <th>Nama Pembuat</th>
                        <th>Nama Penerima</th>
                        <th>Nama Vice President</th>
                        <th>Tanggal Penyelesaian</th>
                        <th>Is Signed</th>
                        <th>Signed At</th>
                        <th>Document Scan</th>
                        <th>Created By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>No Rekaman PTK</th>
                        <th>Tanggal PTK</th>
                        <th>Unit Kerja Penerbit PTK</th>
                        <th>Unit Kerja Penerima PTK</th>
                        <th>Nama Pembuat</th>
                        <th>Nama Penerima</th>
                        <th>Nama Vice President</th>
                        <th>Tanggal Penyelesaian</th>
                        <th>Is Signed</th>
                        <th>Signed At</th>
                        <th>Document Scan</th>
                        <th>Created By</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
