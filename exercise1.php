<?php
echo <<<_END
    <html>
        <head><title>To check  the numbers</title>
        <style>
            .tempName{
                color:blue;
            }
        </style>
        </head>
        <body>
            <form id="form1" method="post" action="">
                <label for="inputfname">Input your value </label> 
                <input id="inputfname" type="text" name="number" placeholder="Input value..." required="required"> 
                <br />
                <input id="submitbutton1" type="submit" name="send" value="SEND IT" />
            </form>
        </body>
    </html>
_END;
if(isset($_POST['send']))
{
    $tempNumber = $_POST['number'];

    if($tempNumber<0)
        echo "The value is negative";
    else if ($tempNumber > 0)
        echo "The value is positive";
    else
        echo "The value is Null";
}
?>