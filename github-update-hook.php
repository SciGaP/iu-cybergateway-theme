<?php

if ( $_POST['payload'] ) {
    shell_exec( 'cd /var/www/portals/iugateway/public/themes/iugateway && git reset --hard HEAD && git pull' );
}