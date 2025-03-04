<!DOCTYPE html>
<html>
<head>
    <title>Item List</title> <!-- Judul halaman yang muncul di tab browser -->
</head>
<body>
    <h1>Items</h1> <!-- Judul utama halaman -->

    <!-- Menampilkan pesan sukses jika ada -->
    @if(session('success')) 
        <p>{{ session('success') }}</p> <!-- Menampilkan pesan sukses dari session -->
    @endif

    <!-- Link untuk menambah item baru -->
    <a href="{{ route('items.create') }}">Add Item</a> 

    <ul>
        <!-- Melakukan perulangan untuk setiap item dalam variabel $items -->
        @foreach ($items as $item) 
        <li>
            <!-- Menampilkan nama item -->
            {{ $item->name }} - 

            <!-- Link untuk mengedit item -->
            <a href="{{ route('items.edit', $item) }}">Edit</a> 

            <!-- Form untuk menghapus item -->
            <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                @csrf <!-- Token CSRF untuk keamanan -->
                @method('DELETE') <!-- Metode DELETE digunakan untuk menghapus item -->

                <!-- Tombol submit untuk menghapus item -->
                <button type="submit">Delete</button> 
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html>
