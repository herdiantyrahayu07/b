<?php

${"GLOBALS"}["lyucwuflpij"] = "posttags";
${"GLOBALS"}["mjerlibga"] = "counter";
${"GLOBALS"}["rfwqoybxowv"] = "total";
${"GLOBALS"}["ercrbledv"] = "postid";
${"GLOBALS"}["wrxkbyfon"] = "val";
${"GLOBALS"}["fcgbmqgyvw"] = "mydata";
${"GLOBALS"}["qxbwkbolzylp"] = "nonce";
${"GLOBALS"}["obhydqtgeyw"] = "k";
${"GLOBALS"}["rgosdwqdhpjl"] = "sidebar_pos";
${"GLOBALS"}["nikgtnh"] = "key";
${"GLOBALS"}["txjhugrxjqnc"] = "value";
${"GLOBALS"}["wbrtrxh"] = "bgkolor";
${"GLOBALS"}["alphhjzvwkch"] = "backkolor";
${"GLOBALS"}["hqmjxegtymfb"] = "borkolor";
${"GLOBALS"}["jyngbykt"] = "kolor";
${"GLOBALS"}["xpehkoi"] = "has_url";
${"GLOBALS"}["mubjtmebusr"] = "next_id";
${"GLOBALS"}["oelcmnvvarv"] = "attachment_id";
${"GLOBALS"}["mxiplpjo"] = "attachment_ids";
${"GLOBALS"}["hhytfkwgjwd"] = "next_attachment_url";
${"GLOBALS"}["lxhotsj"] = "current_category";
${"GLOBALS"}["mbestgop"] = "class";
${"GLOBALS"}["xfpvnkpykeo"] = "show_count";
${"GLOBALS"}["uydmjz"] = "name";
${"GLOBALS"}["nelbmiguquqk"] = "feed";
${"GLOBALS"}["rvfmdwhyy"] = "feed_image";
${"GLOBALS"}["assjjrr"] = "use_desc_for_title";
${"GLOBALS"}["fgngit"] = "category";
${"GLOBALS"}["nmmdpbocusk"] = "lclass";
${"GLOBALS"}["hxepegtjkq"] = "children";
${"GLOBALS"}["vmrokehjhw"] = "cat_name";
${"GLOBALS"}["kteghcgwn"] = "max_depth";
${"GLOBALS"}["agbdusvft"] = "children_elements";
${"GLOBALS"}["bktuawxgxrkl"] = "element";
${"GLOBALS"}["pbotqqrwz"] = "output";
${"GLOBALS"}["bmbdqwhj"] = "withul";
${"GLOBALS"}["hrujwh"] = "attributes";
${"GLOBALS"}["nqhjrszgtb"] = "caret";
${"GLOBALS"}["wbcodxbr"] = "item";
${"GLOBALS"}["jwdsnvp"] = "classes";
${"GLOBALS"}["miautzi"] = "depth_classes";
${"GLOBALS"}["nfvtvhlb"] = "class_names";
${"GLOBALS"}["crhpvrh"] = "display_depth";
${"GLOBALS"}["cikoselgwx"] = "indent";
${"GLOBALS"}["hdwnuueoxkl"] = "no";
${"GLOBALS"}["fgjdktwgvdl"] = "pop_posts";
${"GLOBALS"}["nfviqff"] = "popularposts";
${"GLOBALS"}["jrnceraq"] = "orig_post";
${"GLOBALS"}["voeemxfnoaw"] = "lastPosts";
${"GLOBALS"}["nmcakaolevjg"] = "numberOfPosts";
${"GLOBALS"}["axkdgu"] = "filesize";
${"GLOBALS"}["iyndamlhw"] = "dimension";
${"GLOBALS"}["qaujbiwmdyie"] = "content";
${"GLOBALS"}["fknzlvpu"] = "categories";
${"GLOBALS"}["vcshqkn"] = "thumbid";
${"GLOBALS"}["tgkfxhpk"] = "rating";
${"GLOBALS"}["kkpssulrxrcc"] = "times";
${"GLOBALS"}["mmbnfyd"] = "view";
${"GLOBALS"}["ljwxkcrbdru"] = "views";
${"GLOBALS"}["gcceptbfdiy"] = "count_key";
${"GLOBALS"}["nuvdjslmjs"] = "post_id";
${"GLOBALS"}["kpdezpv"] = "count";
${"GLOBALS"}["ihorfoljd"] = "f";
${"GLOBALS"}["qcccokcdg"] = "d";
${"GLOBALS"}["wjpgqxdnys"] = "n";
${"GLOBALS"}["tkvziqj"] = "sep";
${"GLOBALS"}["dndszhneij"] = "form";
${"GLOBALS"}["sqkpgerji"] = "bignum";
${"GLOBALS"}["mroymgh"] = "this_post";
${"GLOBALS"}["qoblhhe"] = "posts";
${"GLOBALS"}["ohvcypytv"] = "post";
${"GLOBALS"}["quslxxpc"] = "related_posts";
${"GLOBALS"}["emfztxm"] = "karatok";
${"GLOBALS"}["lxxzuxbind"] = "tag_arr";
${"GLOBALS"}["vjiechhdzjw"] = "tags";
${"GLOBALS"}["avuwsok"] = "link";
${"GLOBALS"}["pystddz"] = "fallback_menu";
${"GLOBALS"}["xijhybdb"] = "css";
${"GLOBALS"}["shxptnrlbk"] = "src";
${"GLOBALS"}["pxxjzr"] = "page";
${"GLOBALS"}["hpiife"] = "paged";
${"GLOBALS"}["nspuksccxq"] = "site_description";
${"GLOBALS"}["qlwxzsb"] = "title";
${"GLOBALS"}["argcdibzqbvy"] = "seplocation";
${"GLOBALS"}["mmnwti"] = "depth";
${"GLOBALS"}["mwuavv"] = "args";
${"GLOBALS"}["abtzfeswmfy"] = "bgauthemail";
${"GLOBALS"}["vveilkrjsg"] = "sidebar";
include (TEMPLATEPATH . "/includes/post-data.php");
include (TEMPLATEPATH . "/includes/breadcrumbs.php");
include (TEMPLATEPATH . "/includes/widgets.php");
include (TEMPLATEPATH . "/admin/license/license.php");

function karatok_ahoy()
{
    add_action("init", "karatok_head_cleanup");
    add_filter("wp_title", "rw_title", 10, 3);
    add_filter("the_generator", "karatok_rss_version");
    add_filter("wp_head", "karatok_remove_wp_widget_recent_comments_style", 1);
    add_action("wp_head", "karatok_remove_recent_comments_style", 1);
    add_filter("gallery_style", "karatok_gallery_style");
    add_action("wp_enqueue_scripts", "karatok_scripts_and_styles", 999);
    karatok_theme_support();
    add_action("widgets_init", "karatok_register_sidebars");
    add_filter("the_content", "karatok_filter_ptags_on_images");
    add_filter("get_search_form", "karatok_wpsearch");
    add_filter("excerpt_more", "karatok_excerpt_more");
}
add_action("after_setup_theme", "karatok_ahoy");
${"GLOBALS"}["qvehod"] = "content_width";
if (! isset(${${"GLOBALS"}["qvehod"]})) {
    $fyhukug = "content_width";
    ${$fyhukug} = 640;
}

function karatok_register_sidebars()
{
    ${"GLOBALS"}["evmodg"] = "karatok";
    global $karatok;
    register_sidebar(array(
        "id" => "sidebar",
        "name" => __("Sidebar", "karatok"),
        "description" => __("The is primary sidebar.", "karatok"),
        "before_widget" => "<div id=\"%1\$s\" class=\"widget %2\$s\">",
        "after_widget" => "</div>",
        "before_title" => "<h4 class=\"widgettitle\">",
        "after_title" => "</h4>"
    ));
    if (is_array(${${"GLOBALS"}["evmodg"]}["sidebars"]["sidebar"])) {
        ${"GLOBALS"}["gfnbaxiuyn"] = "karatok";
        $urgmvykjrgio = "sidebar";
        foreach (${${"GLOBALS"}["gfnbaxiuyn"]}["sidebars"]["sidebar"] as ${$urgmvykjrgio}) {
            $fkdnwwl = "sidebar";
            register_sidebar(array(
                "id" => sanitize_title(${${"GLOBALS"}["vveilkrjsg"]}),
                "name" => __(${$fkdnwwl}, "karatok"),
                "before_widget" => "<div id=\"%1\$s\" class=\"widget %2\$s\">",
                "after_widget" => "</div>",
                "before_title" => "<h4 class=\"widgettitle\">",
                "after_title" => "</h4>"
            ));
        }
    }
}

function karatok_comments($comment, $args, $depth)
{
    ${"GLOBALS"}["mdxcyfnmat"] = "comment";
    $GLOBALS["comment"] = ${${"GLOBALS"}["mdxcyfnmat"]};
    echo "  <div id=\"comment-";
    ${"GLOBALS"}["wphbiwuft"] = "args";
    comment_ID();
    echo "\" ";
    comment_class("cf");
    echo ">\n    <article  class=\"cf\">\n      <header class=\"comment-author\">\n        ";
    ${${"GLOBALS"}["abtzfeswmfy"]} = get_comment_author_email();
    echo "        <img src=\"http://www.gravatar.com/avatar/";
    echo md5(${${"GLOBALS"}["abtzfeswmfy"]});
    echo "?s=40\" class=\"avatar avatar-48 photo\" height=\"40\" width=\"40\"/>\n        ";
    echo "        ";
    printf(__("<cite class=\"fn\">%1\$s</cite> %2\$s", "karatok"), get_comment_author_link(), edit_comment_link(__("(Edit)", "karatok"), "  ", ""));
    echo "        <time datetime=\"";
    echo comment_time("Y-m-j");
    echo "\"><a href=\"";
    echo htmlspecialchars(get_comment_link($comment->comment_ID));
    echo "\">";
    comment_time(__("F jS, Y", "karatok"));
    echo " </a></time>\n\n      </header>\n      ";
    if ($comment->comment_approved == "0") {
        echo "        <div class=\"alert alert-info\">\n          <p>";
        _e("Your comment is awaiting moderation.", "karatok");
        echo "</p>\n        </div>\n      ";
    }
    echo "\n      <section class=\"comment_content cf\">\n        ";
    comment_text();
    echo "      </section>\n      ";
    comment_reply_link(array_merge(${${"GLOBALS"}["mwuavv"]}, array(
        "depth" => ${${"GLOBALS"}["mmnwti"]},
        "max_depth" => ${${"GLOBALS"}["wphbiwuft"]}["max_depth"]
    )));
    echo "    </article>\n";
}

function karatok_head_cleanup()
{
    remove_action("wp_head", "rsd_link");
    remove_action("wp_head", "wlwmanifest_link");
    remove_action("wp_head", "index_rel_link");
    remove_action("wp_head", "parent_post_rel_link", 10, 0);
    remove_action("wp_head", "start_post_rel_link", 10, 0);
    remove_action("wp_head", "adjacent_posts_rel_link_wp_head", 10, 0);
    remove_action("wp_head", "wp_generator");
    add_filter("style_loader_src", "karatok_remove_wp_ver_css_js", 9999);
    add_filter("script_loader_src", "karatok_remove_wp_ver_css_js", 9999);
}

function rw_title($title, $sep, $seplocation)
{
    $smjvdibr = "title";
    $rnqybjejbsg = "site_description";
    global $page, $paged;
    if (is_feed())
        return ${$smjvdibr};
    if ("right" == ${${"GLOBALS"}["argcdibzqbvy"]}) {
        ${${"GLOBALS"}["qlwxzsb"]} .= get_bloginfo("name");
    } else {
        ${"GLOBALS"}["qvfxhr"] = "title";
        ${${"GLOBALS"}["qlwxzsb"]} = get_bloginfo("name") . ${${"GLOBALS"}["qvfxhr"]};
    }
    ${${"GLOBALS"}["nspuksccxq"]} = get_bloginfo("description", "display");
    if (${$rnqybjejbsg} && (is_home() || is_front_page())) {
        $llxkqzahfc = "title";
        ${$llxkqzahfc} .= " {$sep} {$site_description}";
    }
    ${"GLOBALS"}["oulfutx"] = "title";
    if (${${"GLOBALS"}["hpiife"]} >= 2 || ${${"GLOBALS"}["pxxjzr"]} >= 2) {
        $xwheichhxwjt = "page";
        ${${"GLOBALS"}["qlwxzsb"]} .= " {$sep} " . sprintf(__("Page %s", "dbt"), max(${${"GLOBALS"}["hpiife"]}, ${$xwheichhxwjt}));
    }
    return ${${"GLOBALS"}["oulfutx"]};
}

function karatok_rss_version()
{
    return "";
}

function karatok_remove_wp_ver_css_js($src)
{
    $lvxpgcbz = "src";
    ${"GLOBALS"}["ehksako"] = "src";
    ${"GLOBALS"}["gcluucss"] = "src";
    if (strpos(${$lvxpgcbz}, "ver="))
        ${${"GLOBALS"}["gcluucss"]} = remove_query_arg("ver", ${${"GLOBALS"}["shxptnrlbk"]});
    return ${${"GLOBALS"}["ehksako"]};
}

function karatok_remove_wp_widget_recent_comments_style()
{
    if (has_filter("wp_head", "wp_widget_recent_comments_style")) {
        remove_filter("wp_head", "wp_widget_recent_comments_style");
    }
}

function karatok_remove_recent_comments_style()
{
    global $wp_widget_factory;
    if (isset($wp_widget_factory->widgets["WP_Widget_Recent_Comments"])) {
        remove_action("wp_head", array(
            $wp_widget_factory->widgets["WP_Widget_Recent_Comments"],
            "recent_comments_style"
        ));
    }
}

function karatok_gallery_style($css)
{
    return preg_replace("!<style type='text/css'>(.*?)</style>!s", "", ${${"GLOBALS"}["xijhybdb"]});
}

function karatok_scripts_and_styles()
{
    global $wp_styles;
    if (! is_admin()) {
        wp_register_script("karatok-modernizr", get_stylesheet_directory_uri() . "/library/js/libs/modernizr.custom.min.js", array(), "2.5.3", false);
        wp_register_style("karatok-stylesheet", get_stylesheet_directory_uri() . "/library/css/style.css", array(), "", "all");
        wp_register_style("karatok-ie-only", get_stylesheet_directory_uri() . "/library/css/ie.css", array(), "");
        if (is_singular() and comments_open() and (get_option("thread_comments") == 1)) {
            wp_enqueue_script("comment-reply");
        }
        wp_register_script("walah-js", get_stylesheet_directory_uri() . "/library/js/walah.js", array(
            "jquery"
        ), "", true);
        wp_enqueue_script("sharrre", get_template_directory_uri() . "/library/js/sharrre.js", array(
            "jquery"
        ), "", true);
        wp_enqueue_script("all-libs", get_template_directory_uri() . "/library/js/all.libs.js", array(
            "jquery"
        ), "", true);
        wp_enqueue_script("karatok-modernizr");
        wp_enqueue_style("karatok-stylesheet");
        wp_enqueue_style("karatok-ie-only");
        $wp_styles->add_data("karatok-ie-only", "conditional", "lt IE 9");
        wp_enqueue_script("jquery");
        wp_enqueue_script("walah-js");
        wp_localize_script("walah-js", "karatok", array(
            "url" => admin_url("admin-ajax.php"),
            "nonce" => wp_create_nonce("karatok-nonce")
        ));
    }
}

function karatok_theme_support()
{
    add_theme_support("post-thumbnails");
    add_image_size("thumbnail", 100, 70, true);
    add_image_size("medium", 223, 160, true);
    add_image_size("large", 469, 304, true);
    add_theme_support("custom-background", array(
        "default-image" => "",
        "default-color" => "",
        "wp-head-callback" => "_custom_background_cb",
        "admin-head-callback" => "",
        "admin-preview-callback" => ""
    ));
    add_theme_support("automatic-feed-links");
    add_theme_support("menus");
    add_theme_support("html5", array(
        "search-form",
        "comment-form",
        "comment-list"
    ));
    register_nav_menus(array(
        "main-nav" => __("The Main Menu", "karatok"),
        "footer-links" => __("Footer Links", "karatok")
    ));
}

function karatok_main_nav()
{
    wp_nav_menu(array(
        "container" => false,
        "container_class" => "menu cf",
        "menu" => __("The Main Menu", "karatok"),
        "menu_class" => "nav cf sf-menu sf-arrows",
        "theme_location" => "main-nav",
        "before" => "",
        "after" => "",
        "link_before" => "",
        "link_after" => "",
        "depth" => 0,
        "fallback_cb" => "karatok_main_nav_fallback",
        "walker" => new SJ_WALKER()
    ));
}

function karatok_footer_links()
{
    wp_nav_menu(array(
        "container" => "",
        "container_class" => "footer-links cf",
        "menu" => __("Footer Menu", "karatok"),
        "menu_class" => "cf",
        "theme_location" => "footer-links",
        "before" => "",
        "after" => "",
        "link_before" => "",
        "link_after" => "",
        "depth" => 0,
        "fallback_cb" => "karatok_footer_links_fallback"
    ));
}

function karatok_main_nav_fallback()
{
    ${${"GLOBALS"}["pystddz"]} = wp_page_menu(array(
        "show_home" => true,
        "menu_class" => "",
        "include" => "",
        "exclude" => "",
        "echo" => false,
        "link_before" => "",
        "link_after" => ""
    ));
    echo str_replace("<ul>", "<ul class=\"nav cf sf-menu sf-arrows\">", ${${"GLOBALS"}["pystddz"]});
}

function karatok_footer_links_fallback()
{}
add_action("after_switch_theme", "karatok_flush_rewrite_rules");

function karatok_flush_rewrite_rules()
{
    flush_rewrite_rules();
}

function karatok_custom_blog_post()
{
    register_post_type("custom_type", array(
        "labels" => array(
            "name" => __("Blog", "karatok"),
            "singular_name" => __("Blog", "karatok"),
            "all_items" => __("All Blog Posts", "karatok"),
            "add_new" => __("Add New", "karatok"),
            "add_new_item" => __("Add New Blog", "karatok"),
            "edit" => __("Edit", "karatok"),
            "edit_item" => __("Edit Blog Post", "karatok"),
            "new_item" => __("New Blog Post", "karatok"),
            "view_item" => __("View Blog Post", "karatok"),
            "search_items" => __("Search Blog Post", "karatok"),
            "not_found" => __("Nothing found in the Database.", "karatok"),
            "not_found_in_trash" => __("Nothing found in Trash", "karatok"),
            "parent_item_colon" => ""
        ),
        "description" => __("This is the example blog post type", "karatok"),
        "public" => true,
        "publicly_queryable" => true,
        "exclude_from_search" => false,
        "show_ui" => true,
        "query_var" => true,
        "menu_position" => 8,
        "menu_icon" => get_stylesheet_directory_uri() . "/library/images/custom-post-icon.png",
        "rewrite" => array(
            "slug" => "blog",
            "with_front" => false
        ),
        "has_archive" => "blog",
        "capability_type" => "post",
        "hierarchical" => false,
        "supports" => array(
            "title",
            "editor",
            "author",
            "thumbnail",
            "excerpt",
            "trackbacks",
            "custom-fields",
            "comments",
            "revisions",
            "sticky"
        )
    ));
    register_taxonomy_for_object_type("custom_cat", "custom_type");
    register_taxonomy_for_object_type("custom_tag", "custom_type");
}
add_action("init", "karatok_custom_blog_post");
register_taxonomy("custom_cat", array(
    "custom_type"
), array(
    "hierarchical" => true,
    "labels" => array(
        "name" => __("Blog Categories", "karatok"),
        "singular_name" => __("Blog Category", "karatok"),
        "search_items" => __("Search Blog Categories", "karatok"),
        "all_items" => __("All Blog Categories", "karatok"),
        "parent_item" => __("Parent Blog Category", "karatok"),
        "parent_item_colon" => __("Parent Blog Category:", "karatok"),
        "edit_item" => __("Edit Blog Category", "karatok"),
        "update_item" => __("Update Blog Category", "karatok"),
        "add_new_item" => __("Add New Blog Category", "karatok"),
        "new_item_name" => __("New Blog Category Name", "karatok")
    ),
    "show_admin_column" => true,
    "show_ui" => true,
    "rewrite" => array(
        "slug" => "blog/category",
        "with_front" => false
    )
));
register_taxonomy("custom_tag", array(
    "custom_type"
), array(
    "hierarchical" => false,
    "labels" => array(
        "name" => __("Blog Tags", "karatok"),
        "singular_name" => __("Blog Tag", "karatok"),
        "search_items" => __("Search Blog Tags", "karatok"),
        "all_items" => __("All Blog Tags", "karatok"),
        "parent_item" => __("Parent Blog Tag", "karatok"),
        "parent_item_colon" => __("Parent Blog Tag:", "karatok"),
        "edit_item" => __("Edit Blog Tag", "karatok"),
        "update_item" => __("Update Blog Tag", "karatok"),
        "add_new_item" => __("Add New Blog Tag", "karatok"),
        "new_item_name" => __("New Blog Tag Name", "karatok")
    ),
    "show_admin_column" => true,
    "show_ui" => true,
    "rewrite" => array(
        "slug" => "blog/tag",
        "with_front" => false
    )
));

function karatok_get_the_author_posts_link()
{
    $qfafqqhepqy = "authordata";
    $iejurpiqfh = "link";
    global $authordata;
    if (! is_object(${$qfafqqhepqy}))
        return false;
    ${$iejurpiqfh} = sprintf("<a href=\"%1\$s\" title=\"%2\$s\">%3\$s</a>", get_author_posts_url($authordata->ID, $authordata->user_nicename), esc_attr(sprintf(__("Posts by %s"), get_the_author())), get_the_author());
    return ${${"GLOBALS"}["avuwsok"]};
}

function karatok_related_posts()
{
    global $karatok, $post;
    $xsryivgypfwj = "karatok";
    echo "<div id=\"karatok-related-tag\" class=\"related-wallpapers cf\">";
    echo "<h3>" . ${$xsryivgypfwj}["judulrelatedtag"] . "</h3>";
    ${${"GLOBALS"}["vjiechhdzjw"]} = wp_get_post_tags($post->ID);
    ${"GLOBALS"}["bccbtomwjnr"] = "tags";
    if (${${"GLOBALS"}["bccbtomwjnr"]}) {
        $drrdrujut = "tag";
        $yixorlonqk = "args";
        $jfdugfh = "post";
        ${"GLOBALS"}["wuaiymi"] = "tag_arr";
        ${"GLOBALS"}["fnqurikq"] = "args";
        foreach (${${"GLOBALS"}["vjiechhdzjw"]} as ${$drrdrujut}) {
            ${${"GLOBALS"}["lxxzuxbind"]} .= $tag->slug . ",";
        }
        $khkidpsadkg = "related_posts";
        ${$yixorlonqk} = array(
            "tag" => ${${"GLOBALS"}["wuaiymi"]},
            "numberposts" => ${${"GLOBALS"}["emfztxm"]}["jumlahrelatedtag"],
            "post__not_in" => array(
                $post->ID
            )
        );
        ${$khkidpsadkg} = get_posts(${${"GLOBALS"}["fnqurikq"]});
        foreach (${${"GLOBALS"}["quslxxpc"]} as ${$jfdugfh}) {
            setup_postdata(${${"GLOBALS"}["ohvcypytv"]});
            get_template_part("entry", "content");
        }
    } else {
        echo "<p class=\"no_related_post\">" . __("No Related Wallpapers Yet!", "karatok") . "</p>";
    }
    wp_reset_postdata();
    echo "</div>";
}

function karatok_related_posts_Category()
{
    ${"GLOBALS"}["ycrtqxdr"] = "karatok";
    global $karatok, $post;
    echo "<div id=\"karatok-related-cat\" class=\"related-wallpapers cf\">";
    ${"GLOBALS"}["tpcbrp"] = "category";
    $jofoykqlnftg = "category";
    $ncrnueiubqj = "this_post";
    echo "<h3>" . ${${"GLOBALS"}["ycrtqxdr"]}["judulrelatedcat"] . "</h3>";
    ${$jofoykqlnftg} = get_the_category();
    ${$ncrnueiubqj} = $post->ID;
    ${${"GLOBALS"}["qoblhhe"]} = get_posts("numberposts=" . ${${"GLOBALS"}["emfztxm"]}["jumlahrelatedcat"] . "&orderby=rand&category=" . ${${"GLOBALS"}["tpcbrp"]}[0]->cat_ID . "&exclude=" . ${${"GLOBALS"}["mroymgh"]});
    foreach (${${"GLOBALS"}["qoblhhe"]} as ${${"GLOBALS"}["ohvcypytv"]}) {
        get_template_part("entry", "content");
    }
    wp_reset_postdata();
    echo "</div>";
}

function karatok_page_navi()
{
    ${"GLOBALS"}["zshpvcfm"] = "bignum";
    global $wp_query;
    $zknoibgpdvo = "bignum";
    ${${"GLOBALS"}["sqkpgerji"]} = 999999999;
    if ($wp_query->max_num_pages <= 1)
        return;
    echo "<nav class=\"pagination\">";
    echo paginate_links(array(
        "base" => str_replace(${${"GLOBALS"}["zshpvcfm"]}, "%#%", esc_url(get_pagenum_link(${$zknoibgpdvo}))),
        "format" => "",
        "current" => max(1, get_query_var("paged")),
        "total" => $wp_query->max_num_pages,
        "prev_text" => "&larr;",
        "next_text" => "&rarr;",
        "type" => "list",
        "end_size" => 3,
        "mid_size" => 3
    ));
    echo "</nav>";
}

function karatok_filter_ptags_on_images($content)
{
    $gfcdkkmxt = "content";
    return preg_replace("/<p>\\s*(<a .*>)?\\s*(<img .* \\/>)\\s*(<\/a>)?\s*<\/p>/iU", "\1\2\\3", ${$gfcdkkmxt});
}

function karatok_excerpt_more($more)
{
    global $post;
    return "...  <a class=\"excerpt-read-more\" href=\"" . get_permalink($post->ID) . "\" title=\"" . __("Read ", "karatok") . get_the_title($post->ID) . "\">" . __("Read more &raquo;
", "karatok") . "</a>";
}

function karatok_wpsearch($form)
{
    $ximqhteiw = "form";
    ${${"GLOBALS"}["dndszhneij"]} = "<form role=\"search\" method=\"get\" id=\"searchform\" action=\"" . home_url("/") . "\" >\n\t<label class=\"screen-reader-text\" for=\"s\">" . __("", "karatok") . "</label>\n\t<input type=\"text\" value=\"" . get_search_query() . "\" name=\"s\" id=\"s\" placeholder=\"" . esc_attr__("Search...", "karatok") . "\" />\n\t<input type=\"submit\" id=\"searchsubmit\" class=\"button\" value=\"" . esc_attr__("Search") . "\" />\n\t</form>";
    return ${$ximqhteiw};
}

function karatok_count_format($n, $point = '.', $sep = ',')
{
    $xupgwsdm = "n";
    ${"GLOBALS"}["edbjyywl"] = "n";
    ${"GLOBALS"}["bqmvvtcjjrv"] = "f";
    ${"GLOBALS"}["ahekkvlcj"] = "n";
    ${"GLOBALS"}["uuiignacph"] = "d";
    $ksyurevjcij = "point";
    if (${${"GLOBALS"}["ahekkvlcj"]} < 0) {
        return 0;
    }
    ${"GLOBALS"}["ypwbpnkgww"] = "d";
    if (${${"GLOBALS"}["edbjyywl"]} < 1000) {
        ${"GLOBALS"}["kmxxjyw"] = "n";
        $ltpssnisy = "point";
        return number_format(${${"GLOBALS"}["kmxxjyw"]}, 0, ${$ltpssnisy}, ${${"GLOBALS"}["tkvziqj"]});
    }
    ${"GLOBALS"}["ihebbtxwkmh"] = "f";
    ${${"GLOBALS"}["uuiignacph"]} = ${${"GLOBALS"}["wjpgqxdnys"]} < 1000000 ? 1000 : 1000000;
    ${${"GLOBALS"}["bqmvvtcjjrv"]} = round(${$xupgwsdm} / ${${"GLOBALS"}["qcccokcdg"]}, 1);
    return number_format(${${"GLOBALS"}["ihorfoljd"]}, ${${"GLOBALS"}["ihorfoljd"]} - intval(${${"GLOBALS"}["ihebbtxwkmh"]}) ? 1 : 0, ${$ksyurevjcij}, ${${"GLOBALS"}["tkvziqj"]}) . (${${"GLOBALS"}["ypwbpnkgww"]} == 1000 ? "K" : "M");
}

function karatok_set_post_views()
{
    ${"GLOBALS"}["llgokpbahyt"] = "post_id";
    $wstqbqegtnt = "count_key";
    $llwgyxnftyb = "count";
    $jhfvyry = "count";
    if (! is_single())
        return;
    $yahaupgqwn = "count";
    if (empty(${${"GLOBALS"}["llgokpbahyt"]})) {
        $wriesb = "post_id";
        global $post;
        ${$wriesb} = $post->ID;
    }
    ${"GLOBALS"}["fbeybbudtr"] = "count_key";
    ${$wstqbqegtnt} = "karatok_views";
    ${${"GLOBALS"}["kpdezpv"]} = get_post_meta(${${"GLOBALS"}["nuvdjslmjs"]}, ${${"GLOBALS"}["fbeybbudtr"]}, true);
    ${$yahaupgqwn} = ${${"GLOBALS"}["kpdezpv"]} ? ${$llwgyxnftyb} : 0;
    update_post_meta(${${"GLOBALS"}["nuvdjslmjs"]}, ${${"GLOBALS"}["gcceptbfdiy"]}, ${$jhfvyry} + 1);
}
add_action("wp_head", "karatok_set_post_views");

function karatok_get_post_views($post_id, $views = 0)
{
    ${"GLOBALS"}["uvnjtwjyoxut"] = "count_key";
    $nklhmqthm = "count_key";
    $svbzcdkvxg = "view";
    $ighainqn = "count";
    $dpwmwafki = "post_id";
    $gzskkdcj = "count";
    ${${"GLOBALS"}["uvnjtwjyoxut"]} = "karatok_views";
    ${$gzskkdcj} = get_post_meta(${$dpwmwafki}, ${$nklhmqthm}, true);
    if (${${"GLOBALS"}["kpdezpv"]} == "") {
        ${"GLOBALS"}["sflryhb"] = "count_key";
        $xqvpmrvm = "post_id";
        update_post_meta(${$xqvpmrvm}, ${${"GLOBALS"}["sflryhb"]}, 1);
        ${${"GLOBALS"}["kpdezpv"]} = 1;
    }
    if (${${"GLOBALS"}["ljwxkcrbdru"]})
        ${${"GLOBALS"}["mmbnfyd"]} = (${${"GLOBALS"}["kpdezpv"]} > 1) ? " views" : " view";
    ${$ighainqn} = karatok_count_format(${${"GLOBALS"}["kpdezpv"]}) . ${$svbzcdkvxg};
    return ${${"GLOBALS"}["kpdezpv"]};
}

function karatok_get_post_download($post_id, $times = 0)
{
    ${"GLOBALS"}["lnwruscx"] = "post_id";
    $bynqoouu = "count";
    ${$bynqoouu} = get_post_meta(${${"GLOBALS"}["lnwruscx"]}, "karatok_download", true);
    ${"GLOBALS"}["jgbctyy"] = "time";
    ${${"GLOBALS"}["kpdezpv"]} = ${${"GLOBALS"}["kpdezpv"]} ? ${${"GLOBALS"}["kpdezpv"]} : 0;
    $yvlmyyvsoe = "time";
    if (${${"GLOBALS"}["kkpssulrxrcc"]})
        ${$yvlmyyvsoe} = (${${"GLOBALS"}["kpdezpv"]} > 1) ? " times" : " time";
    ${${"GLOBALS"}["kpdezpv"]} = karatok_count_format(${${"GLOBALS"}["kpdezpv"]}) . ${${"GLOBALS"}["jgbctyy"]};
    return ${${"GLOBALS"}["kpdezpv"]};
}

function karatok_get_post_rating($post_id)
{
    $gfskzduljs = "rating";
    ${${"GLOBALS"}["tgkfxhpk"]} = get_post_meta(get_the_ID(), "karatok_rating", true);
    return ${$gfskzduljs} ? karatok_count_format(${${"GLOBALS"}["tgkfxhpk"]}) : 0;
}

function karatok_get_single_desc()
{
    $jvcycriuihz = "content";
    $wyhlcxlqp = "karatok";
    global $post, $karatok;
    $vvprvgbooxop = "content";
    ${$vvprvgbooxop} = ${$wyhlcxlqp}["masukinkonten"];
    if (${$jvcycriuihz}) {
        ${"GLOBALS"}["rxibysfl"] = "title";
        ${"GLOBALS"}["yttrdvqukxn"] = "title";
        $knculdnqezyx = "content";
        ${"GLOBALS"}["rogwzsfw"] = "content";
        $jtlkjderaj = "metadata";
        ${"GLOBALS"}["srmxzjmm"] = "category";
        ${"GLOBALS"}["flcplysjgu"] = "content";
        ${${"GLOBALS"}["vcshqkn"]} = get_post_thumbnail_id($post->ID);
        ${${"GLOBALS"}["rxibysfl"]} = get_the_title($post->ID);
        ${"GLOBALS"}["ceksfl"] = "thumbid";
        $sjcyyx = "dimension";
        $dfufkjkilr = "filesize";
        ${$jtlkjderaj} = wp_get_attachment_metadata(${${"GLOBALS"}["ceksfl"]});
        ${$sjcyyx} = "{$metadata['width']}x{$metadata['height']}";
        $txqrhyotalyf = "category";
        ${$dfufkjkilr} = filesize(get_attached_file(${${"GLOBALS"}["vcshqkn"]}));
        $oeyiwmcmyfec = "content";
        ${${"GLOBALS"}["fknzlvpu"]} = get_the_category($post->ID);
        $lvgumjillai = "content";
        ${${"GLOBALS"}["srmxzjmm"]} = ${${"GLOBALS"}["fknzlvpu"]}[0]->cat_name;
        $coescichjup = "content";
        ${"GLOBALS"}["dzwvtdpnwtx"] = "tag";
        ${"GLOBALS"}["ldhagsaiedwm"] = "tags";
        foreach (get_the_tags($post->ID) as ${${"GLOBALS"}["dzwvtdpnwtx"]}) {
            ${"GLOBALS"}["ewvkhy"] = "tags";
            ${${"GLOBALS"}["ewvkhy"]}[] = $tag->name;
        }
        ${${"GLOBALS"}["rogwzsfw"]} = str_replace("{title}", ${${"GLOBALS"}["yttrdvqukxn"]}, ${${"GLOBALS"}["flcplysjgu"]});
        ${${"GLOBALS"}["qaujbiwmdyie"]} = str_replace("{category}", ${$txqrhyotalyf}, ${$knculdnqezyx});
        ${${"GLOBALS"}["qaujbiwmdyie"]} = str_replace("{tag}", implode(", ", ${${"GLOBALS"}["ldhagsaiedwm"]}), ${${"GLOBALS"}["qaujbiwmdyie"]});
        ${$oeyiwmcmyfec} = str_replace("{dimension}", ${${"GLOBALS"}["iyndamlhw"]}, ${$lvgumjillai});
        ${$coescichjup} = str_replace("{filesize}", size_format(${${"GLOBALS"}["axkdgu"]}), ${${"GLOBALS"}["qaujbiwmdyie"]});
        return ${${"GLOBALS"}["qaujbiwmdyie"]};
    }
}

function karatok_last_posts($numberOfPosts = 5, $thumb = true)
{
    $injuspmbiqcq = "orig_post";
    $awpbky = "post";
    global $post;
    ${"GLOBALS"}["fcqujdq"] = "lastPosts";
    ${"GLOBALS"}["hazjkbmv"] = "post";
    ${$injuspmbiqcq} = ${$awpbky};
    ${${"GLOBALS"}["fcqujdq"]} = get_posts("no_found_rows=1&suppress_filters=0&numberposts=" . ${${"GLOBALS"}["nmcakaolevjg"]});
    foreach (${${"GLOBALS"}["voeemxfnoaw"]} as ${${"GLOBALS"}["ohvcypytv"]}) {
        $flqali = "post";
        setup_postdata(${$flqali});
        echo "\t<li>\n\t\t<article ";
        post_class("recent-widget cf");
        echo " role=\"article\">\n\t\t\t<a href=\"";
        the_permalink();
        echo "\" rel=\"bookmark\" title=\"";
        the_title_attribute();
        echo "\">\n\t\t\t\t<div class=\"entry-thumb\">\n\t\t\t\t\t";
        the_post_thumbnail("thumbnail");
        echo "<span class=\"iamoverlay\"></span>\n\t\t\t\t</div>\n\t\t\t\t<h3 class=\"widget-title\">";
        the_title();
        echo "</h3>\n\t\t\t</a><h4 class=\"kategori-kecil\">";
        printf(__("%1\$s", "karatok"), get_the_category_list(", "));
        echo "</h4>\n\t\t</article>\n\t</li>\n";
    }
    ${${"GLOBALS"}["hazjkbmv"]} = ${${"GLOBALS"}["jrnceraq"]};
}

function karatok_popular_posts($pop_posts = 5, $thumb = true)
{
    $tpewkfpm = "post";
    global $post;
    ${${"GLOBALS"}["jrnceraq"]} = ${$tpewkfpm};
    ${${"GLOBALS"}["nfviqff"]} = new WP_Query(array(
        "posts_per_page" => ${${"GLOBALS"}["fgjdktwgvdl"]},
        "meta_key" => "karatok_views",
        "orderby" => "meta_value_num",
        "order" => "DESC",
        "post_type" => "post",
        "post_status" => "publish",
        "no_found_rows" => 1,
        "ignore_sticky_posts" => 1
    ));
    while ($popularposts->have_posts()) {
        $popularposts->the_post();
        echo "\n\t\t\t\t<article ";
        post_class("m6 tl4 popular-widget cf");
        echo " role=\"article\">\n\t\t\t\t<a href=\"";
        the_permalink();
        echo "\" title=\"";
        the_title();
        echo "\" rel=\"bookmark\">\n\t\t\t\t\t<div class=\"entry-thumb\">\n\t\t\t\t\t\t";
        ${"GLOBALS"}["hugixwvtcry"] = "no";
        the_post_thumbnail("medium");
        echo "\t\t\t\t\t\t<div class=\"widget-ImgAttr\">\n\t\t\t\t\t\t\t<span>";
        echo ++ ${${"GLOBALS"}["hugixwvtcry"]};
        echo "</span>\n\t\t\t\t\t\t\t<div class=\"outsider\">\n\t\t\t\t\t\t\t<span class=\"download\">";
        echo karatok_get_post_download(get_the_ID());
        echo " <i class=\"fa fa-download\"></i></span>\n\t\t\t\t\t\t\t<span class=\"views\">";
        echo karatok_get_post_views(get_the_ID());
        echo " <i class=\"fa fa-eye\"></i></span>\n\t\t\t\t\t\t\t<span class=\"rating\">";
        echo get_post_meta(get_the_ID(), "karatok_rating", true);
        echo " <i class=\"fa fa-star\"></i></span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t";
        echo "\t\t\t\t</a>\n\t\t\t\t</article>\n\n\t";
    }
    ${${"GLOBALS"}["ohvcypytv"]} = ${${"GLOBALS"}["jrnceraq"]};
}

function karatok_top_rated($pop_posts = 5, $thumb = true)
{
    $jjcpsigqsce = "post";
    global $post;
    $wliltqqdkly = "pop_posts";
    ${${"GLOBALS"}["jrnceraq"]} = ${${"GLOBALS"}["ohvcypytv"]};
    ${"GLOBALS"}["ovscsfi"] = "popularposts";
    ${${"GLOBALS"}["ovscsfi"]} = new WP_Query(array(
        "posts_per_page" => ${$wliltqqdkly},
        "meta_key" => "karatok_rating",
        "orderby" => "meta_value_num",
        "order" => "DESC",
        "post_type" => "post",
        "post_status" => "publish",
        "no_found_rows" => 1,
        "ignore_sticky_posts" => 1
    ));
    while ($popularposts->have_posts()) {
        $popularposts->the_post();
        echo "\n\t\t\t\t<article ";
        post_class("m6 tl4 rated-widget cf");
        echo " role=\"article\">\n\t\t\t\t<a href=\"";
        the_permalink();
        echo "\" title=\"";
        the_title();
        echo "\" rel=\"bookmark\">\n\t\t\t\t\t<div class=\"entry-thumb\">\n\t\t\t\t\t\t";
        the_post_thumbnail("medium");
        echo "\t\t\t\t\t\t<div class=\"widget-ImgAttr\">\n\t\t\t\t\t\t\t<span>";
        echo ++ ${${"GLOBALS"}["hdwnuueoxkl"]};
        echo "</span>\n\t\t\t\t\t\t\t<span class=\"rating\">";
        echo get_post_meta(get_the_ID(), "karatok_rating", true);
        echo " <i class=\"fa fa-star\"></i></span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t";
        echo "\t\t\t\t</a>\n\t\t\t\t</article>\n\n\t";
    }
    ${$jjcpsigqsce} = ${${"GLOBALS"}["jrnceraq"]};
}

function karatok_top_downloaded($pop_posts = 5, $thumb = true)
{
    $ccycihewndy = "orig_post";
    ${"GLOBALS"}["jcrxuehexyf"] = "pop_posts";
    $imrxmxx = "orig_post";
    $fnhmtv = "popularposts";
    global $post;
    ${$ccycihewndy} = ${${"GLOBALS"}["ohvcypytv"]};
    ${$fnhmtv} = new WP_Query(array(
        "posts_per_page" => ${${"GLOBALS"}["jcrxuehexyf"]},
        "meta_key" => "karatok_download",
        "orderby" => "meta_value_num",
        "order" => "DESC",
        "post_type" => "post",
        "post_status" => "publish",
        "no_found_rows" => 1,
        "ignore_sticky_posts" => 1
    ));
    while ($popularposts->have_posts()) {
        $popularposts->the_post();
        echo "\n\t\t\t\t<article ";
        post_class("m6 tl4 downloaded-widget cf");
        echo " role=\"article\">\n\t\t\t\t<a href=\"";
        the_permalink();
        echo "\" title=\"";
        the_title();
        echo "\" rel=\"bookmark\">\n\t\t\t\t\t<div class=\"entry-thumb\">\n\t\t\t\t\t\t";
        the_post_thumbnail("medium");
        echo "\t\t\t\t\t\t<div class=\"widget-ImgAttr\">\n\t\t\t\t\t\t\t<span>";
        echo ++ ${${"GLOBALS"}["hdwnuueoxkl"]};
        echo "</span>\n\t\t\t\t\t\t\t<span class=\"download\">";
        echo karatok_get_post_download(get_the_ID());
        echo " <i class=\"fa fa-download\"></i></span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t";
        echo "\t\t\t\t</a>\n\t\t\t\t</article>\n\n\t";
    }
    ${${"GLOBALS"}["ohvcypytv"]} = ${$imrxmxx};
}

function karatok_random_posts($numberOfPosts = 5, $thumb = true)
{
    $sojifnxcj = "orig_post";
    $jyqezecuuuqb = "orig_post";
    $rxxxwfwbott = "post";
    global $post;
    $ikxvijjtrfvc = "post";
    ${$jyqezecuuuqb} = ${$ikxvijjtrfvc};
    ${${"GLOBALS"}["voeemxfnoaw"]} = get_posts("orderby=rand&no_found_rows=1&suppress_filters=0&numberposts=" . ${${"GLOBALS"}["nmcakaolevjg"]});
    foreach (${${"GLOBALS"}["voeemxfnoaw"]} as ${$rxxxwfwbott}) {
        setup_postdata(${${"GLOBALS"}["ohvcypytv"]});
        echo "\n\t\t<article ";
        post_class("random-widget cf");
        echo " role=\"article\">\n\t\t\t<a href=\"";
        the_permalink();
        echo "\" title=\"";
        the_title();
        echo "\" rel=\"bookmark\">\n\t\t\t\t<div class=\"masukin-gambar\">\n\t\t\t\t\t";
        the_post_thumbnail("thumbnail");
        echo "\t\t\t\t</div>\n\t\t\t\t";
        echo "\t\t\t</a>\n\t\t</article>\n\n";
    }
    ${${"GLOBALS"}["ohvcypytv"]} = ${$sojifnxcj};
}

class SJ_WALKER extends Walker_Nav_Menu
{

    function start_lvl(&$output, $depth)
    {
        ${"GLOBALS"}["mgbvsxytn"] = "display_depth";
        $kqvfflarggl = "output";
        $dnlzdwbk = "display_depth";
        $fludpepykp = "display_depth";
        ${${"GLOBALS"}["cikoselgwx"]} = (${${"GLOBALS"}["mmnwti"]} > 0 ? str_repeat("\t", ${${"GLOBALS"}["mmnwti"]}) : "");
        $kfqxhctzhl = "classes";
        ${"GLOBALS"}["unjgbivgtue"] = "classes";
        ${${"GLOBALS"}["mgbvsxytn"]} = (${${"GLOBALS"}["mmnwti"]} + 1);
        $yjwjrrlu = "class_names";
        ${$kfqxhctzhl} = array(
            "sub-menu sb-submenu",
            (${${"GLOBALS"}["crhpvrh"]} % 2 ? "menu-odd" : "menu-even"),
            (${$dnlzdwbk} >= 2 ? "sub-sub-menu" : ""),
            "menu-depth-" . ${$fludpepykp}
        );
        ${${"GLOBALS"}["nfvtvhlb"]} = implode(" ", ${${"GLOBALS"}["unjgbivgtue"]});
        ${$kqvfflarggl} .= "\n" . ${${"GLOBALS"}["cikoselgwx"]} . "<ul class=\"" . ${$yjwjrrlu} . "\">" . "\n";
    }

    function start_el(&$output, $item, $depth, $args)
    {
        ${"GLOBALS"}["cuvunbuik"] = "classes";
        ${"GLOBALS"}["znbqoexdws"] = "item";
        $dwsolzphgk = "depth_class_names";
        ${"GLOBALS"}["phfqjvektau"] = "depth_classes";
        ${"GLOBALS"}["bluhufcwd"] = "args";
        ${"GLOBALS"}["blddwpfhpihd"] = "output";
        $bzroewvc = "indent";
        $gwvcujph = "depth_class_names";
        $nmadhijg = "item_output";
        ${"GLOBALS"}["sgxmbek"] = "depth";
        $voqqrkhc = "depth";
        global $wp_query;
        $khjrbsh = "class_names";
        $gurxxtmtwr = "description";
        $mxfagg = "depth";
        ${${"GLOBALS"}["cikoselgwx"]} = (${$voqqrkhc} > 0 ? str_repeat("\t", ${${"GLOBALS"}["sgxmbek"]}) : "");
        ${${"GLOBALS"}["phfqjvektau"]} = array(
            (${${"GLOBALS"}["mmnwti"]} == 0 ? "main-menu-item" : "sub-menu-item"),
            (${$mxfagg} >= 2 ? "sub-sub-menu-item" : ""),
            (${${"GLOBALS"}["mmnwti"]} % 2 ? "menu-item-odd" : "menu-item-even"),
            "menu-item-depth-" . ${${"GLOBALS"}["mmnwti"]}
        );
        ${$dwsolzphgk} = esc_attr(implode(" ", ${${"GLOBALS"}["miautzi"]}));
        ${${"GLOBALS"}["cuvunbuik"]} = empty($item->classes) ? array() : (array) $item->classes;
        ${"GLOBALS"}["wislxxfvooh"] = "attributes";
        ${"GLOBALS"}["ggiqwznnlf"] = "attributes";
        ${"GLOBALS"}["pphtnzdnccs"] = "withul";
        ${$khjrbsh} = esc_attr(implode(" ", apply_filters("nav_menu_css_class", array_filter(${${"GLOBALS"}["jwdsnvp"]}), ${${"GLOBALS"}["wbcodxbr"]})));
        ${${"GLOBALS"}["blddwpfhpihd"]} .= ${$bzroewvc} . "<li class=\"" . ${$gwvcujph} . " " . ${${"GLOBALS"}["nfvtvhlb"]} . "\">";
        $pofeqkfghf = "description";
        ${${"GLOBALS"}["pphtnzdnccs"]} = $item->hasChildren ? " sf-with-ul " : "";
        ${${"GLOBALS"}["nqhjrszgtb"]} = $item->hasChildren ? "<i class=\"fa fa-angle-down\"></i>" : "";
        ${"GLOBALS"}["yncxyjyn"] = "depth";
        $kvrrxnpwfpdh = "item_output";
        ${${"GLOBALS"}["wislxxfvooh"]} = ! empty($item->attr_title) ? " title=\"" . esc_attr($item->attr_title) . "\"" : "";
        ${${"GLOBALS"}["hrujwh"]} .= ! empty($item->target) ? " target=\"" . esc_attr($item->target) . "\"" : "";
        ${${"GLOBALS"}["hrujwh"]} .= ! empty($item->xfn) ? " rel=\"" . esc_attr($item->xfn) . "\"" : "";
        ${${"GLOBALS"}["hrujwh"]} .= ! empty($item->url) ? " href=\"" . esc_attr($item->url) . "\"" : "";
        ${${"GLOBALS"}["ggiqwznnlf"]} .= " class=\"menu-link " . ${${"GLOBALS"}["bmbdqwhj"]} . " " . (${${"GLOBALS"}["yncxyjyn"]} > 0 ? "sub-menu-link" : "main-menu-link") . "\"";
        ${$gurxxtmtwr} = (! empty($item->description) and 0 == ${${"GLOBALS"}["mmnwti"]}) ? "<small class=\"nav_desc\">" . esc_attr($item->description) . "</small>" : "";
        ${${"GLOBALS"}["qlwxzsb"]} = apply_filters("the_title", $item->title, $item->ID);
        ${$nmadhijg} = $args->before . "<a$attributes>" . $args->link_before . ${${"GLOBALS"}["qlwxzsb"]} . "</a>" . ${${"GLOBALS"}["nqhjrszgtb"]} . $args->link_after . ${$pofeqkfghf} . $args->after;
        ${${"GLOBALS"}["pbotqqrwz"]} .= apply_filters("walker_nav_menu_start_el", ${$kvrrxnpwfpdh}, ${${"GLOBALS"}["znbqoexdws"]}, ${${"GLOBALS"}["mmnwti"]}, ${${"GLOBALS"}["bluhufcwd"]});
    }

    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
    {
        $bjuuejbac = "children_elements";
        $kycddidkl = "depth";
        $oxpefvllot = "children_elements";
        $hxcoqyrodv = "args";
        $kowlhl = "output";
        $element->hasChildren = isset(${$oxpefvllot}[$element->ID]) && ! empty(${$bjuuejbac}[$element->ID]);
        return parent::display_element(${${"GLOBALS"}["bktuawxgxrkl"]}, ${${"GLOBALS"}["agbdusvft"]}, ${${"GLOBALS"}["kteghcgwn"]}, ${$kycddidkl}, ${$hxcoqyrodv}, ${$kowlhl});
    }
}

class K_Walker_Category extends Walker_Category
{

    function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0)
    {
        ${"GLOBALS"}["mcnbhpemkrlq"] = "args";
        ${"GLOBALS"}["yiqbeauvnpv"] = "cat_name";
        $iqdcsacqo = "cat_name";
        extract(${${"GLOBALS"}["mcnbhpemkrlq"]});
        $isrthrg = "link";
        $ambojob = "link";
        ${"GLOBALS"}["thbskly"] = "category";
        ${${"GLOBALS"}["yiqbeauvnpv"]} = esc_attr($category->name);
        $pofahkunyh = "category";
        ${"GLOBALS"}["sfvnqpjvuf"] = "feed";
        ${"GLOBALS"}["fttgcrnedcj"] = "lclass";
        ${${"GLOBALS"}["vmrokehjhw"]} = apply_filters("list_cats", ${$iqdcsacqo}, ${${"GLOBALS"}["thbskly"]});
        ${${"GLOBALS"}["hxepegtjkq"]} = get_terms($category->taxonomy, array(
            "parent" => $category->term_id,
            "hide_empty" => false
        ));
        if (${${"GLOBALS"}["hxepegtjkq"]})
            ${${"GLOBALS"}["fttgcrnedcj"]} = " <i class=\"fa fa-angle-down\"></i> ";
        else
            ${${"GLOBALS"}["nmmdpbocusk"]} = "";
        $pblrgl = "link";
        ${$isrthrg} = "<a href=\"" . esc_url(get_term_link(${${"GLOBALS"}["fgngit"]})) . "\" ";
        if (${${"GLOBALS"}["assjjrr"]} == 0 || empty($category->description))
            ${${"GLOBALS"}["avuwsok"]} .= "title=\"" . esc_attr(sprintf(__("View all posts filed under %s"), ${${"GLOBALS"}["vmrokehjhw"]})) . "\"";
        else
            ${$ambojob} .= "title=\"" . esc_attr(strip_tags(apply_filters("category_description", $category->description, ${$pofahkunyh}))) . "\"";
        ${${"GLOBALS"}["avuwsok"]} .= ">";
        ${${"GLOBALS"}["avuwsok"]} .= ${${"GLOBALS"}["vmrokehjhw"]} . "</a>" . ${${"GLOBALS"}["nmmdpbocusk"]};
        if (! empty(${${"GLOBALS"}["rvfmdwhyy"]}) || ! empty(${${"GLOBALS"}["sfvnqpjvuf"]})) {
            ${"GLOBALS"}["lucuqitizkp"] = "link";
            ${"GLOBALS"}["tibjgkwttuqi"] = "link";
            ${"GLOBALS"}["pnvhbxtmml"] = "feed";
            ${${"GLOBALS"}["lucuqitizkp"]} .= " ";
            if (empty(${${"GLOBALS"}["rvfmdwhyy"]}))
                ${${"GLOBALS"}["avuwsok"]} .= "(";
            $dtsgsooh = "feed_type";
            $cfpqzxm = "link";
            ${${"GLOBALS"}["avuwsok"]} .= "<a href=\"" . esc_url(get_term_feed_link($category->term_id, $category->taxonomy, ${$dtsgsooh})) . "\"";
            ${"GLOBALS"}["qirkffsnfr"] = "name";
            if (empty(${${"GLOBALS"}["pnvhbxtmml"]})) {
                ${"GLOBALS"}["nlfwbktgcrt"] = "cat_name";
                ${"GLOBALS"}["kbkfrgbvk"] = "alt";
                ${${"GLOBALS"}["kbkfrgbvk"]} = " alt=\"" . sprintf(__("Feed for all posts filed under %s"), ${${"GLOBALS"}["nlfwbktgcrt"]}) . "\"";
            } else {
                $fusxuyntbik = "alt";
                ${"GLOBALS"}["iheptlxkx"] = "title";
                ${"GLOBALS"}["ihlvfu"] = "feed";
                ${${"GLOBALS"}["qlwxzsb"]} = " title=\"" . ${${"GLOBALS"}["ihlvfu"]} . "\"";
                ${$fusxuyntbik} = " alt=\"" . ${${"GLOBALS"}["nelbmiguquqk"]} . "\"";
                ${${"GLOBALS"}["uydmjz"]} = ${${"GLOBALS"}["nelbmiguquqk"]};
                ${${"GLOBALS"}["avuwsok"]} .= ${${"GLOBALS"}["iheptlxkx"]};
            }
            ${${"GLOBALS"}["tibjgkwttuqi"]} .= ">";
            if (empty(${${"GLOBALS"}["rvfmdwhyy"]}))
                ${$cfpqzxm} .= ${${"GLOBALS"}["qirkffsnfr"]};
            else
                ${${"GLOBALS"}["avuwsok"]} .= "<img src='$feed_image'$alt$title" . " />";
            ${${"GLOBALS"}["avuwsok"]} .= "</a>";
            if (empty(${${"GLOBALS"}["rvfmdwhyy"]}))
                ${${"GLOBALS"}["avuwsok"]} .= ")";
        }
        if (! empty(${${"GLOBALS"}["xfpvnkpykeo"]}))
            ${$pblrgl} .= " <span class=\"caTslide_count\">" . intval($category->count) . "</span>";
        if ("list" == ${${"GLOBALS"}["mwuavv"]}["style"]) {
            $xjvbcr = "output";
            ${"GLOBALS"}["kdfkvixflxxo"] = "class";
            ${$xjvbcr} .= "\t<li";
            ${${"GLOBALS"}["mbestgop"]} = "cat-item cat-item-" . $category->term_id;
            if (! empty(${${"GLOBALS"}["lxhotsj"]})) {
                ${"GLOBALS"}["zsqlyodiam"] = "class";
                ${"GLOBALS"}["xkbrgjqvcnou"] = "current_category";
                ${"GLOBALS"}["bcodanwz"] = "_current_category";
                ${"GLOBALS"}["gwocxd"] = "current_category";
                ${${"GLOBALS"}["bcodanwz"]} = get_term(${${"GLOBALS"}["xkbrgjqvcnou"]}, $category->taxonomy);
                if ($category->term_id == ${${"GLOBALS"}["gwocxd"]})
                    ${${"GLOBALS"}["mbestgop"]} .= " current-cat";
                elseif ($category->term_id == $_current_category->parent)
                    ${${"GLOBALS"}["zsqlyodiam"]} .= " current-cat-parent";
            }
            $dwlwvtdgthy = "output";
            ${${"GLOBALS"}["pbotqqrwz"]} .= " class=\"" . ${${"GLOBALS"}["kdfkvixflxxo"]} . "\"";
            ${$dwlwvtdgthy} .= ">$link\n";
        } else {
            ${${"GLOBALS"}["pbotqqrwz"]} .= "\t$link<br />\n";
        }
    }
}
if (! function_exists("karatok_the_attached_image")) {

    function karatok_the_attached_image()
    {
        ${${"GLOBALS"}["ohvcypytv"]} = get_post();
        $shxbpt = "next_attachment_url";
        ${${"GLOBALS"}["hhytfkwgjwd"]} = wp_get_attachment_url();
        ${"GLOBALS"}["ljlstoyior"] = "attachment_ids";
        ${"GLOBALS"}["knifzqd"] = "attachment_size";
        ${${"GLOBALS"}["mxiplpjo"]} = get_posts(array(
            "post_parent" => $post->post_parent,
            "fields" => "ids",
            "numberposts" => - 1,
            "post_status" => "inherit",
            "post_type" => "attachment",
            "post_mime_type" => "image",
            "order" => "ASC",
            "orderby" => "menu_order ID"
        ));
        if (count(${${"GLOBALS"}["ljlstoyior"]}) > 1) {
            $ghykicf = "attachment_ids";
            foreach (${$ghykicf} as ${${"GLOBALS"}["oelcmnvvarv"]}) {
                if (${${"GLOBALS"}["oelcmnvvarv"]} == $post->ID) {
                    ${${"GLOBALS"}["mubjtmebusr"]} = current(${${"GLOBALS"}["mxiplpjo"]});
                    break;
                }
            }
            ${"GLOBALS"}["lgxubzttbff"] = "next_id";
            if (${${"GLOBALS"}["lgxubzttbff"]}) {
                ${"GLOBALS"}["dqdhdlqa"] = "next_attachment_url";
                ${${"GLOBALS"}["dqdhdlqa"]} = get_attachment_link(${${"GLOBALS"}["mubjtmebusr"]});
            } else {
                ${"GLOBALS"}["jppvcmmudc"] = "attachment_ids";
                ${${"GLOBALS"}["hhytfkwgjwd"]} = get_attachment_link(array_shift(${${"GLOBALS"}["jppvcmmudc"]}));
            }
        }
        printf("<a href=\"%1\$s\" rel=\"attachment\">%2\$s</a>", esc_url(${$shxbpt}), wp_get_attachment_image($post->ID, ${${"GLOBALS"}["knifzqd"]}));
    }
}

function karatok_get_link_url()
{
    ${"GLOBALS"}["uuskeioe"] = "has_url";
    ${"GLOBALS"}["elwonh"] = "has_url";
    ${${"GLOBALS"}["qaujbiwmdyie"]} = get_the_content();
    ${${"GLOBALS"}["elwonh"]} = get_url_in_content(${${"GLOBALS"}["qaujbiwmdyie"]});
    return (${${"GLOBALS"}["xpehkoi"]}) ? ${${"GLOBALS"}["uuskeioe"]} : apply_filters("the_permalink", get_permalink());
}
add_action("wp_head", "karatok_custom_script_header");

function karatok_custom_script_header()
{
    global $karatok;
    echo "<script type=\"text/javascript\">var themedir=\"" . get_stylesheet_directory_uri() . "\",mco=\"{$karatok['modalcookie']}\";
</script>\n";
    if (${${"GLOBALS"}["emfztxm"]}["googleanalytics"]) {
        echo ${${"GLOBALS"}["emfztxm"]}["googleanalytics"];
    }
}
add_action("wp_footer", "karatok_custom_script_footer", 100);

function karatok_custom_script_footer()
{
    ${"GLOBALS"}["sdhfccl"] = "karatok";
    global $karatok;
    if (${${"GLOBALS"}["sdhfccl"]}["modalon"]) {
        echo "<a id=\"kmodal\" class=\"kmodal\" href=\"#kmodalbox\"></a>\n\t\t<div id=\"kmodalbox\" class=\"white-popup-block mfp-hide\">\n\t\t";
        if (${${"GLOBALS"}["emfztxm"]}["modaltype"] == 1) {
            echo "\t\t\t";
            if (${${"GLOBALS"}["emfztxm"]}["modalgambar"][0]["url"]) {
                ${"GLOBALS"}["uwujmrhqo"] = "karatok";
                echo "<a href=\"";
                echo ${${"GLOBALS"}["uwujmrhqo"]}["modalgambar"][0]["url"];
                echo "\" title=\"";
                echo ${${"GLOBALS"}["emfztxm"]}["modalgambar"][0]["title"];
                echo "\">";
            }
            echo "\n\t\t\t";
            if (${${"GLOBALS"}["emfztxm"]}["modalgambar"][0]["image"]) {
                echo "<img src=\"";
                echo ${${"GLOBALS"}["emfztxm"]}["modalgambar"][0]["image"];
                echo "\" alt=\"";
                echo ${${"GLOBALS"}["emfztxm"]}["modalgambar"][0]["title"];
                echo "\">";
            }
            $pgecvgf = "karatok";
            echo "\n\t\t\t";
            if (${$pgecvgf}["modalgambar"][0]["url"]) {
                echo "</a>";
            }
            echo "\n\t\t";
        } elseif (${${"GLOBALS"}["emfztxm"]}["modaltype"] == 2) {
            echo "\t\t\t";
            echo stripcslashes(${${"GLOBALS"}["emfztxm"]}["modalhtml"]);
            echo "\t\t";
        }
        echo "\n\t\t</div>\n\t\t";
    }
    if (${${"GLOBALS"}["emfztxm"]}["customjs"]) {
        echo ${${"GLOBALS"}["emfztxm"]}["customjs"];
    }
}
add_filter("karatok_custom_css", "karatok_custom_css_header");

function karatok_custom_css_header($css)
{
    ${"GLOBALS"}["sebvpemgqh"] = "karatok";
    global $karatok;
    if (strtolower(${${"GLOBALS"}["emfztxm"]}["opt-link-color"]["hover"]) != strtolower("#bf1e4b")) {
        ${"GLOBALS"}["sbvfqv"] = "karatok";
        ${"GLOBALS"}["gxvoxsctf"] = "karatok";
        ${${"GLOBALS"}["jyngbykt"]} = ${${"GLOBALS"}["emfztxm"]}["opt-link-color"]["hover"];
        $ndbiyzwutq = "akolor";
        ${$ndbiyzwutq} = ${${"GLOBALS"}["gxvoxsctf"]}["opt-link-color"]["regular"];
        ${${"GLOBALS"}["hqmjxegtymfb"]} = ${${"GLOBALS"}["sbvfqv"]}["warna-border"]["border-color"];
        ${${"GLOBALS"}["alphhjzvwkch"]} = ${${"GLOBALS"}["emfztxm"]}["opt-background"]["background-color"];
        ${${"GLOBALS"}["xijhybdb"]} .= ".entry-ImgAttr ul li i,.ImgboxTitle,.widget-ImgAttr span,.cd-tabs-content article:before,.recent-widget:before,.nav li:hover > a,.nav li a:hover,.SearchSoc ul li i.fa-search,.Navi ul li.toggle-menu > a,.cbp-spmenu,.blue-btn:hover,.comment-reply-link:hover,#submit:hover,.blue-btn:focus,.comment-reply-link:focus,#submit:focus,.button,.button:visited,#submit,#submit:visited,#submit:hover,#submit:focus,#submit:visited:hover,#submit:visited:focus,.button:hover,.button:focus,.button:visited:hover,.button:visited:focus,.entry-img .imgSize,.atTach .entry-img button,.cbp-spmenu h3,.cbp-spmenu ul.children li a,.widget_tag_cloud a:hover,.pagination a:hover,.pagination a:focus,.pagination span:hover,.pagination span:focus,.Navi ul li.Kcategories > a,ul.tabscomment li.current .commentNum,.comment-reply-link,.kcategories li .caTslide_count,.nav li ul.sub-menu,.atTach .entry-img button,.downloadArea a,.atTach .entry-img .downwalah,#back-top{background:$kolor}::-webkit-scrollbar-thumb,::selection{background-color:$kolor}" . "a:hover,a:focus,a:visited:hover,a:visited:focus,#logo a.h1,.widget_categories ul li:before,.entry-content a,.widget ul li a:hover,.cd-tabs-content article.hitung-populer,.cd-tabs-content li .hitung-populer,.kategori-kecil a,.recent-widget .hitung-populer,.recent-widget .kategori-kecil a,.footerNav ul li a:hover,.cbp-spmenu a:hover,.nav li ul.sub-menu li > a:hover,.pagination a,.pagination span,.pagination .current:hover,.pagination .current:focus,.cbp-spmenu form input#searchsubmit:hover,.headNavi ul ul li.menu-item-has-children i:before,.cd-tabs-content article:hover .kategori-kecil a,.recent-widget:hover .kategori-kecil a,.logged-in-as a,.breadcrumbs a,.author a,.entry-ImgAttr .jempol:hover:before,.entry-ImgAttr .jempol.liked:before,.naviImg i,.SearchSoc ul li i.fa-search:hover,.atTach .entry-img button:hover a,.downloadArea button:hover a,.ImgboxAttr i,.entry-ImgAttr i.jempol.liked,.Navi ul li.Kcategories > a:hover,.blog-widget-article h3:hover,#back-top a:hover i,.copyright a,.popular-widget .widget-ImgAttr > span{color:$kolor}" . ".atTach .entry-img .downwalah:hover,.downloadArea .downwalah:hover,.downloadArea .viewwalah:hover,.atTach .entry-img .downwalah:hover i,.downloadArea .downwalah:hover i,.downloadArea .viewwalah:hover i,.cbp-spmenu ul.children > li:hover a{color:$kolor!important}" . ".entry-content blockquote,.widget_tag_cloud a:hover,ul.tabscomment li.current .commentNum{border-color:$kolor}" . ".nav li a,ul.tabscomment li,.cd-tabs-content article h3,.recent-widget h3,.widget ul li a,.footerNav ul li a,.SearchSoc ul li i,.byline,.single-title,.page-title,.entry-title{color:$akolor}" . "ul.tabscomment li:hover,.no-touch .cd-tabs-navigation a:hover{box-shadow: inset 0px -40px 0px 0px $kolor}.kcategories li a:hover{box-shadow: inset 0px -32px 0px 0px $kolor}.kcategories li a{box-shadow: inset 0px 0px 0px 0px $kolor}.random-widget {box-shadow: inset 0px -2px 0px 0px $kolor;
}ul.tabscomment li.current{box-shadow: inset 0 -2px 0 0px $kolor;
}.cd-tabs-navigation a.selected{box-shadow: inset 0 -2px 0 0px $kolor;}.cbp-spmenu li:hover > span{background:$kolor!important}" . ".next-thumb .next:after,.prev-thumb .previous:after{background:$borkolor}.wp-caption{background:$borkolor}.blogArchieve article footer{border-color:$borkolor}.nav ul{background:$backkolor}";
    }
    if (strtolower(${${"GLOBALS"}["emfztxm"]}["opt-background"]["background-color"]) != strtolower("#fff")) {
        $kofkwufrkd = "css";
        ${${"GLOBALS"}["wbrtrxh"]} = ${${"GLOBALS"}["emfztxm"]}["opt-background"]["background-color"];
        ${$kofkwufrkd} .= ".headNavi.fixed{background:$bgkolor}";
    }
    if (${${"GLOBALS"}["sebvpemgqh"]}["customcss"]) {
        ${"GLOBALS"}["kjjnujkble"] = "karatok";
        ${${"GLOBALS"}["xijhybdb"]} .= str_replace(array(
            "\r\n",
            "\r",
            "\n"
        ), "", ${${"GLOBALS"}["kjjnujkble"]}["customcss"]);
    }
    return ${${"GLOBALS"}["xijhybdb"]};
}
add_action("karatok_credit", "karatok_credit_footer");

function karatok_credit_footer()
{
    global $karatok;
    if (${${"GLOBALS"}["emfztxm"]}["credit"])
        echo "{$karatok['credit']}";
}
add_action("admin_footer", "karatok_custom_admin_script", 100);

function karatok_custom_admin_script()
{
    echo "<script type=\"text/javascript\">\n\t\tjQuery(document).ready(function(\$) {\n\t\t\t\$(\"h4:contains('Karatok')\" ).parent('div').css({\"background\": \"#333\",\"color\": \"#fff\"});
\n\t\t\tvar mtitle = \$('#karatok-modalgambar .redux-slides-header');
\n\t\t\tmtitle.text(mtitle.text().replace('New Slide', ''));
\n\t\t});
\n\t</script>\n\t";
}
add_action("admin_head", "karatok_admin_header");

function karatok_admin_header()
{
    echo "<style type=\"text/css\">\n\t\ttd.media-icon img[src\$=\".svg\"], img[src\$=\".svg\"].attachment-post-thumbnail{width:100% !important;
height:auto !important;}\n\t\t#karatok-modalgambar .redux-slides-add,#karatok-modalgambar textarea,#karatok-modalgambar .redux-slides-remove{display:none}\n\t</style>";
}

function karatok_remove_hentry_class($classes)
{
    $totobikiebh = "classes";
    $reyybmcq = "classes";
    ${${"GLOBALS"}["jwdsnvp"]} = array_diff(${$reyybmcq}, array(
        "hentry"
    ));
    return ${$totobikiebh};
}
add_filter("post_class", "karatok_remove_hentry_class");
add_action("add_meta_boxes", "karatok_add_meta_box");

function karatok_add_meta_box()
{
    add_meta_box("karatok_meta_box_sidebar", "Sidebar Options", "karatok_meta_box_sidebar", "", "normal", "high");
}

function karatok_meta_box_sidebar($post)
{
    ${"GLOBALS"}["cwugxhuv"] = "sidebar_pos";
    ${"GLOBALS"}["glqffgbbvszn"] = "sidebar_pos";
    global $karatok;
    $qlppoumvk = "sidebar_pos";
    $cfxwudeitiok = "keys";
    $vdeopcvbscyg = "keys";
    ${${"GLOBALS"}["txjhugrxjqnc"]} = get_post_custom($post->ID);
    ${$cfxwudeitiok} = array(
        "sidebar_pos",
        "sidebar_post"
    );
    foreach (${$vdeopcvbscyg} as ${${"GLOBALS"}["nikgtnh"]}) {
        ${"GLOBALS"}["tlwuztqc"] = "value";
        ${"GLOBALS"}["txxdod"] = "key";
        $buhoohovyq = "value";
        $${${"GLOBALS"}["nikgtnh"]} = isset(${${"GLOBALS"}["tlwuztqc"]}["karatok_" . ${${"GLOBALS"}["nikgtnh"]}]) ? esc_attr(${$buhoohovyq}["karatok_" . ${${"GLOBALS"}["txxdod"]}][0]) : "";
    }
    ${$qlppoumvk} = ${${"GLOBALS"}["glqffgbbvszn"]} ? ${${"GLOBALS"}["cwugxhuv"]} : "default";
    wp_nonce_field("karatok_meta_box_field", "karatok_meta_box_nonce");
    echo "\t<table class=\"form-table\">\n\t\t<tbody>\n\t\t\t<tr>\n\t\t\t\t<th><label for=\"sidebar_position\">Sidebar Position</label></th>\n\t\t\t\t<td>\n\t\t\t\t\t<input type=\"radio\" value=\"default\" name=\"sidebar_pos\" id=\"sidebar_pos_default\" ";
    checked("default", ${${"GLOBALS"}["rgosdwqdhpjl"]});
    echo "> <label for=\"sidebar_pos_default\">Default</label>\n\t\t\t\t\t<input type=\"radio\" value=\"right\" name=\"sidebar_pos\" id=\"sidebar_pos_right\" ";
    checked("right", ${${"GLOBALS"}["rgosdwqdhpjl"]});
    echo "> <label for=\"sidebar_pos_right\">Right</label>\n\t\t\t\t\t<input type=\"radio\" value=\"left\" name=\"sidebar_pos\" id=\"sidebar_pos_left\" ";
    checked("left", ${${"GLOBALS"}["rgosdwqdhpjl"]});
    echo "> <label for=\"sidebar_pos_left\">Left</label>\n\t\t\t\t\t<input type=\"radio\" value=\"full\" name=\"sidebar_pos\" id=\"sidebar_pos_full\" ";
    checked("full", ${${"GLOBALS"}["rgosdwqdhpjl"]});
    echo "> <label for=\"sidebar_pos_full\">Full</label>\n\t\t\t\t</td>\n\t\t\t</tr>\n\t\t\t<tr>\n\t\t\t\t<th><label for=\"choose_sidebar\">Choose Sidebar</label></th>\n\t\t\t\t<td><select name=\"sidebar_post\" id=\"choose_sidebar\">\n\t\t\t\t\t\t<option value=\"\">Default</option>\n\t\t\t\t\t\t";
    foreach (${${"GLOBALS"}["emfztxm"]}["sidebars"]["sidebar"] as ${${"GLOBALS"}["obhydqtgeyw"]} => ${${"GLOBALS"}["vveilkrjsg"]}) {
        $lykigift = "sidebar_post";
        ${"GLOBALS"}["qzayqgtcn"] = "sidebar";
        ${"GLOBALS"}["kpiosgw"] = "sidebar";
        echo "<option value=\"" . ${${"GLOBALS"}["vveilkrjsg"]} . "\" " . selected(${${"GLOBALS"}["kpiosgw"]}, ${$lykigift}, false) . ">" . ${${"GLOBALS"}["qzayqgtcn"]} . "</option>";
    }
    echo "\t\t\t\t\t</select>\n\t\t\t\t</td>\n\t\t\t</tr>\n\t\t</tbody>\n\t</table>\n\t";
}
add_action("save_post", "karatok_meta_box_save");

function karatok_meta_box_save($post_id)
{
    ${"GLOBALS"}["dodrsrjki"] = "post_id";
    if (! isset($_POST["karatok_meta_box_nonce"]))
        return ${${"GLOBALS"}["nuvdjslmjs"]};
    ${${"GLOBALS"}["qxbwkbolzylp"]} = $_POST["karatok_meta_box_nonce"];
    if (! wp_verify_nonce(${${"GLOBALS"}["qxbwkbolzylp"]}, "karatok_meta_box_field"))
        return ${${"GLOBALS"}["dodrsrjki"]};
    if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return ${${"GLOBALS"}["nuvdjslmjs"]};
    ${"GLOBALS"}["tprtbrgql"] = "mydata";
    ${"GLOBALS"}["bulwun"] = "k";
    if ("page" == $_POST["post_type"]) {
        $ucmdtcptuv = "post_id";
        ${"GLOBALS"}["acsibrzvuwtn"] = "post_id";
        if (! current_user_can("edit_page", ${$ucmdtcptuv}))
            return ${${"GLOBALS"}["acsibrzvuwtn"]};
    } else {
        if (! current_user_can("edit_post", ${${"GLOBALS"}["nuvdjslmjs"]}))
            return ${${"GLOBALS"}["nuvdjslmjs"]};
    }
    ${${"GLOBALS"}["tprtbrgql"]}["sidebar_pos"] = sanitize_text_field($_POST["sidebar_pos"]);
    ${"GLOBALS"}["wujvyen"] = "mydata";
    ${${"GLOBALS"}["fcgbmqgyvw"]}["sidebar_post"] = sanitize_text_field($_POST["sidebar_post"]);
    foreach (${${"GLOBALS"}["wujvyen"]} as ${${"GLOBALS"}["bulwun"]} => ${${"GLOBALS"}["wrxkbyfon"]}) {
        update_post_meta(${${"GLOBALS"}["nuvdjslmjs"]}, "karatok_" . ${${"GLOBALS"}["obhydqtgeyw"]}, ${${"GLOBALS"}["wrxkbyfon"]});
    }
}
add_action("wp_ajax_nopriv_krating", "karatok_rating");
add_action("wp_ajax_krating", "karatok_rating");

function karatok_rating()
{
    ${"GLOBALS"}["bympbnb"] = "postid";
    $gkgheot = "nonce";
    ${$gkgheot} = $_POST["nonce"];
    $qerlfwh = "nonce";
    ${${"GLOBALS"}["bympbnb"]} = $_POST["postid"];
    if (! wp_verify_nonce(${$qerlfwh}, "karatok-nonce"))
        die("Busted!");
    if (! isset($_COOKIE["krating_" . ${${"GLOBALS"}["ercrbledv"]}])) {
        ${"GLOBALS"}["lnooqph"] = "rating";
        $utxuxbdiklf = "rating";
        ${"GLOBALS"}["kjxbxcsns"] = "rating";
        $cbioxdo = "total";
        $noamgoicnbo = "rating";
        ${${"GLOBALS"}["kjxbxcsns"]} = get_post_meta(${${"GLOBALS"}["ercrbledv"]}, "karatok_rating", true);
        ${${"GLOBALS"}["lnooqph"]} = ${$noamgoicnbo} ? ${$utxuxbdiklf} : 0;
        ${$cbioxdo} = ${${"GLOBALS"}["tgkfxhpk"]} + 1;
        $dgtxyofg = "postid";
        update_post_meta(${${"GLOBALS"}["ercrbledv"]}, "karatok_rating", ${${"GLOBALS"}["rfwqoybxowv"]});
        setcookie("krating_" . ${$dgtxyofg}, "rated", strtotime("+1 year"), COOKIEPATH, COOKIE_DOMAIN);
        die("$total");
    } else {
        exit();
    }
}
add_action("wp_ajax_nopriv_kdownwalah", "karatok_download_file");
add_action("wp_ajax_kdownwalah", "karatok_download_file");

function karatok_download_file()
{
    ${"GLOBALS"}["jjhvvtjvcsr"] = "file";
    ${"GLOBALS"}["epafznlxj"] = "counter";
    ${"GLOBALS"}["oxklpgs"] = "postid";
    global $karatok;
    ${${"GLOBALS"}["qxbwkbolzylp"]} = $_POST["nonce"];
    ${"GLOBALS"}["pjwqywf"] = "postid";
    ${${"GLOBALS"}["pjwqywf"]} = $_POST["postid"];
    ${${"GLOBALS"}["jjhvvtjvcsr"]} = $_POST["file"];
    $vvxypto = "counter";
    ${"GLOBALS"}["abkbabrffld"] = "counter";
    ${"GLOBALS"}["xmedyfk"] = "counter";
    if (! wp_verify_nonce(${${"GLOBALS"}["qxbwkbolzylp"]}, "karatok-nonce"))
        die("Busted!");
    ${${"GLOBALS"}["xmedyfk"]} = get_post_meta(${${"GLOBALS"}["oxklpgs"]}, "karatok_download", true);
    ${${"GLOBALS"}["abkbabrffld"]} = ${${"GLOBALS"}["mjerlibga"]} ? ${$vvxypto} : 0;
    ${${"GLOBALS"}["mjerlibga"]} += 1;
    update_post_meta(${${"GLOBALS"}["ercrbledv"]}, "karatok_download", ${${"GLOBALS"}["epafznlxj"]});
    die("$counter");
}

function karatok_metadata()
{
    global $karatok;
    $mqqmebkfgjg = "karatok";
    echo "\n\t";
    if (${$mqqmebkfgjg}["seometa"]) {
        echo "\t\t<!--Karatok Meta Optimizing -->\n\t\t<meta name=\"googlebot\" content=\"index,follow\" />\n\t\t<meta name=\"msnbot\" content=\"index,follow\" />\n\t\t<meta name=\"robots\" content=\"index,follow\" />\n\t\t";
        if (${${"GLOBALS"}["emfztxm"]}["metadescription"]) {
            $hriqrflnt = "karatok";
            echo "<meta name=\"description\" content=\"";
            global $post;
            if (is_home())
                echo ${$hriqrflnt}["metadescription"];
            else
                echo karatok_get_single_desc();
            echo "\"/>\n\t\t";
        }
        echo "\n\t\t";
        if (${${"GLOBALS"}["emfztxm"]}["metakeywords"]) {
            echo "<meta name=\"keywords\" content=\"";
            global $post;
            if (is_home())
                echo ${${"GLOBALS"}["emfztxm"]}["metakeywords"];
            else
                ${${"GLOBALS"}["lyucwuflpij"]} = get_the_tags();
            if (${${"GLOBALS"}["lyucwuflpij"]}) {
                ${"GLOBALS"}["ydqqgnqvqaa"] = "tag";
                ${"GLOBALS"}["tviigm"] = "posttags";
                foreach (${${"GLOBALS"}["tviigm"]} as ${${"GLOBALS"}["ydqqgnqvqaa"]}) {
                    echo $tag->name . ", ";
                }
            }
            echo "\"/>";
        }
        echo "\n\t\t";
    }
    echo "\n\n\t\t";
    if (${${"GLOBALS"}["emfztxm"]}["seoverify"]) {
        echo "\t\t\t";
        if (${${"GLOBALS"}["emfztxm"]}["googleverify"]) {
            echo "\t\t\t<meta name=\"google-site-verification\" content=\"";
            echo ${${"GLOBALS"}["emfztxm"]}["googleverify"];
            echo "\"/>\n\t\t\t";
        }
        echo "\n\t\t\t";
        if (${${"GLOBALS"}["emfztxm"]}["bingverify"]) {
            echo "\t\t\t<meta name=\"msvalidate.01\" content=\"";
            ${"GLOBALS"}["niscmrghj"] = "karatok";
            echo ${${"GLOBALS"}["niscmrghj"]}["bingverify"];
            echo "\"/>\n\t\t\t";
        }
        $xspqwzejx = "karatok";
        echo "\n\t\t\t";
        if (${$xspqwzejx}["alexaverify"]) {
            ${"GLOBALS"}["ujxhdzt"] = "karatok";
            echo "\t\t\t<meta name=\"alexaVerifyID\" content=\"";
            echo ${${"GLOBALS"}["ujxhdzt"]}["alexaverify"];
            echo "\"/>\n\t\t\t";
        }
        echo "\n\t\t";
    }
    echo "\n\n";
}
add_action("wp_head", "karatok_og_meta");

function karatok_og_meta()
{
    $nsewxyxkut = "karatok";
    $uijuuynpdr = "post";
    global $karatok;
    ${$uijuuynpdr};
    echo "\t";
    if (${$nsewxyxkut}["opengraph"]) {
        if (is_single()) {
            echo "\t\t<meta property=\"og:title\" content=\"";
            the_title();
            echo "\"/>\n\t\t<meta property=\"og:description\" content=\"";
            echo karatok_get_single_desc();
            echo "\"/>\n\t\t<meta property=\"og:url\" content=\"";
            the_permalink();
            echo "\"/>\n\t\t<meta property=\"og:image\" content=\"";
            echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            echo "\"/>\n\t\t<meta property=\"og:type\" content=\"";
            if (is_single() || is_page())
                echo "article";
            else
                echo "website";
            echo "\"/>\n\t\t<meta property=\"og:site_name\" content=\"";
            bloginfo("name");
            echo "\"/>\n\t\t<meta property=\"og:locale\" content=\"en_US\"/>\n\t\t";
        }
    }
    echo "\n";
}
add_filter("language_attributes", "karatok_og_html");

function karatok_og_html($xmlns)
{
    ${"GLOBALS"}["jgyhnxmc"] = "xmlns";
    return ${${"GLOBALS"}["jgyhnxmc"]} . " xmlns:og=\"http://ogp.me/ns#\" xmlns:fb=\"http://www.facebook.com/2008/fbml\"";
}