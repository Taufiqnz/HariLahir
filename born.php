<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari input
    $inputTanggal = $_POST["tanggal"];

    // Coba mengonversi input menggunakan strtotime
    $waktuUnix = date("l", strtotime($inputTanggal));


    // Memeriksa apakah nilai input kosong


    if ($waktuUnix === false) {
        // Jika strtotime gagal, tampilkan pesan kesalahan
        echo "Invalid Date or Time Format.";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>When were you born?</title>

    <script>
        function resetPage() {
            location.reload();
        }

        function linked() {
            href = "date.php";
        }
    </script>

</head>

<body>
    <div class="d-grid">
        <img width="100%" height="560px" src="assets/photo/bayi.jpg" alt="">
        <a class="m-3 btn btn-primary" href="https://instagram.com/taufiq1020" target="blank">FOLLOW ME</a>
    </div>
    <form class=" position-absolute top-50 start-50 translate-middle d-block" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container bg-primary text-center p-5 rounded">
            <?php
            if (empty($inputTanggal)) {
                // echo "<script>alert('Input Values ​​Cannot Be Empty.');</script>";
            } else {
                echo "<b>You Were Born on The Day : $waktuUnix, $inputTanggal</b>" . "<br>";
            } ?>
            <label class="form-label p-4" for="tanggal">Enter Date or Time :</label><br>
            <input class="form-control border-success" type="date" name="tanggal" id="tanggal">
            <br>
            <button class="btn btn-secondary" type="submit">Process</button>
            <button class="btn btn-danger" type="submit" onclick="resetPage()">Reset</button>
            <?php if (!empty($result)) : ?>
                <p><?php echo $result; ?></p>
            <?php endif; ?>
            <?php if (!empty($error)) : ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>