@extends('layouts.app')

@section('title', 'Produk - POS')

@section('content')

<!-- HEADER -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">

    <div>

        <h1 class="text-2xl sm:text-3xl font-bold text-slate-900">
            Daftar Produk
        </h1>

        <p class="text-sm text-slate-500 mt-1">
            Kelola semua produk yang tersedia di toko
        </p>

    </div>


    <a href="{{ route('produk.create') }}"
       class="inline-flex items-center gap-2 px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl transition">

        <i data-lucide="plus" class="w-4 h-4"></i>

        Tambah Produk

    </a>

</div>


<!-- SEARCH -->
<div class="bg-white rounded-2xl shadow border border-slate-200 p-5 mb-6">

    <form method="GET"
          action="{{ route('produk.index') }}"
          class="flex flex-col sm:flex-row gap-3">


        <input type="text"
               name="search"
               value="{{ request('search') }}"
               placeholder="Cari produk..."
               class="flex-1 border border-slate-200 rounded-xl px-4 py-2.5 outline-none focus:border-indigo-400">


        <select name="stok"
                class="border border-slate-200 rounded-xl px-4 py-2.5">

            <option value="">
                Semua Stok
            </option>

            <option value="aman"
                {{ request('stok') == 'aman' ? 'selected' : '' }}>

                Aman

            </option>

            <option value="rendah"
                {{ request('stok') == 'rendah' ? 'selected' : '' }}>

                Rendah

            </option>

            <option value="habis"
                {{ request('stok') == 'habis' ? 'selected' : '' }}>

                Habis

            </option>

        </select>


        <button type="submit"
                class="bg-slate-800 hover:bg-slate-900 text-white rounded-xl px-5">

            Filter

        </button>

    </form>

</div>


<!-- TABLE -->
<div class="bg-white rounded-2xl shadow border border-slate-200 overflow-hidden">

    <div class="overflow-x-auto">

        <table class="w-full text-sm">

            <thead>

                <tr class="bg-slate-50 border-b border-slate-200">

                    <th class="px-5 py-4 text-left">
                        #
                    </th>

                    <th class="px-5 py-4 text-left">
                        Foto
                    </th>

                    <th class="px-5 py-4 text-left">
                        Nama Produk
                    </th>

                    <th class="px-5 py-4 text-left">
                        Jenis Produk
                    </th>

                    <th class="px-5 py-4 text-left">
                        Distributor
                    </th>

                    <th class="px-5 py-4 text-left">
                        Harga Beli
                    </th>

                    <th class="px-5 py-4 text-left">
                        Harga Jual
                    </th>

                    <th class="px-5 py-4 text-center">
                        Stok
                    </th>

                    <th class="px-5 py-4 text-right">
                        Aksi
                    </th>

                </tr>

            </thead>


            <tbody class="divide-y divide-slate-100">

                @forelse($produks as $index => $produk)

                    <tr class="hover:bg-slate-50">


                        <!-- NOMOR -->
                        <td class="px-5 py-4">

                            {{ $produks->firstItem() + $index }}

                        </td>


                        <!-- FOTO -->
                        <td class="px-5 py-4">

                            @if($produk->foto)

                                <img src="{{ asset('storage/' . $produk->foto) }}"
                                     class="w-14 h-14 rounded-xl object-cover border">

                            @else

                                <div class="w-14 h-14 rounded-xl border bg-slate-100 flex items-center justify-center text-xs text-slate-500">

                                    No Image

                                </div>

                            @endif

                        </td>


                        <!-- NAMA -->
                        <td class="px-5 py-4">

                            <div class="font-semibold text-slate-800">

                                {{ $produk->nama }}

                            </div>

                        </td>


                        <!-- JENIS PRODUK -->
                        <td class="px-5 py-4">

                            @if($produk->jenisProduk)

                                <span class="inline-flex px-3 py-1 rounded-full bg-indigo-100 text-indigo-700 text-xs font-medium">

                                    {{ $produk->jenisProduk->nama }}

                                </span>

                            @else

                                <span class="text-slate-400">
                                    -
                                </span>

                            @endif

                        </td>


                        <!-- DISTRIBUTOR -->
                        <td class="px-5 py-4">

                            @if($produk->distributor)

                                <div class="font-medium text-slate-700">

                                    {{ $produk->distributor->nama_perusahaan }}

                                </div>

                                <div class="text-xs text-slate-400">

                                    {{ $produk->distributor->nama }}

                                </div>

                            @else

                                <span class="text-slate-400">
                                    -
                                </span>

                            @endif

                        </td>


                        <!-- HARGA BELI -->
                        <td class="px-5 py-4">

                            Rp {{ number_format(
                                $produk->harga_beli,
                                0,
                                ',',
                                '.'
                            ) }}

                        </td>


                        <!-- HARGA JUAL -->
                        <td class="px-5 py-4 font-semibold text-green-600">

                            Rp {{ number_format(
                                $produk->harga_jual,
                                0,
                                ',',
                                '.'
                            ) }}

                        </td>


                        <!-- STOK -->
                        <td class="px-5 py-4 text-center">

                            @if($produk->stok == 0)

                                <span class="px-3 py-1 rounded-full bg-red-100 text-red-600 text-xs">

                                    Habis

                                </span>

                            @elseif($produk->stok < 10)

                                <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs">

                                    {{ $produk->stok }}

                                </span>

                            @else

                                <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs">

                                    {{ $produk->stok }}

                                </span>

                            @endif

                        </td>


                        <!-- AKSI -->
                        <td class="px-5 py-4">

                            <div class="flex justify-end gap-2">


                                <!-- DETAIL -->
                                <a href="{{ route('produk.show', $produk->id) }}"
                                   class="p-2 rounded-lg bg-blue-100 hover:bg-blue-200">

                                    <i data-lucide="eye"
                                       class="w-4 h-4 text-blue-700"></i>

                                </a>


                                <!-- EDIT -->
                                <a href="{{ route('produk.edit', $produk->id) }}"
                                   class="p-2 rounded-lg bg-yellow-100 hover:bg-yellow-200">

                                    <i data-lucide="pencil"
                                       class="w-4 h-4 text-yellow-700"></i>

                                </a>


                                <!-- DELETE -->
                                <form action="{{ route('produk.destroy', $produk->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus produk ini?')">

                                    @csrf

                                    @method('DELETE')

                                    <button type="submit"
                                            class="p-2 rounded-lg bg-red-100 hover:bg-red-200">

                                        <i data-lucide="trash-2"
                                           class="w-4 h-4 text-red-700"></i>

                                    </button>

                                </form>


                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="9"
                            class="text-center py-12 text-slate-500">

                            Belum ada produk.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>


    <div class="p-5 border-t border-slate-200">

        {{ $produks->links() }}

    </div>

</div>

@endsection