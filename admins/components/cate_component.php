<?php
function admin_cate_component($cate){ ?>
    <tr id="cate-<?=$cate['id']?>">
        <td><?=ucfirst($cate['name'])?></td>
        <td class="cate-button">
            <a class="btn waves-effect waves-light red" id="cate-delete-<?=$cate['id']?>">DELETE</a>
            <script>
                $(document).ready(function () {
                    $('#cate-delete-<?=$cate['id']?>').click(function (e) {
                        e.preventDefault();
                        $.post(
                            '/api/cate/delete',
                            {
                                cate_id: <?=$cate['id']?>,
                            },
                            function (data) {
                                if (data === 'success'){
                                    $('#cate-<?=$cate['id']?>').remove();
                                    M.toast({html: "CATEGORIES : <?=$cate['name']?> has been deleted", classes: 'green darken-1 rounded'})
                                }else {
                                    M.toast({html: "CATEGORIES : <?=$cate['name']?> <br> ERROR", classes: 'red darken-1 rounded'})
                                }
                            }
                        )
                    })
                })

            </script>
        </td>
    </tr>
<?php
}
