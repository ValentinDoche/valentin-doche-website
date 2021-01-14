<?php
function admin_post_component($post){ ?>
    <tr id="post-<?=$post['id']?>">
        <td><?=$post['title']?></td>
        <td><?=$post['short_description']?></td>
        <td class="post-button">
            <a class="btn waves-effect waves-light" href="/blog/<?=$post['slug']?>">SEE</a>
            <a class="btn waves-effect waves-light orange" href="/admin/post/modify/<?=$post['id']?>">MODIFY</a>
            <a class="btn waves-effect waves-light red" id="post-delete-<?=$post['id']?>">DELETE</a>
            <script>
                $(document).ready(function () {
                    $('#post-delete-<?=$post['id']?>').click(function (e) {
                        e.preventDefault();
                        $.post(
                            '/api/post/delete',
                            {
                                post_id: <?=$post['id']?>,
                            },
                            function (data) {
                                if (data === 'success'){
                                    $('#post-<?=$post['id']?>').remove();
                                    M.toast({html: "POST : <?=$post['title']?> has been deleted", classes: 'green darken-1 rounded'})
                                }else {
                                    M.toast({html: "POST : <?=$post['title']?> <br> ERROR", classes: 'red darken-1 rounded'})
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
