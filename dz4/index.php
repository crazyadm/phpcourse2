
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>

<?php
include_once "show.php"; ?>
<div id="content"></div>

<button id="more">Дальше</button>

<script>
    $(document).ready(function(){

        $('#more').on('click',function(){
            var rcount = $('hr').size(); //считаем количество нужных элементов
            $.ajax({
                type: "POST",
                url: "show.php",
                data: {"rcount": rcount},
                success: function(html){
                    $("#content").append(html);
                }
            });
            return false;
        });

    });
</script>


</body>
</html>