<?php
function admin_index(){ ?>
    <body>
        <?=admin_sidebar("home")?>
        <?=admin_header("Dashboard")?>
        <?=admin_dashboard()?>
        <?=admin_scripts()?>
    </body>
    </html>
<?php
}
