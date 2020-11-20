<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <link rel = "icon" href = "" type = "image/x-icon"> 
</head>
<body>
    <div style='border-style: solid; width: 50%; margin: auto; padding: 20px 60px 40px 60px;'>
        <div align='center'>
            <img src='https://kampus.antarbangsa.ac.id/pluginfile.php/1/theme_mb2nl/logo/1602325669/logo-antarbangsa-1024x355.png' alt='Logo STMIK Antar Bangsa' width='160px' height='60px' />
            <h1>Tugas Pemrograman PHP Basic Pekan 9</h1>
        </div><BR>
        <table width="450" border="1" cellpading="0" cellspacing="0" align="center">
            <tr>
                <td style="padding: 10px">
    <h2>Hasil Biodata Anda</h2>
<pre>
Nama             : <?php echo $_POST["nama"]; ?><p>
Tempat Tgl Lahir : <?php echo $_POST["ttl"]; ?><p>
Jenis Kelamin    : <?php echo $_POST["jk"]; ?><p>
Pendidikan       : <?php echo $_POST["pdk"]; ?><p>
Agama            : <?php echo $_POST["agama"]; ?><p>
Jumlah Anak      : <?php echo $_POST["anak"]; ?><p>
Hobi             : <?php echo $_POST["hobi"]; ?><p>
Kota             : <?php echo $_POST["kota"]; ?><p>
Alamat           : <?php echo $_POST["alamat"]; ?><p>
</pre>
                    <a href="index.html">INPUT DATA LAGI</a>
                    <hr>
                </td>
            </tr>
            
        </table>
    </div>
</body>
<!--- botika webchat begin -->
<script src="https://chat.botika.online/client/assets/js/botika.widget.js"></script> 
<script> 
	window.BotikaChat.init({
		'client': 'RI67JtR',
		'widget': {
			'caption': 'Halo, ada yang bisa RS Botika bantu?',
			
		}
	}); 
</script>
<!--- botika webchat end -->
</html>