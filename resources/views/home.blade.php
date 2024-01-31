<h1 style="text-align: center;">Học lap trinh Laravel tại Unicode</h1>
<?php 
if (env('APP_ENV') == 'production'){
    //call api live
    echo 'call api live';
}else{
    //call api sandbox
    echo 'call api sandbox';
}