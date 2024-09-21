<html>
  <head></head>
  <body>
    <a href="/" style="background-color: lightgrey;padding:15px 20px;text-decoration:none;color:black;">Kembali</a>
    <h1>Halaman Tambah Produk</h1>

    <form method="POST" action="/tambah-produk">
      @csrf
      <label for="nama" style="display:block;">Nama Produk</label>
      <input type="text" name="nama" id="nama">

      <label for="warna" style="display:block;">Warna Produk</label>
      <input type="text" name="warna" id="warna">

      <label for="spesifikasi" style="display:block;">Spesifikasi Produk</label>
      <input type="text" name="spesifikasi" id="spesifikasi">

      <label for="tahun" style="display:block;">Tahun Dibuat</label>
      <input type="text" name="tahun" id="tahun">

      <label for="madein" style="display:block;">Dibuat di mana</label>
      <input type="text" name="madein" id="madein">

      <label for="toko" style="display:block;">Penjual resmi</label>
      <input type="text" name="toko" id="toko">

      <label for="harga" style="display:block;">Harga Produk</label>
      <input type="text" name="harga" id="harga">

      <button type="submit">Simpan</button>
    </form>
  </body>
</html>