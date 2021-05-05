<!DOCTYPE html>
<html lang="en">
<?php include 'conf.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>

<body>

    <center>
        <h1>Nama Wilayah : <?php echo @$_GET['wilayah']; ?></h1>
        <form action="index.php" method="get">
            <select name='wilayah' onchange='this.form.submit()'>
                <option value=''></option>
                <option value='DKI Jakarta'>DKI Jakarta</option>
                <option value='Jawa Barat'>Jawa Barat</option>
                <option value='Banten'>Banten</option>
                <option value='Jawa Tengah'>Jawa Tengah</option>
            </select>
        </form>
        <?php if (!is_null(@$_GET['wilayah'])) { ?>
            <h2>Input Data Here :</h2>
            <?php include 'input.php'; ?>
            <br>_________________________________________________<br><br>
            <?php include 'output.php'; ?>
        <?php } ?>
    </center>
    <center><?php echo $footer; ?></center>
</body>

</html>