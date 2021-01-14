<?php
function admin_work_all(){ ?>
    <body>
    <?=admin_sidebar("work-all")?>
    <?=admin_header("Work All")?>
    <main>
        <div class="container">
            <div class="row">
                <a class="btn-floating btn-large waves-effect waves-light red right" style="transform: translateY(-50px)" href="/admin/work/add"><i class="material-icons">add</i></a>
            </div>
            <div class="row">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Categories</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach (workAll(0) as $item){
                        admin_work_component($item);
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
