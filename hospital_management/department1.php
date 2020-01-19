

<?php
include('search.inc.php');

 $search_text = $_GET['search_text'];
    if ($search_text== 'Cardiology') {        
            header('location: cardiology.php');
        
    }
        if ($search_text== 'Chaplaincy') {        
            header('location: Chaplaincy.php');
        
    }
    if ($search_text== 'Anesthetics') {        
            header('location: anesthetics.php');
        
    }
    if ($search_text== 'General Surgery') {        
            header('location: generalsurgery.php');
        
    }
    if ($search_text== 'Haematology') {        
            header('location: haematology.php');
        
    }
    if ($search_text== 'Nephrology') {        
            header('location: nephrology.php');
        
    }
    if ($search_text== 'Neurology') {        
            header('location: neurology.php');
        
    }
    if ($search_text== 'Orthopaedics') {        
            header('location: orthopaedics.php');
        
    }
?>
