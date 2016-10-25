<?php
    function zapier($url, $json, $headers) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);  
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $output = curl_exec($ch);
        echo $output;
        curl_close($ch);
    }

    $url = 'YOUR_ZAPIER_WEBHOOK_ENDPOINT_HERE'; // add your Zapier webhook url 
    $json = json_encode($_POST);
    $headers = array('Accept: application/json', 'Content-Type: application/json');

    if('POST' == $_SERVER['REQUEST_METHOD']) {
        zapier($url, $json, $headers);
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zapier HTTP Requests</title>
    <meta name="description" content="Zapier HTTP Requests">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" />
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="eleven column">
                <form method="post" action="">
                    <div class="row">
                        <div class="six columns">
                            <h4>Newsletter Optin Form</h4>
                            <label>Email:</label>
                            <input class="u-full-width" type="email" name="email">
                        </div>
                    </div>
                    <input class="button-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

</body>
</html>