<p align="center"><a href="https://medease10.000webhostapp.com/" target="_blank"><img src="https://github.com/DheaZalfarani/sivalita/assets/103364743/1b639229-0786-499f-9a0c-54f9af7b9f79" width="400" alt="SIVALITA Logo"></a></p>

<h2>Apa itu SIVALITA?</h2>
SIVALITA: Sistem Informasi Vaksinasi Balita merupakan sebuah platform yang dirancang khusus untuk membantu fasilitas kesehatan dalam mengelola proses vaksinasi pada balita secara efisien dan terstruktur. Sistem ini memungkinkan anggota fasilitas kesehatan, mulai dari petugas medis hingga manajemen, untuk menggantikan metode manual yang sebelumnya digunakan dalam pelacakan dan administrasi terkait dengan keperluan vaksinasi. Melalui penggunaan platform ini, data dan informasi vaksinasi akan menjadi lebih tersentralisasi.
Sebagai sebuah sistem informasi, berikut ini merupakan beberapa fitur yang ada pada SIVALITA:<br><br>
1. Jadwal Vaksinasi Balita<br>
2. Jadwal Shift Petugas Medis<br>
3. Akses Data Inventaris Vaksin<br>
4. Akses Data Vaksinasi Balita<br>
5. Akses Data Petugas Medis

<h2>Bahasa yang digunakan</h2>
Pengembangan SIVALITA dilakukan dengan menggunakan HTML untuk membuat kerangka website. Untuk memberikan sentuhan pada tampilan website, digunakan kombinasi dari penggunaan CSS Native dan Bootstrap yang merupakan salah satu framework dari CSS. SIVALITA juga menggunakan JavaScript untuk memungkinkan website menunjukkan behavior tertentu dan PHP serta MySQL untuk mengelola data yang ada pada website.

<h2>Daftar Data Pengguna</h2>
Untuk bisa mengakses SIVALITA diperlukan pengaksesan login terlebih dahulu menggunakan akun sebagai berikut:
<h4>Data Login</h4>
<table>
	<th>No.</th>
	<th>Username</th>
	<th>Password</th>
	<tr align=>
			<td>1</td>
			<td>admin</td>
			<td>123</td>
	</tr>
	<tr>
			<td>2</td>
			<td>user</td>
			<td>456</td>
	</tr>
</table>

<h2>Rancangan Basis Data</h2>
Terdapat beberapa tabel yang dibuat pada basis data SIVALITA dan berikut adalah rancangan dari tabel-tabel tersebut:
<h4>Tabel login</h4>
<table>
	<th>No.</th>
	<th>Nama</th>
	<th>Tipe Data</th>
	<th>Panjang Data</th>
	<th>Contoh Data</th>
	<tr align=>
			<td>1</td>
			<td>username</td>
			<td>varchar</td>
			<td>12</td>
			<td>admin</td>
	</tr>
	<tr>
			<td>2</td>
			<td>password</td>
			<td>varchar</td>
			<td>12</td>
			<td>admin123</td>
	</tr>
</table>
<h4>Tabel inventaris</h4>
<table>
	<th>No.</th>
	<th>Nama</th>
	<th>Tipe Data</th>
	<th>Panjang Data</th>
	<th>Contoh Data</th>
	<tr>
			<td>1</td>
			<td>id</td>
			<td>int</td>
			<td>11</td>
			<td>1</td>
	</tr>
	<tr>
			<td>2</td>
			<td>waktu</td>
			<td>date</td>
			<td>-</td>
			<td>2023-10-21</td>
	</tr>
	<tr>
			<td>3</td>
			<td>jenis</td>
			<td>varchar</td>
			<td>50</td>
			<td>Campak rubella</td>
	</tr>
	<tr>
			<td>4</td>
			<td>stok</td>
			<td>int</td>
			<td>11</td>
			<td>100</td>
	</tr>
</table>
<h4>Tabel vaksinasi</h4>
<table>
	<th>No.</th>
	<th>Nama</th>
	<th>Tipe Data</th>
	<th>Panjang Data</th>
	<th>Contoh Data</th>
	<tr>
			<td>1</td>
			<td>id</td>
			<td>int</td>
			<td>11</td>
			<td>1</td>
	</tr>
	<tr>
			<td>2</td>
			<td>nama</td>
			<td>varchar</td>
			<td>100</td>
			<td>Ameena Halilintar</td>
	</tr>
	<tr>
			<td>3</td>
			<td>jenisvaksin</td>
			<td>varchar</td>
			<td>50</td>
			<td>Campak Rubella</td>
	</tr>
	<tr>
			<td>4</td>
			<td>waktu</td>
			<td>date</td>
			<td>-</td>
			<td>2023-10-21</td>
	</tr>
</table>
<h4>Tabel jadwalvaksinasi</h4>
<table>
	<th>No.</th>
	<th>Nama</th>
	<th>Tipe Data</th>
	<th>Panjang Data</th>
	<th>Contoh Data</th>
	<tr>
			<td>1</td>
			<td>id</td>
			<td>int</td>
			<td>11</td>
			<td>1</td>
	</tr>
	<tr>
			<td>2</td>
			<td>nama</td>
			<td>varchar</td>
			<td>100</td>
			<td>dr. Irawan</td>
	</tr>
	<tr>
			<td>3</td>
			<td>nama2</td>
			<td>varchar</td>
			<td>100</td>
			<td>dr. Ananda</td>
	</tr>
	<tr>
			<td>4</td>
			<td>nama3</td>
			<td>varchar</td>
			<td>100</td>
			<td>dr. Kurnia</td>
	</tr>
	<tr>
			<td>5</td>
			<td>tanggal</td>
			<td>datetime</td>
			<td>-</td>
			<td>2023-10-21 14:00</td>
	</tr>
	<tr>
			<td>6</td>
			<td>waktu</td>
			<td>time</td>
			<td>-</td>
			<td>16:00</td>
	</tr>
	<tr>
			<td>7</td>
			<td>lokasi</td>
			<td>varchar</td>
			<td>100</td>
			<td>Aula Gedung Utama</td>
	</tr>
	<tr>
			<td>8</td>
			<td>jenisvaksin</td>
			<td>varchar</td>
			<td>50</td>
			<td>Campak rubella</td>
	</tr>
</table>
<h4>Tabel jadwalshift</h4>
<table>
	<th>No.</th>
	<th>Nama</th>
	<th>Tipe Data</th>
	<th>Panjang Data</th>
	<th>Contoh Data</th>
	<tr>
			<td>1</td>
			<td>id</td>
			<td>int</td>
			<td>11</td>
			<td>1</td>
	</tr>
	<tr>
			<td>2</td>
			<td>nama</td>
			<td>varchar</td>
			<td>100</td>
			<td>dr. Hospitaria</td>
	</tr>
	<tr>
			<td>3</td>
			<td>tanggal</td>
			<td>datetime</td>
			<td>50</td>
			<td>2023-10-21 08:00</td>
	</tr>
	<tr>
			<td>4</td>
			<td>waktu</td>
			<td>time</td>
			<td>-</td>
			<td>16:00</td>
	</tr>
</table>

<h2>Tim Pengembang</h2>
Dhea Zalfarani Syah Munir Putri (215150601111014)<BR>
Elsa Aritonang (215150607111005)<BR>
Salvia Dyah Kurniasari (215150601111006)
