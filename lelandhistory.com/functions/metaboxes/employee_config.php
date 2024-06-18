<?php

function add_custom_meta_box()
{
    add_meta_box("gw_employee_config", "Employee Config", "custom_meta_box_markup", "employees", "side", "low", null);
}

add_action("add_meta_boxes", "add_custom_meta_box");


function custom_meta_box_markup($object)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

?>
        <div style="margin-bottom: 10px;">
            <label style="display: block; font-size: 12px;">Gallery ID</label>
            <input name="employee-config-1" type="text" value="<?php echo get_post_meta($object->ID, "employee-config-1", true); ?>">
        </div>
        <div>
            <label style="display: block; font-size: 12px;">Form ID</label>
            <input name="employee-config-2" type="text" value="<?php echo get_post_meta($object->ID, "employee-config-2", true); ?>">
        </div>

        <div>
            <label style="display: block; font-size: 12px;">Employee Phone</label>
            <input name="employee-config-3" type="text" value="<?php echo get_post_meta($object->ID, "employee-config-3", true); ?>">
        </div>

        <div>
            <label style="display: block; font-size: 12px;">Specialties</label>
            <textarea name="employee-config-4" style="min-height: 300px;"><?php echo get_post_meta($object->ID, "employee-config-4", true); ?></textarea>
        </div>

    <?php  
}

function save_custom_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    // Make sure this matches post type you are saving to.
    $slug = "employees";
    if($slug != $post->post_type)
        return $post_id;

    $meta_box_text_value = "";

    if(isset($_POST["employee-config-1"]))
    {
        $meta_box_text_value = $_POST["employee-config-1"];
    }   
    update_post_meta($post_id, "employee-config-1", $meta_box_text_value);

    if(isset($_POST["employee-config-2"]))
    {
        $meta_box_text_value = $_POST["employee-config-2"];
    }   
    update_post_meta($post_id, "employee-config-2", $meta_box_text_value);

    if(isset($_POST["employee-config-3"]))
    {
        $meta_box_text_value = $_POST["employee-config-3"];
    }   
    update_post_meta($post_id, "employee-config-3", $meta_box_text_value);

    if(isset($_POST["employee-config-4"]))
    {
        $meta_box_text_value = $_POST["employee-config-4"];
    }   
    update_post_meta($post_id, "employee-config-4", $meta_box_text_value);

}

add_action("save_post", "save_custom_meta_box", 10, 3);

function remove_custom_field_meta_box()
{
    remove_meta_box("employee", "post", "normal");
}

add_action("do_meta_boxes", "remove_custom_field_meta_box");