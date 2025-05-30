<?php 
session_start();
include ("connect.php");
if(isset($_SESSION["email"]))
{
$sql = "SELECT * FROM user WHERE email = '" . $_SESSION['email'] . "'";
$res = mysqli_query($conn, $sql) or die("[ERROR]");
$row = mysqli_fetch_array($res);
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/font.css">
    <title>Map</title>
    <style>
    #map {
        float: left;
        /* จัดแสดงที่ด้านซ้าย */
        width: 50%;
        /* ขนาดแผนที่เป็นครึ่งหนึ่งของหน้า */
        height: 100vh;
        /* สูงเท่ากับความสูงของหน้าจอ */
    }

    #content {
        float: left;
        /* จัดแสดงที่ด้านขวา */
        width: 50%;
        /* ขนาดเนื้อหาเป็นครึ่งหนึ่งของหน้า */
        padding: 20px;
        text-align: center;
    }
    </style>
</head>

<body>
    <!-- Header & Navbar -->
    <?php 
include "./templates/header.php";
?>
    </div>
    </header>
    <div id="map"></div>
    <div id="content">
        <h2>ที่อยู่ของสหกรณ์ออมทรัพย์</h2>
        <p>58 ถนนวิภาวดีรังสิต แขวงรัชดาภิเษก เขตดินแดง กรุงเทพมหานคร 10400สนใจรายละเอียดสามารถสอบถามได้ที่ 094-251-0903
            088-620-5165 , 084-742-0259</p>
        <h2>รถประจำทางที่ผ่าน</h2>
        <div class="row">
            <div class="col">รถประจำทางสาย 24</div>
            <div class="col">รถประจำทางสาย 107</div>
            <div class="col">รถประจำทางสาย 187</div>
            <div class="w-100"></div>
            <div class="col">รถประจำทางสาย 69</div>
            <div class="col">รถประจำทางสาย 129</div>
            <div class="col">รถประจำทางสาย 504</div>
            <div class="w-100"></div>
            <div class="col">รถประจำทางสาย 92</div>
            <div class="col">รถประจำทางสาย 138</div>
            <div class="col">รถประจำทางสาย 555</div>
        </div>
    </div>
</body>
<!-- Footer -->
<?php
include "./templates/footer.php";
?>
<!-- JAVA SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

<!-- เรียกใช้ Google Maps JavaScript API ด้วย API Key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAUDd96APiMKHCo0uSn2wq1qEpEXSgXPE"></script>
<script>
// โค้ด JavaScript สำหรับแสดงแผนที่
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: 13.778177447554423,
            lng: 100.55671648195133
        },
        zoom: 18
    });

    var marker = new google.maps.Marker({
        position: {
            lat: 13.778177447554423,
            lng: 100.55671648195133
        },
        map: map,
        title: 'This Is RMUTTO CPC'
    });
}
google.maps.event.addDomListener(window, 'load', initMap);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
< /html>