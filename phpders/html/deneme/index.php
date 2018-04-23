<!DOCTYPE html>





<html class=" desktop" lang="tr">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<style>
    #GoogleMap {
        height: 1200px;
        width: 100%;
    }

    .MainPageHeaderBox {
        background-color: rgb(42, 120, 165);
        background-position: center;
        border-bottom-width: 0px;
        border-left-width: 0px;
        border-right-width: 0px;
        border-top-width: 0px;
        margin-bottom: 0px;
        padding-top: 0px;
        float: none;
        height: 44px;
        width: 100%;
        color: white;

        font-family: 'Franklin Gothic Medium';
        text-align: center;

    }

    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdown:hover {
        background-color: red;
    }

    .dropdown .dropbtn {
        padding-top: 13px;
        padding-bottom: 13px;
        padding-right: 13px;
        padding-left: 13px;
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
        text-align: left;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: fit-content;
        box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        margin: 0;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 13px;
        padding-bottom: 13px;

        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown-content p {
        color: black;
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
        margin: 0;
        text-decoration: none;
        text-align: left;
    }

    .dropdown:hover .dropdown-content {
        display: block;

    }

    .CihazBulContentSearchArea {
        font-size: 15px;
        margin: 0;
        padding: 5px 5px;
        width: 150px;
    }

    .CihazBulContentName {
        font-size: 18px;
    }
   
</style>



<head>
    <title> NETAŞ MENU </title>
</head>

<body>



    <div class="MainPageHeaderBox">

        <div class="dropdown" style="margin-right: 50px;">

            <button class="dropbtn">
                Kemal Günsay
                <i class="fa fa-caret-down" style="padding-left: 5px;"></i>
            </button>
            <div class="dropdown-content">
                <a href="">Ayarlar</a>
                <a href="">Oturumu Kapat</a>
            </div>
        </div>

        <div class="dropdown" style="margin-right: 50px;">
            <button class="dropbtn">
                Cihaz Bul
                <i class="fa fa-caret-down" style="padding-left: 5px;"></i>
            </button>
            <div class="dropdown-content">
                <form action="index.php" method=post>
                    <div style="display: block; width: 240px; height: 14px; margin: 5px;">
                        <div style="float: left; margin:0; padding: 5px">
                            <p class="CihazBulContentName">İl :</p>
                        </div>

                        <div style="float: right; margin:0; ">
                            <input class="CihazBulContentSearchArea" type="text" name="cihazbul_il" autocomplete="on">
                        </div>
                    </div>
                    <br style="margin: 0; height: 0;">
                    <div style="display: block; width: 240px; height: 14px; margin: 5px;">
                            <div style="float: left; margin:0; padding: 5px">
                                <p class="CihazBulContentName">İlçe :</p>
                            </div>
    
                            <div style="float: right; margin:0; ">
                                <input class="CihazBulContentSearchArea" type="text" name="cihazbul_ilce" autocomplete="on">
                            </div>
                    </div>
                    <br>
                    <div style="display: block; width: 240px; height: 34px; margin: 5px; ">
                            <div style="float: left; margin:0; padding: 5px">
                                <p class="CihazBulContentName">Sokak :</p>
                            </div>
    
                            <div style="float: right; margin:0; ">
                                <input class="CihazBulContentSearchArea" type="text" name="cihazbul_sokak" autocomplete="on">
                            </div>
                    </div>
                    
                    <div style="display: block; width: 240px; height: 34px; margin: 5px; ">
                            <div style="float: left; margin:0; padding: 5px">
                                <p class="CihazBulContentName"></p>
                            </div>
    
                            <div style="float: right; margin:0; ">
                                <input class="CihazBulContentSearchArea" type="submit" value="CİHAZ BUL">
                            </div>
                    </div>


                </form>

            </div>
        </div>


        <div class="dropdown">
            <button class="dropbtn">
                Cihaz Ekle
                <i class="fa fa-caret-down" style="padding-left: 5px;"></i>
            </button>
            <div class="dropdown-content">
                <form action="dbinsert.php" method=post>
                    <div style="display: block; width: 240px; height: 14px; margin: 5px;">
                        <div style="float: left; margin:0; padding: 5px">
                            <p class="CihazBulContentName">İl :</p>
                        </div>

                        <div style="float: right; margin:0; ">
                            <input class="CihazBulContentSearchArea" type="text" name="cihazbul_il" autocomplete="on">
                        </div>
                    </div>
                    <br style="margin: 0; height: 0;">
                    <div style="display: block; width: 240px; height: 14px; margin: 5px;">
                            <div style="float: left; margin:0; padding: 5px">
                                <p class="CihazBulContentName">İlçe :</p>
                            </div>
    
                            <div style="float: right; margin:0; ">
                                <input class="CihazBulContentSearchArea" type="text" name="cihazbul_ilce" autocomplete="on">
                            </div>
                    </div>
                    <br>
                    <div style="display: block; width: 240px; height: 34px; margin: 5px; ">
                            <div style="float: left; margin:0; padding: 5px">
                                <p class="CihazBulContentName">Sokak :</p>
                            </div>
    
                            <div style="float: right; margin:0; ">
                                <input class="CihazBulContentSearchArea" type="text" name="cihazbul_sokak" autocomplete="on">
                            </div>
                    </div>
                    
                    <div style="display: block; width: 240px; height: 34px; margin: 5px; ">
                            <div style="float: left; margin:0; padding: 5px">
                                <p class="CihazBulContentName"></p>
                            </div>
    
                            <div style="float: right; margin:0; ">
                                <input class="CihazBulContentSearchArea" type="submit" value="CİHAZ EKLE">
                            </div>
                    </div>


                </form>

            </div>
        </div>




    </div>

	<div>
		<?php
		include 'dbquery.php';
		if( $lastData ) echo $lastData[($index)-2]['ID']; 
		?>		
	</div>

                            	


    <!-- GoogleMaps Starts -->

    <div id="GoogleMap">

    </div>
    <!-- Replace the value of the key parameter with your own API key. -->
    <script>
        function initxMap() {
            var uluru = { lat: 37.126084, lng: 35.110288 };
            var map = new google.maps.Map(document.getElementById('GoogleMap'), { zoom: 7, center: uluru, keyboardShortcuts: true, disableDefaultUI: false, draggable: true });
            //var marker = new google.maps.Marker({ position: uluru, map: map }); 
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2NvXp6PDIJ979JsbwgRYrTjZC9mLrYUQ&callback=initxMap"> </script>

</body>



</html>
