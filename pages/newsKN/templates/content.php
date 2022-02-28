<?php
 
// Trang nội dung bài viết
if (isset($_GET['sp']) && isset($_GET['id'])) {
    require 'posts.php';
// Trang chuyên mục
} else if (isset($_GET['sc'])) {
    require 'categories.php';
// Trang tìm kiếm
} else if (isset($_GET['s'])) {
    require 'search.php';
// Trang chủ
} else {
 // code
    require "latest-news.php";
}
 
?>