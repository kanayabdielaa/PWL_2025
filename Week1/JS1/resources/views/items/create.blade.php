<!DOCTYPE html> <!-- Mendeklarasikan bahwa ini adalah dokumen HTML5 -->
<html>
<head>
    <title>Add Item</title> <!-- Judul halaman yang akan muncul di tab browser -->
</head>
<body>
    <h1>Add Item</h1> <!-- Judul utama halaman -->

    <!-- Form untuk menambahkan item -->
    <form action="{{ route('items.store') }}" method="POST"> <!-- Mengirim data ke route 'items.store' menggunakan metode POST -->
        @csrf <!-- Token CSRF untuk keamanan terhadap serangan CSRF -->

        <!-- Input untuk Nama -->
        <label for="name">Name:</label> <!-- Label untuk input nama -->
        <input type="text" name="name" required> <!-- Input teks wajib diisi untuk nama -->
        <br> <!-- Baris baru untuk pemisah tampilan -->

        <!-- Input untuk Deskripsi -->
        <label for="description">Description:</label> <!-- Label untuk textarea deskripsi -->
        <textarea name="description" required></textarea> <!-- Textarea wajib diisi untuk deskripsi -->
        <br> <!-- Baris baru -->

        <!-- Tombol submit -->
        <button type="submit">Add Item</button> <!-- Tombol untuk mengirimkan form -->
    </form>

    <!-- Link kembali ke daftar item -->
    <a href="{{ route('items.index') }}">Back to List</a> <!-- Link untuk kembali ke daftar item -->
</body>
</html>