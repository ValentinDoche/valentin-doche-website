<?php
function admin_work_component($work){ ?>
    <tr id="work-<?=$work['id']?>">
        <td><?=$work['title']?> <?=$work['publish'] == 1 ? '✅' : '❌' ?></td>
        <td>
            <?php
            foreach (explode(",", $work['categories']) as $categories){
                echo ucfirst(cateID((int)$categories)['name'])." ";
            }
            ?>
        </td>
        <td class="work-button">
            <a class="btn waves-effect waves-light" href="/work/<?=$work['slug']?>" target="_blank">SEE</a>
            <a class="btn waves-effect waves-light orange" href="/admin/work/modify/<?=$work['id']?>">MODIFY</a>
            <a class="btn waves-effect waves-light red" id="work-delete-<?=$work['id']?>">DELETE</a>
            <script>
                $(document).ready(function () {
                    $('#work-delete-<?=$work['id']?>').click(function (e) {
                        e.preventDefault();
                        $.post(
                            '/api/work/delete',
                            {
                                work_id: <?=$work['id']?>,
                            },
                            function (data) {
                                if (data === 'success'){
                                    $('#work-<?=$work['id']?>').remove();
                                    M.toast({html: "POST : <?=$work['title']?> has been deleted", classes: 'green darken-1 rounded'})
                                }else {
                                    M.toast({html: "POST : <?=$work['title']?> <br> ERROR", classes: 'red darken-1 rounded'})
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
