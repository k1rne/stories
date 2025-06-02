<DOCTYPE html>
    <html lang = "en">
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
<div class ="container-fluid slider">
    <?php include './partials/header.php'; ?>
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/cat1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/cat2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/cat3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- cards-->
<div class="container">
    <h1 class="text-center feature mb-5">OКАК</h1>
    <div class="row">

        <?php
        $sql = "SELECT * FROM `topics`";
        $result = mysqli_query($con, $sql);

        if ($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['topic_id'];
                $topic_image = $row['topic_image'];
                $topic_name = $row['topic_name'];
                $topic_desc = $row['topic_desc'];

                echo '  <div class="col-md-4 col-sm-6 mb-5">
            <div class="card" style="width: 18rem;">
            <img src=' . $topic_image.' class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">' .$topic_name.'</h5>
                 <p class="card-text"> ' .$topic_desc.'</p>
                    <a href="stories.php?story_id='.$id.'" class="btn btn-black">more</a>
                 </div>
             </div>
        </div>';
            }
        }
        ?>




    </div>
</div>
<?php include './partials/footer.php'; ?>
    </body>
    </html>