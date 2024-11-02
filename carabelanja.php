
<style>
    .service {
        width: 80%;
        margin: auto;
        text-align: center;
    }
    h2{ margin-top: 10px;
        text-align: center;
        color: black;
    }

    p{
        color: white;
        font-size: 16px;
        font-weight: 300;
        line-height: 22px;
        padding: 10px;
    }

    .row {
        margin-top: 5%;
        display: flex;
        justify-content: space-between;
    }

    .service-col {
        flex-basis: 31%;
        background: #000080;
        border-radius: 10px;
        margin-bottom: 5%;
        padding: 20px 12px;
        box-sizing: border-box;
        transition: 0.5s;
    }

    h3 {
        text-align: center;
        font-weight: 600;
        margin: 10px 0;
        color: white;
    }

    .service-col:hover {
        box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
    }

    @media(max-width: 700px) {
        .row {
            flex-direction: column;
        }
    }
</style>
<?php 
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO JOGJA</title>
</head>

<body>

    <!-- Navbar -->
    <?php include 'menu.php'; ?>

    <!-- Isi -->
    <section class="page-section service">
      <h2 class="text-black text-center"> Cara Belanja</h2>
        <div class="row">
            <div class="service-col">
                <h3>1. Daftar/Login</h3>
                <p>Klik masuk di pojok kanan atas halaman. Kemudian Login ke akun Anda dengan Email dan Password yang telah Anda daftarkan sebelumnya.
                Jika belum mempunyai akun, daftar terlebih dahulu.</p>
            </div>
            <div class="service-col">
                <h3>2.Pembelian</h3>
                <p>Klik Beli pada produk yang di inginkan atau Klik detail terlebih dahulu pada produk untuk melihat deskripsi barang. Jika memilih beli maka barang akan otomatis masuk ke keranjang </p>
            </div>
            <div class="service-col">
                <h3>3.Checkout</h3>
                <p>Setelah Anda puas memasukan produk keinginan Anda ke Keranjang Belanja.
                Kemudian pada halaman Check Out, tentukan Alamat ke mana pesanan Anda ingin di kirim. Periksa kembali produk dan Total Harga belanjaan Anda, setelah yakin isikan klik tombol pesan.</p>
            </div>
        </div>

        <div class="row" style="margin-top: auto;">
            <div class="service-col">
                <h3>4.Konfirmasi Pembayaran</h3>
                <p>Lakukan pembayaran dengan transfer sesuai alamat rekening yang di cantumkan, lalu konfirmasi pembayaran dengan klik riwayat pada menu diatas, klik pembayaran lalu isi dan masukan bukti transfer, lalu klik kirim.</p>
            </div>
            <div class="service-col">
                <h3>5. Pesanan Siap Diantar</h3>
                <p>Setelah melakukan konfirmasi, pesanan Anda akan di Proses dan Anda tinggal melacak barang melalui resi yang diberikan.
                </p>
            </div>
            <div class="service-col">
                <h3>6. Riwayat</h3>
                <p>Kalian bisa melacak barang kalian di bagian riwayat dengan mengklik riwayat pada bagian atas, Admin akan memberikan no resi untuk pelanggan jika pelanggan sudah melakukan pembayaran. Terimakasih</p>
            </div>
        </div>

        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>

</html>