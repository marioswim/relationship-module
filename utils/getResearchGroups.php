<?php

function getResearchGroups()
{
  $node	=	menu_get_object();
  if(isset($node))
  {

    $lan    =   $node->language;
    $nid    =   $node->nid;        
    $query  = 

      " SELECT n.title,n.nid, b.body_value
        FROM  node n,
              field_data_field_id_grupo i,
              field_data_body b
        WHERE n.nid = i.entity_id 
              AND
              n.nid=b.entity_id
              AND
              i.field_id_grupo_tid in (

          SELECT t1.tid
          FROM  node n1, 
                field_data_field_grupos_relacionados g1, 
                taxonomy_term_data t1
          WHERE n1.nid=".$nid."
                AND
                n1.nid=g1.entity_id 
                AND 
                g1.field_grupos_relacionados_tid = t1.tid) AND n.language = '".$lan."'
                and status = 1";
                      

    $result=db_query($query);
    return $result;
  }
  else
    return null;

}