<?php
function admin_sidebar($active){ ?>
        <div class="row" style="margin-bottom: 0">
            <ul id="slide-out" class="sidenav sidenav-fixed teal darken-2">
                <li><div class="user-view center-align">
                        <img class="circle" src="/admins/assets/images/logo.png" style="margin: auto;">
                        <span class="white-text name" style="font-size: 1.5em"><?=getName($_SESSION['username'])?></span>
                        <span class="white-text">
                    <a id="profile" class="white-text" style="cursor: pointer;"><i class="material-icons">account_circle</i></a>
                    <a id="logout" class="white-text" style="cursor: pointer;"><i class="material-icons">exit_to_app</i></a>
                </span>
                    </div>
                </li>
                <li><div class="divider"></div></li>
                <li><a href="/admin"><i class="material-icons">home</i>Home</a></li>
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header" style="padding: 0 32px"><i class="material-icons">perm_media</i> Media</a>
                            <div class="collapsible-body teal darken-1">
                                <ul>
                                    <li><a href="/admin/media/library">Library</a></li>
                                    <li><a href="/admin/media/add">Add New</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header" style="padding: 0 32px"><i class="material-icons">text_snippet</i> Post</a>
                            <div class="collapsible-body teal darken-1">
                                <ul>
                                    <li><a href="/admin/post/all">All Post</a></li>
                                    <li><a href="/admin/post/add">Add New</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header" style="padding: 0 32px"><i class="material-icons">business_center</i> Work</a>
                            <div class="collapsible-body teal darken-1">
                                <ul>
                                    <li><a href="/admin/work/all">All Work</a></li>
                                    <li><a href="/admin/work/add">Add New</a></li>
                                    <li><a href="/admin/work/categories">Categories</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="/admin/settings"><i class="material-icons">settings</i>Site Web</a></li>
            </ul>
            <script>
                $(document).ready(function (){
                    $('.sidenav').sidenav();
                    $('.collapsible').collapsible();
                    $("#profile").click(function (e){
                        document.location.pathname = '/admin/profile'
                    })
                    $("#logout").click(function (e) {
                        e.preventDefault();

                        $.post(
                            '/api/logout',
                            {

                            },
                            function (data) {
                                if (data === 'success'){
                                    document.location.pathname = '/admin/login'
                                }else {
                                    M.toast({html: "Error, Cannot Disconnect", classes: 'red darken-1 rounded'})
                                }
                            }

                        )
                    })
                })

            </script>
        </div>
<?php
}