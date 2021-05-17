<?php
    if(isset($_POST["submit"]))
    {
        // $number=$_POST['Number'];
        $number="8980129712";
        $text=$_POST['Message'];

        // $url="www.way2sms.com/api/v1/sendCampaign";
        $url="www.sms4india.com/api/v1/sendCampaign";
        // $url="https://www.sms4india.com/api/v1/sendCampaign";
        $message = urlencode($text);// urlencode your message
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
        curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=ORI1I5FQ0R84CIQX83HKO6GE2O1BDMHS&secret=RS7CU9NAY8FUC2P2&usetype=stage&phone=$number&senderid=smitdhameliya10@gmail.com&message=$message");// post data
        // curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=GZSWFRLMWMYRPZCCMC44R7Z75K8KCA3L&secret=IRULGLKJSA7LEAUC&usetype=stage&phone=$number&senderid=smitdhameliya10@gmail.com&message=$message");// post data

        // curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=GZSWFRLMWMYRPZCCMC44R7Z75K8KCA3L&secret=IRULGLKJSA7LEAUC&usetype=stage&phone=$number&senderid=smitdhameliya10@gmail.com&message=$message");// post data

        // query parameter values must be given without squarebrackets.
        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        echo $result;
    }
?>