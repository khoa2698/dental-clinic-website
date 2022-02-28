<?php
 
// Nhận giá trị slug của chuyên mục
$sc = trim(htmlspecialchars(addslashes($_GET['sc'])));
 
// Lấy id của chuyên mụcs
$sql_get_id_cate = "SELECT id_cate, url, label FROM categories WHERE url = '$sc'";
 
// Chuyên mục tồnta5i
if ($db->num_rows($sql_get_id_cate)) {
    $id_cate = $db->fetch_assoc($sql_get_id_cate, 0)['id_cate'];
    $label_cate = $db->fetch_assoc($sql_get_id_cate, 0)['label'];
 
?>
<div class="container" style="margin: 30px auto;">
    <h5><a href="<?php echo $_DOMAIN ?>">Tin tức</a> <span class="iconify" data-icon="ic:round-greater-than"></span> <a href="#"><?php echo $label_cate ?></a></h5>
    <div class="row">
    <?php
 
    // Lấy số hàng trong table
    $sqlGetCountPost = "SELECT id_post FROM posts WHERE cate_1_id = '$id_cate' OR cate_2_id = '$id_cate' OR cate_3_id = '$id_cate' AND status = '1'";
    $countPost = $db->num_rows($sqlGetCountPost);
 
    // Lấy tham số trang
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
 
    $limit = 20; // Giới hạn số bài viết hiển thị trong 1 trang
    $totalPage = ceil($countPost / $limit); // Tổng số trang sau khi tính toán
         
    // Validate tham số page    
    if ($page > $totalPage) {
      $page = $totalPage;
    } else if ($page < 1) {
      $page = 1;
    }
       
    $start = ($page - 1) * $limit;
 
    $sql_get_latest_news = "SELECT * FROM posts WHERE status = '1' AND cate_1_id = '$id_cate' OR cate_2_id = '$id_cate' OR cate_3_id = '$id_cate' ORDER BY id_post DESC LIMIT $start, $limit";
    if ($db->num_rows($sql_get_latest_news)) {
        foreach ($db->fetch_assoc($sql_get_latest_news, 1) as $data_post) {
            echo '
                <div class="col-md-3">
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
    } else {
        echo '<div class="well well-lg">Chưa có bài viết nào cho chuyên mục này.</div>';
    }
 
    ?>
</div>
<?php
 
// Chuyên mục không tồn tại
} else {
    require 'templates/404.php';
}
 
?>