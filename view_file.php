<?php
 $storeuploadfile = array_diff(scandir('storeupload'), array('.','..'));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        define('TITLE', 'View Upload File');
        include('templates/header.html');
    ?>
</head>

<body>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <a href="homepage.php"><button class = "btn btn-secondary">Previous Page</button></a>
    <h1>View Upload Files</h1>
    <hr>
    <table class="table" style=" border:solid 2px; border-color:black; text-align:center;">
        <thead>
            <th style=" text-align:center;">Name</th>
            <th style=" text-align:center;">Type</th>
            <th style=" text-align:center;">Size</th>
            <th style=" text-align:center;">Action</th>
        </thead>
        <tbody>
            <?php foreach($storeuploadfile as $file):?>
            <?php $f = pathinfo($file); ?>
            <tr>
                <td><?php echo $f['filename'];?></td>
                <td><?php echo $f['extension'];?></td>
                <td><?php echo round(filesize(__DIR__.'/storeupload/'.$file)/1024,2)?>KB</td>
                <td><a href="<?php echo 'storeupload/' . $f['basename'] ?>" target="_blank">View or Download</a></td>
             </tr>
             <?php endforeach ?>
        </tbody>
    </table>

</body>
<footer>
    <?php
        include('templates/footer.html'); // Include the footer.
    ?>
</footer>

</html>