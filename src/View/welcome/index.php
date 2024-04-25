<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the MVC Playground!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #006666;
            text-align: center;
            margin-top: 100px;
        }

        .hello {
            font-size: 36px;
            color: #333;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
    </style>
</head>
<body onload="startTime()">
<div class="hello">
    Welcome to the playground, <?php echo $data['name'] ?? 'Anonymous'; ?>!
    <br>🕒 <b id="clock"></b>
</div>
</body>
</html>
<script>
    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;
        setTimeout(startTime, 1000);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }
        ;
        return i;
    }
</script>
