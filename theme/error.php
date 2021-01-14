<?php
$code_details = [
        404 => "Page Not Found"
];

function error_html($error_code){
    $code_details = [
            403 => "Forbidden",
            404 => "Page Not Found"
    ];
    ?>
    <body>
        <?=menu()?>
        <div id="page">
            <?=header_html()?>
            <div id="error_status">
                <p class="code-error"><?=$error_code?></p><br>
                <p class="code-detail"><?=$code_details[$error_code]?></p>
                <a class="btn btn-primary" href="/">Return to home</a>
            </div>
            <?=scripts()?>
        </div>
    </body>
    </html>
<?php
}