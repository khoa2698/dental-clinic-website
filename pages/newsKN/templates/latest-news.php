<div class="container" style="margin-bottom: 80px; margin-top: 50px;">
    <div class="row">
        <div class="col-md-3">
            <nav class="navbar sideBar" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo $_DOMAIN; ?>">Chủ đề</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <?php

                            // Lấy danh sách chuyên mục cấp 1
                            $sql_get_list_menu_1 = "SELECT * FROM categories WHERE type = '1' ORDER BY sort ASC";
                            if ($db->num_rows($sql_get_list_menu_1)) {
                                // In chuyên mục cấp 1
                                foreach ($db->fetch_assoc($sql_get_list_menu_1, 1) as $data_menu_1) {
                                    // Lấy chuyên mục cấp 2 theo id cha (cấp 1)
                                    $sql_get_list_menu_2 = "SELECT * FROM categories WHERE type = '2' AND parent_id = '$data_menu_1[id_cate]' ORDER BY sort ASC";
                                    if ($db->num_rows($sql_get_list_menu_2)) {
                                        // In chuyên mục cấp 2
                                        $sub_menu = '<ul class="dropdown-menu">';
                                        foreach ($db->fetch_assoc($sql_get_list_menu_2, 1) as $data_menu_2) {
                                            $sub_menu .= '<li><a href="' . $_DOMAIN . 'category/' . $data_menu_2['url'] . '">' . $data_menu_2['label'] . '</a></li>';
                                        }
                                        $sub_menu .= '</ul>';
                                        echo '
                                        <li class="dropdown">
                                            <a href="' . $_DOMAIN . 'category/' . $data_menu_1['url'] . '" class="dropdown-toggle" data-toggle="dropdown">' . $data_menu_1['label'] . ' <span class="caret"></span></a>
                                            ' . $sub_menu . '
                                        </li>
                                    ';
                                    } else {
                                        $sub_menu = '';
                                        echo '<li><a href="' . $_DOMAIN . 'category/' . $data_menu_1['url'] . '">' . $data_menu_1['label'] . '</a>' . $sub_menu . '</li>';
                                    }
                                }
                            }

                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-9">
            <h3>Tin mới nhất</h3>
            <div class="row">
                <?php

                // Lấy số hàng trong table
                $sqlGetCountPost = "SELECT id_post FROM posts WHERE status = '1'";
                $countPost = $db->num_rows($sqlGetCountPost);

                // Lấy số trang
                if (isset($_GET['p'])) {
                    $page = trim(htmlspecialchars(addslashes($_GET['p'])));

                    if (preg_match('/\d/', $page)) {
                        $page = $page;
                    } else {
                        $page = 1;
                    }
                } else {
                    $page = 1;
                }

                $limit = 12; // Giới hạn số bài viết hiển thị trong 1 trang
                $totalPage = ceil($countPost / $limit); // Tổng số trang sau khi tính toán

                // Validate tham số page    
                if ($page > $totalPage) {
                    $page = $totalPage;
                } else if ($page < 1) {
                    $page = 1;
                }

                $start = ($page - 1) * $limit;

                $sql_get_latest_news = "SELECT * FROM posts WHERE status = '1' ORDER BY id_post DESC LIMIT $start, $limit";
                if ($db->num_rows($sql_get_latest_news)) {
                    foreach($db->fetch_assoc($sql_get_latest_news, 1) as $data_post) {
                        echo '
                            <div class="col-md-6">
                                <div class="thumbnail">
                                    <a href="' . $_DOMAIN . $data_post['slug'] . '-' . $data_post['id_post'] . '.html">
                                        <img src="' . $data_post['url_thumb'] . '">
                                    </a>
                                    <div class="caption">
                                        <h3><a href="' . $_DOMAIN . $data_post['slug'] . '-' . $data_post['id_post'] . '.html">' . $data_post['title'] . '</a></h3>
                                        <p>' . $data_post['descr'] . '</p>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                    echo '</div>';
                    echo '
                        <div class="btn-toolbar" role="toolbar" style="margin-top: 30px">
                            <div class="btn-group">
                    ';
            
                    # Pagination button
                    if ($page > 1 && $totalPage > 1) {
                        echo '
                            <a href="' . $_DOMAIN . ($page - 1 ) . '" class="btn btn-default">
                                <span class="iconify" data-icon="mdi:less-than"></span>
                            </a>
                        ';
                    }

                    for ($i = 1; $i <= $totalPage; $i++) {
                        if ($i == $page){
                            echo '<a class="btn btn-primary">' . $i . '</a>';
                        } else {
                            echo '
                                <a href="' . $_DOMAIN . $i . '" class="btn btn-default">
                                    ' . $i . '
                                </a>
                            ';
                        }
                    }

                    if ($page < $totalPage && $totalPage > 1) {
                        echo '
                            <a href="' . $_DOMAIN . ($page + 1 ) . '" class="btn btn-default">
                                <span class="iconify" data-icon="mdi:greater-than"></span>
                            </a>
                        ';
                    }
                    echo '
                            </div>
                        </div>
                    ';
                }
                ?>

            </div>

        </div>
</div>