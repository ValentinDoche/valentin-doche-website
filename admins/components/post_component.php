<?php
function admin_post_component($post){ ?>
    <tr>
        <td><?=$post['title']?></td>
        <td><?=$post['short_description']?></td>
        <td class="post-button">
            <a class="btn waves-effect waves-light" href="/blog/<?=$post['slug']?>">SEE</a>
            <a class="btn waves-effect waves-light orange" href="/admin/post/modify/<?=$post['id']?>">MODIFY</a>
            <a class="btn waves-effect waves-light red" href="/admin/post/modify/<?=$post['id']?>">DELETE</a>
            <script>

            </script>
        </td>
    </tr>
<?php
}
