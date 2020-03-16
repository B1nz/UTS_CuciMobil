<!DOCTYPE html>
<html>
<head>
	<title>Cetak Struk</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
        <img src="img/logo_blk.png"/>
        <h1>Struk Cuci Mobil</h1>
        <h3>Simpan struk ini sebagai bukti pembayaran</h3>
        <h2>ID Transaksi : {{$transaksi_customer->id}}</h2>
        <h5>Waktu : {{$transaksi_customer->created_at}}</h5>
        <h5>-------------------------------------------------------------------------------------------------------</h5>
        <h5>-------------------------------------------------------------------------------------------------------</h5>
	</center>

	<table>
		<tr>
            <th>Plat Nomor Mobil</th>
            <th>: {{$transaksi_customer->plat_nomor}}</th>
        </tr>
        <tr>
            <th>Nama Mobil</th>
            <th>: {{$transaksi_customer->nama_mobil}}</th>
        </tr>
        <tr>
            <th>Warna Mobil</th>
            <th>: {{$transaksi_customer->warna_mobil}}</th>
        </tr>
        <tr>
            <th>Jenis Pelayanan</th>
            <th>: {{$transaksi_customer->jenis_pelayanan}}</th>
        </tr>
        <tr>
            <th>Keterangan</th>
            <th>: {{$transaksi_customer->keterangan}}</th>
        </tr>
    </table>

    <h5>-------------------------------------------------------------------------------------------------------</h5>

    @php
        $jp = $transaksi_customer->jenis_pelayanan;
        $ub = $transaksi_customer->uang_bayar;

        if($jp == "Cuci Biasa") {
            echo "Total Harga : Rp. 100.000 <br>";
            echo "<br>";
            echo "Uang Bayar : Rp.".$ub;
            echo "<br>";
            $kembali = $ub-100000;
            echo "Kembali : Rp.".$kembali;

        } else if ($jp == "Cuci + Salon") {
            echo "Total Harga : Rp. 250.000";
            echo "<br>";
            echo "Uang Bayar : Rp.".$ub;
            echo "<br>";
            $kembali = $ub-250000;
            echo "Kembali : Rp.".$kembali;

        } else if ($jp == "Engine Bay Cleaning") {
            echo "Total Harga : Rp. 500.000";
            echo "<br>";
            echo "Uang Bayar : Rp.".$ub;
            echo "<br>";
            $kembali = $ub-500000;
            echo "Kembali : Rp.".$kembali;

        } else if ($jp == "Detailing") {
            echo "Total Harga : Rp. 650.000";
            echo "<br>";
            echo "Uang Bayar : Rp.".$ub;
            echo "<br>";
            $kembali = $ub-650000;
            echo "Kembali : Rp.".$kembali;

        } else if ($jp == "Salon") {
            echo "Total Harga : Rp. 750.000";
            echo "<br>";
            echo "Uang Bayar : Rp.".$ub;
            echo "<br>";
            $kembali = $ub-750000;
            echo "Kembali : Rp.".$kembali;

        } else {
            echo "Total Harga : Rp. 5.000.000";
            echo "<br>";
            echo "Uang Bayar : Rp.".$ub;
            echo "<br>";
            $kembali = $ub-5000000;
            echo "Kembali : Rp.".$kembali;

        }
    @endphp
    <h5>-------------------------------------------------------------------------------------------------------</h5>
    <center>
        Terimakasih telah mempercayakan mobil anda kepada kami.
    </center>

</body>
</html>