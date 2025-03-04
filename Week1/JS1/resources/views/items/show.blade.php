<!DOCTYPE html>
<html>
<head>
    <title>Item List</title> <!-- Judul halaman -->
</head>
<body>
    <h1>Items</h1> <!-- Header utama -->

    <!-- Menampilkan pesan sukses jika ada -->
    @if(session('success')) 
        <p>{{ session('success') }}</p> <!-- Menampilkan pesan sukses dari session -->
    @endif

    <!-- Link untuk menambahkan item baru -->
    <a href="{{ route('items.create') }}">Add Item</a> 

    <ul>
        <!-- Looping melalui daftar item yang ada -->
        @foreach ($items as $item) 
        <li>
            <!-- Menampilkan nama item -->
            {{ $item->name }} - 

            <!-- Link untuk mengedit item -->
            <a href="{{ route('items.edit', $item) }}">Edit</a> 

            <!-- Form untuk menghapus item -->
            <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                @csrf <!-- Token keamanan untuk mencegah CSRF attacks -->
                @method('DELETE') <!-- Mengubah metode POST menjadi DELETE -->
                
                <button type="submit">Delete</button> <!-- Tombol hapus item -->
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html>
