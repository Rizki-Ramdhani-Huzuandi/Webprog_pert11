<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data mahasiswa</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div id="konten"></div>
	</div>

	<script>
		const jsondta = new XMLHttpRequest()
		jsondta.open("GET","http://localhost/webprogb/server/listdatamhs.php")
		jsondta.send()

		jsondta.onload = function(){
			const mydta = JSON.parse(this.responseText)
			let tx += '<h3>List Data Mahasiswa</h3>'
			tx += '<table class="table">'
			tx += '<thead>'
			tx += '<tr>'
			tx += '<th scope="col">#</th>'
			tx += '<th scope="col">Nim</th>'
			tx += '<th scope="col">Nama</th>'
			tx += '<th scope="col">Jkel</th>'
			tx += '<th scope="col"><a class="btn btn-primary" href="frmdatamhs.php">Tambah'
			tx += '</tr>'
			tx += '</thead>'
			tx += '<tbody>'
			tx += '<tr>'
			for(i=0;<mydta.length;i++){
				tx += '<th scope="row">+no+</th>'
				tx += '<td>'+mydta+[i][0]+'</td>'
				tx += '<td>'+mydta+[i][1]+'</td>'
				tx += '<td>'+mydta+[i][2]+'</td>'
				tx += '<td><a href="frmeditmhs.php?nim="></a>edit<a href="frmhapusmhs.php"></a>hapus</td>'
			}
			
		    tx += '</tr>'
		  	tx += '</tbody>'
			tx += '</table>'

			document.getElementById("konten").innerHTML = tx
		}

	</script>
	
</body>
</html>