<?php
    include 'header.php';
    include 'navbar.php';
?>
<body>

    <div class="container">
        <!-- <h2><img class="icon" src="../img/arduino.png">Sensores</h2> -->
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="card">
                    <h3>TEMPERATURA</h3>
                    <div class="card-content">
                        <div class="gauge-temperature GaugeMeter gaugeMeter" data-theme="green" data-width="16" data-style="Arch" data-animationstep="0"></div>
                    </div>
                    <p class="value-temperature">0 C°</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-5">
                <div class="card">
                    <h3>HUMEDAD</h3>
                    <div class="card-content">
                        <div class="gauge-humidity gaugeMeter" data-theme="blue" data-width="16" data-style="Arch" data-animationstep="0"></div>
                    </div>
                    <p class="value-humidity">0 %</p>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3 col-md-5">
                Fecha actualización: 
                <p class="value-fecha-actualizacion">30-09-2022 12:30:00</p>                
            </div>    
        </div>    
    </div>
</body>

<script type='text/javascript' src="../js/jquery-3.5.1.min.js"></script>
<script type='text/javascript' src="../js/gauge-meter.js"></script>
<script>
    $(document).ready(function() {

        setInterval(charts, 1500);

    });

    function charts() {

        $.ajax({
            url: "http://localhost:8080/Sensores/backend/getData.php",
            type: "POST",
            dataType: "json",
            success: function(data) {

                $(".gauge-temperature").gaugeMeter({
                    percent: data.temperature * 100 / 50
                });
                $(".value-temperature").html(data.temperature + " C°");

                $(".gauge-humidity").gaugeMeter({
                    percent: data.humidity
                });
                $(".value-humidity").html(data.humidity + " %");

                //Fecha actualización
                $(".value-fecha-actualizacion").html(data.FECHA_ACTUALIZACION);            

            }
        });

    }
</script>