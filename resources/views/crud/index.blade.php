@extends('layout')
@section('content')
<div class="bg-gray-100 text-center">
    <table class="text-center">
        <div class="px-10 pb-2 flex justify-between">
            <a href="{{ route('crud.create') }}">Tambah</a>

        </div>
        <tr>
            <th class="px-4 py-2 border">No</th>
            <th class="px-4 py-2 border">Judul</th>
            <th class="px-4 py-2 border">Konten</th>
            <th class="px-4 py-2 border">Aksi</th>
        </tr>
        @forelse ($konten as $index => $item)
        <tr>
            <th class="px-4 py-2 border">{{ $index + 1 }}</th>
            <th class="px-4 py-2 border">{{ $item -> judul }}</th>
            <th class="px-4 py-2 border">{{ $item -> konten }}</th>
            <th class="px-4 py-2 border">
            <td class="border text-center px-3 py-2 leading-4 tracking-wider text-sm whitespace-nowrap">
                <div class="flex items-center justify-center gap-3">
                    <a href="{{ route('crud.edit', $item->id) }}" class="hover:text-teal-700 text-teal-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </a>

                    <form class="hover:text-red-700 text-red-500" action="{{ route('crud.delete', $item->id) }}"
                        method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">
                            Delete
                        </button>
                    </form>

                </div>
            </td>

            </th>
            @empty
            <th colspan="12" class="px-4 py-2 border"> Tidak ada konten</th>
            @endforelse
        </tr>
    </table>
</div>
@endsection