<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>

        function showAlert(){
            alert("FEIN FEIN FEIN ");
        }

        function validateForm(){
            var nrp= document.getElementById("NRPku");
            if(nrp.value.length != 10){
                alert("NRP harus 10 digit");
                nrp.focus();
                return false;
            }
            if(isNaN(nrp.value)== true){
                alert("NRP harus berupa angka!");
                nrp.focus();
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <form action="https://www.google.co.id" method="get" onsubmit="return validateForm()">
            <div class="input-group">
                <span class="input-group-text">NRP</span>
                <input type="text" class="form-control" placeholder="isikan 10 digit NRP" name="NRP" id="NRPku">
            </div>
            <div class="input-group">
                <span class="input-group-text">Nama</span>
                <input type="text" class="form-control" placeholder="isikan Nama Lengkap" name="Nama" id="Namaku">
            </div>
            <div class="input-group">
                <span class="input-group-text">Umur</span>
                <input type="text" class="form-control" placeholder="isikan umur" name="Umur" id="Umurku">
            </div>
            <input type="reset" class="btn btn-warning" value="reset">
            <input type="submit" class="btn btn-success" value="kirim">
            <input type="button" class="btn btn-default" value="alert" onclick="showAlert()">
        </form>
    </div>

</body>
</html>