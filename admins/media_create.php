<?php
function admin_media_create(){ ?>
    <body>
        <?=admin_sidebar("Media Add")?>
        <?=admin_header("Media Add")?>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l4 offset-m3 offset-l4">
                        <form>
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" id="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" id="filename">
                                </div>
                            </div>
                            <div class="input-field col s12">
                                <input id="alt" type="text" class="validate">
                                <label for="alt">ALT</label>
                            </div>
                            <button class="btn waves-effect waves-light" id="send_file">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <script>
            $(document).ready(function (){
                $('#send_file').click(function (e) {
                    e.preventDefault();
                    var fd = new FormData();
                    fd.append('file', $('#file')[0].files[0])
                    if (!!$('#alt').val()){
                        fd.append('alt', $('#alt').val())
                    }else {
                        fd.append('alt', ' ')
                    }
                    $.ajax({
                        url: '/api/media/add',
                        type: 'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        success: function (data) {
                            if (data==='success'){
                                M.toast({html: "File has been uploaded", classes: 'green darken-1 rounded'})
                                $('#alt').val('')
                                $('#filename').val('')
                            }else {
                                M.toast({html: "Error File Not Upload", classes: 'red darken-1 rounded'})
                            }
                        }

                    })
                })
            })
        </script>
        <?=admin_scripts()?>
    </body>
    </html>
<?php
}