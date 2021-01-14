<?php
function admin_post_add(){ ?>
    <body>
    <?=admin_sidebar("post-add")?>
    <?=admin_header("Post Add")?>
    <main>
        <div class="container">
            <form>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="post_title" type="text" class="validate" required>
                        <label for="post_title">Post Title</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="post_short_description" type="text" class="validate" required>
                        <label for="post_short_description">Post Short Description</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="post_meta_description" type="text" class="validate" required>
                        <label for="post_meta_description">Post Meta Description</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="post_slug" type="text" class="validate" required>
                        <label for="post_slug">Post Slug</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="post_image" type="text" class="validate" required>
                        <label for="post_image">Post Image</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="post_content" class="materialize-textarea"></textarea>
                        <label for="post_content">Post Content</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <label>
                            <input type="checkbox" id="post_publish"/>
                            <span>Publish</span>
                        </label>
                    </div>
                    <div class="input-field col s12 m6">
                        <a class="btn waves-effect waves-light green right" id="save_btn">SAVE</a>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?=admin_scripts()?>
    <script>
        $(document).ready(function () {
            $("#save_btn").click(function (e) {
                e.preventDefault()
                $.post(
                    '/api/post/add',
                    {
                        post_title : $('#post_title').val(),
                        post_short_description : $('#post_short_description').val(),
                        post_meta_description : $('#post_meta_description').val(),
                        post_slug : $('#post_slug').val(),
                        post_image: $('#post_image').val(),
                        post_content : tinyMCE.get('post_content').getContent(),
                        post_publish : $('#post_publish').is(":checked")
                    },
                    function (data) {
                        if (data === 'success'){
                            $('#post_title').val(" ")
                            $('#post_short_description').val(" ")
                            $('#post_meta_description').val(" ")
                            $('#post_slug').val(" ")
                            $('#post_image').val(" ")
                            tinyMCE.get('post_content').setContent(' ')
                            $('#post_publish').prop( "checked", false )
                            M.toast({html: "Post has been add", classes: 'green darken-1 rounded'})

                        }else {
                            M.toast({html: "Error cant add post", classes: 'red darken-1 rounded'})
                        }
                    }
                )
            })
        })

        tinymce.init({
            selector: '#post_content',
            plugins: 'preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount textpattern noneditable charmap quickbars emoticons',
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | save | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save | insertfile image media template link anchor codesample',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_retention: '2m',
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            toolbar_mode: 'sliding',
            noneditable_noneditable_class: 'mceNonEditable',
            codesample_languages: [
                {text: 'HTML/XML', value: 'markup'},
                {text: 'CSS', value: 'css'},
                {text: 'C-Like', value: 'clike'},
                {text: 'JavaScript', value: 'javascript'},
                {text: 'Apache Configuration', value: 'apacheconf'},
                {text: 'Arduino', value: 'arduino'},
                {text: 'Bash / Shell', value: 'bash'},
                {text: 'BBcode', value: 'bbcode'},
                {text: 'C', value: 'c'},
                {text: 'C#', value: 'csharp'},
                {text: 'C++', value: 'cpp'},
                {text: 'DNS zone file', value: 'dns-zone-file'},
                {text: 'Docker', value: 'docker'},
                {text: 'Excel Formula', value: 'xlsx'},
                {text: 'G-code', value: 'gcode'},
                {text: 'Git', value: 'git'},
                {text: 'GraphQL', value: 'graphql'},
                {text: '.ignore', value: 'ignore'},
                {text: 'Ini', value: 'ini'},
                {text: 'Java', value: 'java'},
                {text: 'Json', value: 'json'},
                {text: 'Kotlin', value: 'kotlin'},
                {text: 'Latex', value: 'latex'},
                {text: 'Liquid', value: 'liquid'},
                {text: 'Lua', value: 'lua'},
                {text: 'Markdown', value: 'markdown'},
                {text: 'Markup templating', value: 'markup-templating'},
                {text: 'MATLAB', value: 'matlab'},
                {text: 'MongoDB', value: 'mongodb'},
                {text: 'Nginx', value: 'nginx'},
                {text: 'PHP', value: 'php'},
                {text: 'PowerShell', value: 'powershell'},
                {text: '.properties', value: 'properties'},
                {text: 'Python', value: 'python'},
                {text: 'React JSX', value: 'jsx'},
                {text: 'React TSX', value: 'tsx'},
                {text: 'Sass', value: 'sass'},
                {text: 'Scss', value: 'scss'},
                {text: 'SQL', value: 'sql'},
                {text: 'Twig', value: 'twig'},
                {text: 'TypeScript', value: 'typescript'},
                {text: 'UnrealScript', value: 'unrealscript'}
            ],
            codesample_global_prismjs: true,
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
            save_onsavecallback: function () {
                $('#save_btn').click();
            }
        });
    </script>
    </body>
    </html>
<?php
}
