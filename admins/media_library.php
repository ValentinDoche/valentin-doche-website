<?php
function admin_media_library(){ ?>
    <body>
        <?=admin_sidebar("library")?>
        <?=admin_header("Library")?>
        <main>
            <div class="container">
                <div class="row">
                    <a class="btn-floating btn-large waves-effect waves-light red right" style="transform: translateY(-50px)" href="/admin/media/add"><i class="material-icons">add</i></a>
                </div>
                <div class="row media_library">
                    <?php
                        foreach (mediaAll() as $media){
                            media_component($media);
                        }
                    ?>
                </div>
            </div>
        </main>
        <?=admin_scripts()?>
        <script>
            $(document).ready(function (){
                $(".item").height($(".item").width())
                $('.modal').modal();
            })
        </script>
    </body>
    </html>
<?php
}
