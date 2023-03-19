<?php

$voter_age = 20; 
$voter_has_pvc = true; 
$voter_ward = '020'; 

if ($voter_age < 18) {
    echo "Sorry, voter is below 18 years and is not eligible to vote.";
}

else if (!$voter_has_pvc) {
    echo "Sorry, voter does not have a Permanent Voter's Card (PVC) and is not eligible to vote.";
}

else if ($voter_ward !== '020') {
    echo "Sorry, voter's ward is not 020 and is not eligible to vote.";
}

else {
    echo "Voter eligible to vote.";
}

?>