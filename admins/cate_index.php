<?php
function admin_cate_all(){ ?>
    <body>
    <?=admin_sidebar("categories")?>
    <?=admin_header("Categories All")?>
    <main>
        <div class="container">
            <div class="row">
                <a class="btn-floating btn-large waves-effect waves-light red right modal-trigger" href="#modal_cate_add" style="transform: translateY(-50px)"><i class="material-icons">add</i></a>
            </div>
            <div class="row">
                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach (cateAll() as $item){
                        admin_cate_component($item);
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="modal_cate_add" class="modal">
            <form>
                <div class="modal-content">
                    <h4>Add Categories</h4>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="cate_name" type="text" class="validate">
                            <label for="cate_name">Categories Name</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="btn waves-effect waves-green red modal-close">Cancel</a>
                    <a class="btn waves-effect waves-green green" id="cate_add">Add</a>
                </div>
            </form>
        </div>
    </main>
    <script>
        $(document).ready(function(){
            $('.modal').modal();
        });
        $(document).ready(function () {
            $('#cate_add').click(function (e) {
                e.preventDefault();
                $.post(
                    '/api/cate/add',
                    {
                        cate_name: $('#cate_name').val()
                    },
                    function (data) {
                        if (data === 'success'){
                            M.toast({html: "CATEGORIES : "+$('#cate_name').val()+" has been added", classes: 'green darken-1 rounded'});
                            $('#cate_name').val('');
                            location.reload();
                        }else {
                            M.toast({html: "ERROR can't add categories", classes: 'red darken-1 rounded'})
                        }
                    }
                )
            })
        })
    </script>
    <?=admin_scripts()?>
    </body>
    </html>
    <?php
}
