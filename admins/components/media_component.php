<?php
function media_component($media){
    switch ($media['type']){
        case 'image/jpeg':
        case 'image/png':
            $image = $media['filename'];
            break;
        case 'application/pdf':
            $image = 'admins/assets/images/pdf.png';
            break;
        case 'application/zip':
            $image = 'admins/assets/images/zip.png';
            break;
        default:
            $image = 'admins/assets/images/file.png';
            break;
    }
    ?>

            <div class="col s5 m4 l2" style="background-image: url(/<?=$image?>); background-position: center; background-repeat: no-repeat" id="media-<?=$media['id']?>">
                <a class="modal-trigger" href="#modalgallery-<?=$media['id']?>">
                    <div class="item">
                        <i class="material-icons">info</i>
                        <p class="filename"><?=explode("/", $media['filename'])[1]?></p>
                    </div>
                </a>
            </div>
            <div id="modalgallery-<?=$media['id']?>" class="modal">
                <div class="modal-content">
                    <div class="row">
                        <div class="col s12 m8 l8 center">
                            <img src="/<?=$image?>" style="max-width: 100%">
                        </div>
                        <div class="col s12 m4 l4">
                            <form>
                                <div class="input-field col s12">
                                    <input id="filename-<?=$media['id']?>" type="text" class="validate" value="<?=$media['filename']?>" disabled>
                                    <label for="filename-<?=$media['id']?>"><?=$media['filename']?></label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="alt-<?=$media['id']?>" type="text" class="validate" value="<?=$media['alt']?>">
                                    <label for="alt-<?=$media['id']?>">ALT</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="url-<?=$media['id']?>" type="text" class="validate" value="https://valentindoche.com/<?=$media['filename']?>" disabled>
                                    <label for="url-<?=$media['id']?>">URL</label>
                                </div>
                                <div>
                                    <a class="btn waves-effect waves-light red darken-4 right" id="delete-<?=$media['id']?>">DELETE
                                        <i class="material-icons right">delete_forever</i>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="waves-effect waves-light btn green" id="save-<?=$media['id']?>">SAVE</a>
                    <a class="modal-close waves-effect waves-light btn red">CANCEL</a>
                </div>
            </div>
    <script>
        $(document).ready(function () {
            $('#save-<?=$media['id']?>').click(function (e) {
                e.preventDefault();
                $.post(
                    '/api/media/update',
                    {
                        id: <?=$media['id']?>,
                        alt: $('#alt-<?=$media['id']?>').val()
                    },
                    function (data) {
                        if (data === 'success'){
                            M.toast({html: "MEDIA : <?=$media['id']?> has been update", classes: 'green darken-1 rounded'})
                            $('#modalgallery-<?=$media['id']?>').modal('close');
                        }else {
                            M.toast({html: "MEDIA : <?=$media['id']?> <br> ERROR", classes: 'red darken-1 rounded'})
                        }
                    }
                )
            })
            $('#delete-<?=$media['id']?>').click(function (e) {
                e.preventDefault();
                if (confirm("Are you sure you want to delete this file?")){
                    $.post(
                        '/api/media/delete',
                        {
                            id: <?=$media['id']?>,
                            filename: "<?=$media['filename']?>"
                        },
                        function (data) {
                            if (data === 'success'){
                                M.toast({html: "MEDIA : <?=$media['id']?> has been deleted", classes: 'green darken-1 rounded'})
                                $('#modalgallery-<?=$media['id']?>').modal('close');
                                $('#media-<?=$media['id']?>').remove();
                            }else {
                                M.toast({html: "MEDIA : <?=$media['id']?> <br> ERROR", classes: 'red darken-1 rounded'})
                            }
                        }
                    )
                }
            })
        })
    </script>
<?php
}
