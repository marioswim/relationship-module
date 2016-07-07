<div class="related-groups">
    
<?php


    foreach ($rg as $row) 
    {
        $text=strip_tags($row->body_value);
        echo '<div class="research-group">
                ';
                $aux=drupal_get_path_alias("node/".$row->nid);
                $aux=explode("/", $aux);
                $leng=count($aux)-1;
                $id=$aux[$leng];
                
        echo '<a id="link" href="/'.$lan.'/'.drupal_get_path_alias("node/".$row->nid).'">';

        echo '    <span>'.$row->title.'</span>
                  <span id="idGrp"> '.$id.'</span>
                  <div id="description">'.substr($text,0,200).'...</div>
                </a>
              </div>';
    }

?>
</div>