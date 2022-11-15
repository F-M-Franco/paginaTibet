<?php

if(isset($_POST['submit'])){
    $selectedPageId=$_POST['selectedPage'];
    if($selectedPageId==6){
        header('Location: DashboardTags.php');
    }else if($selectedPageId==7){
        header('Location: LogOut.php');
    }
    else if($selectedPageId==0){
        header('Location: InformationTags.php?selectedPageId=1');
    }
    else{
        header('Location: InformationTags.php?selectedPageId='.$selectedPageId);
    }
}

?>