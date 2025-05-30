<?php 
session_start();

include ("connect.php");

if(isset($_SESSION["email"]))
{
$sql = "SELECT * FROM user WHERE email = '" . $_SESSION["email"] ."' ";
$res = mysqli_query($conn, $sql) or die("[ERROR]");
$row = mysqli_fetch_array($res);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/font.css">
    <title>Home</title>
</head>

<body>
    
    <!-- Header & Navbar -->
    <?php 
include "./templates/header.php";
?>
    <!-- Content -->
    <div class="container">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <!-- Slide show -->
            <div class="col-10 col-sm-8 col-lg-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/Slid-pic1.jpg" class="d-block w-100" alt="SlidPic1">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Slid-pic2.jpg" class="d-block w-100" alt="SlidPic2">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Slid-pic3.jpg" class="d-block w-100" alt="SlidPic3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">สหกรณ์ออมทรัพย์</h1>
                <p>วัตถุประสงค์เพื่อส่งเสริมให้สมาชิกรู้จักการออมทรัพย์ และให้กู้ยืมเงินเมื่อเกิดความจำเป็น
                    หรือเพื่อก่อให้เกิดผลประโยชน์งอกเงย และได้รับการจดทะเบียนตามพระราชบัญญัติสหกรณ์ พ.ศ. 2542</p>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="container ">
                    <a href="balance.php" class="btn border border-dark">
                        <img src="img/wallet-icon.png" width="100" height="100">
                        <p>เงินฝาก</p>
                    </a>
                </div>
            </div>

            <div class="col">
                <div class="container ">
                    <a href="transaction.php" class="btn border border-dark">
                        <img src="img/statement-icon.png" width="100" height="100">
                        <p>รายการฝาก/ถอน</p>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="container">
                    <a href="dividend.php" class="btn border border-dark ">
                        <img src="img/dividend-icon.png" width="100" height="100">
                        <p>เงินปันผล</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Footer -->
<?php
include "./templates/footer.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
const myCarouselElement = document.querySelector('#myCarousel')
const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 2000,
    touch: false
})
</script>

</html>

<?php
  }
  else
  {
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';
    echo '<div class="container">';
    echo '<div class="alert alert-danger text-center" role="alert">กรุณาล๊อคอิน...</div>';
    echo '<a href="login.php" class="btn btn-primary btn-sm btn-block ">เข้าสู่ระบบ</a>';
    echo '</div>';
  }
?>