<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q-App</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <div class="container">

        <div class="head-logo">
            <img src="/Img/regular-logo.png" class="logo">
            <h4 id="onlogo">Q-App</h4>
        </div>

        <h1 id="title">Devices Detail Page</h1>

        <p class="tabel">
        <table border=1>
            <tr>
                <td>Id</td>
                <td>Device ID</td>
                <td>Device Defect</td>
                <td>Device Origin</td>
            </tr>

            <?php foreach ($devicdetail as $q) : ?>

                <tr>
                    <td> <?php echo $q['Id']; ?> </td>
                    <td> <?php echo $q['device_id']; ?> </td>
                    <td>
                        <?php
                        if ($q['device_defect'] == 0) {
                            echo "Tidak Cacat";
                        } else {
                            echo "Cacat";
                        };
                        ?>
                    </td>
                    <td> <?php echo $q['device_origin']; ?> </td>
                </tr>

            <?php endforeach; ?>

        </table>
        </p>

        <div class="key">
            <a href="/home">Home</a>
            <a href="/devices">Device</a>
        </div>

    </div>
</body>

</html>