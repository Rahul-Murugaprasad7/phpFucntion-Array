<!-- check the array if exist or add -->

<?php
$person = array('name' => 'John',
 'age' => 25, 
 'occupation' => 'Developer'
);

if (!array_key_exists('gender',$person))
{
    $person['gender'] = 'male';
}

print_r($person) ;
?>