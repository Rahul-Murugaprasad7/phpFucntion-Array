<!-- Assignment Using the array Keyword (format index => value) -->

<?php
$feedback = array(
'google' =>"Best Search Engine",
'yahoo' => "Good for basic news",
'instagram' => "Love for pics",
'facebook' => "Stay connected with your friends"
);
echo $feedback['instagram'];

$j = 0;
foreach($feedback as $item)
{
echo "$j: $item \n";++$j;
}

?>