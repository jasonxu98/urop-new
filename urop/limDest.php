<?php
    $src = $_POST["src"];
    $sql_query_dest = "select DISTINCT dest as dest from traceroute where src = '" . $src . "';";
    
    
    
    
    $list_four = $dbh->query($sql_query_dest);
    #if(pg_num_rows($list_four) == 0) {
    #   echo "<option value = \"No destinations found for this given source\"></option>";
    #}
    
    echo "<option value = \"" . pg_num_rows($list_four) . "\"></option>";
    
    while($row_list_dest = $list_four->fetch(PDO::FETCH_ASSOC)):
        $dest = $row_list_dest["dest"];
    
    //     $sql_query_name="select domain||'(" . $ip .  ")' as domain from serverlookup where " . $ip .  " = '" . $dest . "';";
    //     $list_five = $dbh->query($sql_query_name);
    
    // if($row_list_site = $list_five->fetch(PDO::FETCH_ASSOC)) {
    //     $site = $row_list_site["domain"];
    // }
    
    // $option = "<option value = \"" . $site . "\"></option>";
        $option = "<option value = \"" . $dest . "\"></option>";
    echo $option;
    endwhile;
   
?>
