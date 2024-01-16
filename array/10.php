<!-- Accessing Key and Value -->

<?php
$feedback = array(
    'google' => "Best Search Engine",
    'yahoo' => "Good for basic news",
    'instagram' => "Love for pics",
    'facebook' => "Stay connected with your friends"
);

foreach ($feedback as $item => $hi) {
    echo "$item: $hi"."<br>";
}
?>

