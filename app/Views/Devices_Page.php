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

        <h1 id="title">Device Page</h1>

        <p class="tabel">
        <table border=1>
            <tr>
                <td>Id</td>
                <td>Device Name</td>
                <td>Device Brand</td>
                <td>Device Quantity</td>
                <td>Device Status</td>
            </tr>


            <?php foreach ($device as $d) : ?>
                <tr>
                    <td> <?php echo $d['Id']; ?> </td>
                    <td> <?php echo $d['device_name'];  ?> </td>
                    <td> <?php echo $d['device_brand']; ?> </td>
                    <td> <?php echo $d['device_quantity']; ?> </td>
                    <td>

                        <?php if ($d['device_status'] == 1) {
                            echo "On";
                        } else {
                            echo "Off";
                        }  ?>

                    </td>
                </tr>

            <?php endforeach; ?>

        </table>
        </p>

        <div class="key">
            <a href="/home">Home</a>
            <a href="/detail">Devices Detail</a>
        </div>

    </div>
</body>

</html>