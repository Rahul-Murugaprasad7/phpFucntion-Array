<?php
$place = array(
    'cbe' => 'climates',
    'kochi' => 'beaches',
    'goa' => 'nature'

);

echo $place['goa'];

$i = 0;
foreach($place as $places)
{
    echo "$i: $places \n";++$i;
}

?>