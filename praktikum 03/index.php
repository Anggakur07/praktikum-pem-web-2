<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from submission</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container" mt="5">
        <h2>selamat datang diperpustakaan stt nf</h2>
        <p>silahkan isi buku tamu dibawah ini</p>
        <hr />
        <form method="post"  action="kunjungan.php">
            <div class="form-group row">
                <label for="fullname" class="col-4 col-form-label">nama lengkap</label>
                <div class="col-8">
                    <input id="fullname" name="fullname" placeholder="isi nama lengkap  kamu" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">email</label>
                <div class="col-8">
                    <input id="email" name="email" placeholder="isi dengan email aktif kamu" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="message" class="col-4 col-form-label">keperluan</label>
                <div class="col-8">
                    <textarea id="message" name="message" placeholder="isi keperluan kamu" cols="40" rows="5" class="form-control" required="required" aria-describedby="messageHelpBlock"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

    </div>
</body>

</html>