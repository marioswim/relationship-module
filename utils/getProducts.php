<?php
function getProducts()
{
		$node	=	menu_get_object();

		$lan    = 	$node->language;
        $uri    = 	request_uri();
        $pos    = 	strrpos($uri,"/")+1;
        $idGrp  = 	substr($uri, $pos);
        
        $query  = 
          " SELECT *
            FROM node 
            WHERE nid in(

              SELECT n.nid
              FROM  node n, 
                    field_data_field_grupos_relacionados g, 
                    taxonomy_term_data t  
              WHERE n.language ='".$lan."'
                    AND
                    n.nid=g.entity_id 
                    AND 
                    g.field_grupos_relacionados_tid = t.tid
                    AND
                    t.name like '".$idGrp."')";

        $result=db_query($query);

        return $result;
        
}