<?php
function admin_post_all(){ ?>
    <body>
    <?=admin_sidebar("library")?>
    <?=admin_header("Post All")?>
    <main>
        <div class="container">
            <div class="row">
                <a class="btn-floating btn-large waves-effect waves-light red right" style="transform: translateY(-50px)" href="/admin/post/add"><i class="material-icons">add</i></a>
            </div>
            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Short Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach (blogAll(0) as $item){
                        admin_post_component($item);
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?=admin_scripts()?>
    </body>
    </html>
    <?php
}
