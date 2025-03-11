<?php 
function create_custom_service_post_type() {
    $args = array(
        'labels' => array(
            'name' => 'Dịch vụ',
            'singular_name' => 'Dịch vụ',
            'add_new' => 'Thêm Dịch vụ',
            'add_new_item' => 'Thêm mới Dịch vụ',
            'edit_item' => 'Chỉnh sửa Dịch vụ',
            'new_item' => 'Dịch vụ mới',
            'view_item' => 'Xem Dịch vụ',
            'all_items' => 'Tất cả Dịch vụ',
            'search_items' => 'Tìm kiếm Dịch vụ',
            'not_found' => 'Không tìm thấy Dịch vụ',
            'menu_name' => 'Dịch vụ',
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'show_in_rest' => true, // Để hỗ trợ Gutenberg editor
        'rewrite' => array('slug' => 'services'),
    );
    register_post_type('services', $args);
}

add_action('init', 'create_custom_service_post_type');

function create_service_taxonomy() {
    $args = array(
        'hierarchical' => true, // Cho phép phân cấp giống như category
        'labels' => array(
            'name' => 'Danh mục Dịch vụ',
            'singular_name' => 'Danh mục Dịch vụ',
            'search_items' => 'Tìm kiếm Danh mục Dịch vụ',
            'all_items' => 'Tất cả Danh mục Dịch vụ',
            'parent_item' => 'Danh mục cha',
            'parent_item_colon' => 'Danh mục cha:',
            'edit_item' => 'Chỉnh sửa Danh mục Dịch vụ',
            'update_item' => 'Cập nhật Danh mục Dịch vụ',
            'add_new_item' => 'Thêm mới Danh mục Dịch vụ',
            'new_item_name' => 'Tên mới Danh mục Dịch vụ',
            'menu_name' => 'Danh mục Dịch vụ',
        ),
        'show_ui' => true, // Hiển thị giao diện người dùng
        'show_admin_column' => true, // Hiển thị cột trong bảng quản trị
        'query_var' => true,
        'rewrite' => array('slug' => 'service-categories'),
    );

    // Đăng ký taxonomy "Danh mục Dịch vụ" cho post type "services"
    register_taxonomy('service_categories', 'services', $args);
}
add_action('init', 'create_service_taxonomy');