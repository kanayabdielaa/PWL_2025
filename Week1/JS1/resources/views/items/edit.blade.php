<!DOCTYPE html> 
<html>
<head>
    <title>Edit Item</title> <!-- Judul halaman yang muncul di tab browser -->
</head>
<body>
    <h1>Edit Item</h1> <!-- Judul utama halaman -->

    <!-- Form untuk mengedit item -->
    <form action="{{ route('items.update', $item) }}" method="POST"> 
        <!-- Mengirimkan data ke route 'items.update' dengan parameter $item menggunakan metode POST -->

        @csrf <!-- Token CSRF untuk keamanan terhadap serangan CSRF -->
        @method('PUT') <!-- Metode HTTP PUT digunakan untuk memperbarui data yang sudah ada -->

        <!-- Input untuk Nama -->
        <label for="name">Name:</label> <!-- Label untuk input nama -->
        <input type="text" name="name" value="{{ $item->name }}" required> 
        <!-- Input teks dengan nilai default dari item yang sedang diedit -->
        <br> <!-- Baris baru -->

        <!-- Input untuk Deskripsi -->
        <label for="description">Description:</label> <!-- Label untuk textarea deskripsi -->
        <textarea name="description" required>{{ $item->description }}</textarea> 
        <!-- Textarea dengan nilai default dari item yang sedang diedit -->
        <br> <!-- Baris baru -->

        <!-- Tombol submit -->
        <button type="submit">Update Item</button> <!-- Tombol untuk mengirimkan form -->
    </form>

    <!-- Link kembali ke daftar item -->
    <a href="{{ route('items.index') }}">Back to List</a> <!-- Link untuk kembali ke daftar item -->
</body>
</html>
