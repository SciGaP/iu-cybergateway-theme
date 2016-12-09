<?php

if ( $_POST['payload'] ) {
    shell_exec( 'cd /home/pga/portals/scigap/public/themes/scigap && git reset --hard HEAD && git pull' );
}

?>