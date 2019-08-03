<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
        //request object
        var xhttp = new XMLHttpRequest();

        //how to get Response form server
        xhttp.onreadystatechange = function(){
            if (this.readyState === 4 && this.status === 200){
                console.log(this.responseText);
            }
            
        }

        //to make a request to a url we need open/send
        xhttp.open('GET', 'data.json', true);
        xhttp.setRequestHeader('content-type','application/json');
        xhttp.setRequestHeader('cache-control','no-cache');
        xhttp.send();


    </script>
</body>
</html>