<?php 

function getPagination($totalPages,$limit){
    $fiterData = array();
    $pageid = isset($_GET['pageid']) ? (int) $_GET['pageid'] : 1;
    $output = '';
    if(isset($totalPages) && $totalPages > 1) {
        $i=0;
        $prev = $pageid - 1;
        $next = $pageid + 1; 
        if(isset($_GET) && !empty($_GET)){
            $fiterData = $_GET;
        }else{
            $fiterData['pageid'] = 1;
        }
        $output .= '<ul class="pagination justify-content-center mb-0">';

        if(isset($pageid) && $pageid != 1){
            $fiterData['pageid'] = $prev;
            $output .= "<li class='page-item'>";
            $output .='<a class="page-link" href="?'.http_build_query($fiterData).'"> Prev </a>';
            $output .= "</li>";
        }
        for($i=1; $i <= $totalPages; $i++) {
            if($pageid == $i) { 
                $output .= "<li class='page-item active'>";
                $output .='<span class="page-link"> '.$i.' </span>';
                $output .= "</li>"; 
            }else{
                $fiterData['pageid'] = $i;
                $output .= "<li class='page-item'>";
                $output .='<a class="page-link" href="?' .http_build_query($fiterData). '"> '.$i.' </a>';
                $output .= "</li>";
            }
        }
        if(isset($pageid) && $pageid != $totalPages) {
            $fiterData['pageid'] = $next;
            $output .= "<li class='page-item'>";
            $output .='<a class="page-link" href="?'.http_build_query($fiterData).'"> Next </a>';
            $output .= "</li>";
        }

    }
    echo $output;
}


?>