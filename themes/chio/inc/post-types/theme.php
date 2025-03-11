<?php 
function create_custom_theme_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'giao diện',
            'singular_name' => 'giao diện',
            'add_new' => 'Thêm giao diện',
            'add_new_item' => 'Thêm mới giao diện',
            'edit_item' => 'Chỉnh sửa giao diện',
            'new_item' => 'giao diện mới',
            'view_item' => 'Xem giao diện',
            'all_items' => 'Tất cả giao diện',
            'search_items' => 'Tìm kiếm giao diện',
            'not_found' => 'Không tìm thấy giao diện',
            'menu_name' => 'giao diện',
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'show_in_rest' => true, // Để hỗ trợ Gutenberg editor
        'rewrite' => array('slug' => 'themes'),
    );
    register_post_type('themes', $args);
}

add_action('init', 'create_custom_theme_post_type');

function create_theme_taxonomy() {
    $args = array(
        'hierarchical' => true, // Cho phép phân cấp giống như category
        'labels' => array(
            'name' => 'Danh mục giao diện',
            'singular_name' => 'Danh mục giao diện',
            'search_items' => 'Tìm kiếm Danh mục giao diện',
            'all_items' => 'Tất cả Danh mục giao diện',
            'parent_item' => 'Danh mục cha',
            'parent_item_colon' => 'Danh mục cha:',
            'edit_item' => 'Chỉnh sửa Danh mục giao diện',
            'update_item' => 'Cập nhật Danh mục giao diện',
            'add_new_item' => 'Thêm mới Danh mục giao diện',
            'new_item_name' => 'Tên mới Danh mục giao diện',
            'menu_name' => 'Danh mục giao diện',
        ),
        'show_ui' => true, // Hiển thị giao diện người dùng
        'show_admin_column' => true, // Hiển thị cột trong bảng quản trị
        'query_var' => true,
        'rewrite' => array('slug' => 'theme-categories'),
    );

    // Đăng ký taxonomy "Danh mục Dịch vụ" cho post type "themes"
    register_taxonomy('theme_categories', 'themes', $args);
}
add_action('init', 'create_theme_taxonomy');