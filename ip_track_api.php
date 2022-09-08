<?php

//Default IP
$ip_addr='8.8.8.8';
$msg="";
//end default

//$ip_addr= $_SERVER["REMOTE_ADDR"];
if(isset($_POST['submit'])){
    $ip_addr=$_POST['ip_addr'];
    //echo "$ip_addr";
    $ip_url="http://ip-api.com/json/$ip_addr";
    $ip_information=file_get_contents($ip_url);
    $ip_json=json_decode($ip_information);
    //echo "<pre>";
     //print_r ($ip_json);
    if($ip_json ->status== ('fail')){
        $failmsg=ucwords($ip_json->message);
        $msg="<div class='alert alert-danger'>{$failmsg}</div>";
        echo $failmsg;
    }else{
        $ip_status=$ip_json->status;
        $ip_country=$ip_json->country;
        $ip_countryCode=$ip_json->countryCode;
        //$ip_type=$ip_json->type;
        $ip_region=$ip_json->region;
        $ip_regionName=$ip_json->regionName;
        $ip_city=$ip_json->city;
        $ip_zip=$ip_json->zip;
        $ip_lat=$ip_json->lat;
        $ip_lon=$ip_json->lon;
        $ip_timezone=$ip_json->timezone;
        //ISP Information
        $ip_isp=$ip_json->isp;
        $ip_org=$ip_json->org;
        $ip_as=$ip_json->as;
        $ip_query=$ip_json->query;
    echo $ip_status." And City Name" .$ip_city;

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
<div class="container py-5">
<div class="row">
    <div class="col-lg-5 col-md-8 col-12 mx-auto">
        <div class="card rounded bg-white border p-4">
            <div class="card-body">
                <h3 class="card-title md-3">Get IP Address Details</h3>
                        <?php echo $msg;?>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="ip_addr" class="form-label">IP Address</label>
                            <input type="text" class="form-control" id="ip_addr" value="<?php echo $ip_addr;?>" name="ip_addr">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Search</button>
                    </form>
            </div>
        </div>
    </div>
</div>


</div>   




<!-- Bootstrap JS SCript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>