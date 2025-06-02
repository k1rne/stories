<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset ="UTF-8">
        <meta http-equiv="X-UA-Compitable" content ="IE=edge">
        <meta name="viewport" content="width-device-width", initial-scale = 1.0">
        <title>Stories Website</title>
        <!--bootstrap css cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- stylesheet -->
        <link rel ="stylesheet" href = "style.css">
    <!-- font awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
<body>
<?php include './partials/connect.php'; ?>
<?php include './partials/header.php'; ?>


<!--php code-->

<?php
$id = $_GET['story_id'];
$sql="SELECT * FROM `topics` WHERE topic_id=$id";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $topic_name = $row['topic_name'];
    $topic_desc = $row['topic_desc'];
    $topic_image = $row['topic_image'];
}
?>
<!--jumbotron NANI THE FUCK 😤 NO -->

<div class ="container-fluid">
    <div class="jumbotron bg-warning rounded">
        <div class="container">
            <h1 class ="display-4"><?php echo $topic_name;?></h1>
            <p class="lead"><?php echo $topic_desc;?></p>
            <button class="btn-btn-dark">type F to pay respect<a class="text-light" href="#" role="button">F</a></button>
            <div class ="container">
                <h1 class="display-4 text-center">enjoy</h1>
                <img src=<?php echo $topic_image ;?>  alt="">
                <p class="lead"><?php echo $topic_desc;?></p>
            </div>
        </div>
    </div>
</div>



<?php include './partials/footer.php'; ?>
</body>
</html>