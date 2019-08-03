<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jquery Ajax</title>
</head>
<body>
    <div class="name"></div>
    <div class="name1"></div>
    <div class="name2"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
    /* load */
        $(".name").load('script.php', {'name': 'Henry Patricio Jr.'}, function(responseText, statustxt, xhr){
            console.log(responseText);
        });

        $.get('script.php?name=junn', function (data, statusText){
            console.log(data);
            $(".name1").text(data);
        });
        $.post('script.php',{ 'name': 'webcreator'}, function(data,status){
            console.log(data);
            $(".name2").text(data);
        

        });
    </script>
</body>
</html>