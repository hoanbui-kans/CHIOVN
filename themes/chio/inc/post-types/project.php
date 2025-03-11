<?php
function create_custom_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'Dự án',
            'singular_name' => 'Dự án',
            'add_new' => 'Thêm Dự án',
            'add_new_item' => 'Thêm mới Dự án',
            'edit_item' => 'Chỉnh sửa Dự án',
            'new_item' => 'Dự án mới',
            'view_item' => 'Xem Dự án',
            'all_items' => 'Tất cả Dự án',
            'search_items' => 'Tìm kiếm Dự án',
            'not_found' => 'Không tìm thấy Dự án',
            'menu_name' => 'Dự án',
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'show_in_rest' => true, // Để hỗ trợ Gutenberg editor
        'rewrite' => array('slug' => 'projects'),
    );
    register_post_type('projects', $args);
}
add_action('init', 'create_custom_post_type');

function create_project_taxonomy() {
    $args = array(
        'hierarchical' => true, // Cho phép phân cấp giống như category
        'labels' => array(
            'name' => 'Danh mục Dự án',
            'singular_name' => 'Danh mục Dự án',
            'search_items' => 'Tìm kiếm Danh mục Dự án',
            'all_items' => 'Tất cả Danh mục Dự án',
            'parent_item' => 'Danh mục cha',
            'parent_item_colon' => 'Danh mục cha:',
            'edit_item' => 'Chỉnh sửa Danh mục Dự án',
            'update_item' => 'Cập nhật Danh mục Dự án',
            'add_new_item' => 'Thêm mới Danh mục Dự án',
            'new_item_name' => 'Tên mới Danh mục Dự án',
            'menu_name' => 'Danh mục Dự án',
        ),
        'show_ui' => true, // Hiển thị giao diện người dùng
        'show_admin_column' => true, // Hiển thị cột trong bảng quản trị
        'query_var' => true,
        'rewrite' => array('slug' => 'project-categories'),
    );

    // Đăng ký taxonomy "Danh mục Dự án" cho post type "project"
    register_taxonomy('project_categories', 'projects', $args);
}
add_action('init', 'create_project_taxonomy');