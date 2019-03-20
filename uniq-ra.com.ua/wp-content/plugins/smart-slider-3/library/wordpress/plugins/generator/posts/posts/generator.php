<?php

N2Loader::import('libraries.slider.generator.abstract', 'smartslider');

if(function_exists('qtranxf_load_option_qtrans_compatibility')){
    qtranxf_load_option_qtrans_compatibility();
}

class N2GeneratorPostsPosts extends N2GeneratorAbstract
{

    private function qTranslate($text, $link = false) {
        $lang = $this->data->get('qtranslate', '');
        if (!empty($lang) && !$link && function_exists('qtrans_use')) {
            return qtrans_use($lang, $text);
        } else if (!empty($lang) && $link && function_exists('qtrans_convertURL')) {
            return qtrans_convertURL($text, $lang, true);
        } else {
            return $text;
        }
    }

    protected function _getData($count, $startIndex) {
        global $post, $wp_the_query;
        $tmpPost         = $post;
        $tmpWp_the_query = $wp_the_query;
        $wp_the_query = null;

        list($orderBy, $order) = N2Parse::parse($this->data->get('postscategoryorder', 'post_date|*|desc'));

        $allTags   = $this->data->get('posttags', '');
        $tax_query = '';
        if (!empty($allTags)) {
            $tags = explode('||', $allTags);
            if (!in_array('0', $tags)) {
                $tax_query = array();
                foreach ($tags AS $tag) {
                    $tax_query[] = array(
                        'taxonomy' => 'post_tag',
                        'terms'    => $tag,
                        'field'    => 'id'
                    );
                }
                $tax_query['relation'] = 'OR';
            }
        }

        $postsFilter = array(
            'include'          => '',
            'exclude'          => '',
            'meta_key'         => '',
            'meta_value'       => '',
            'post_type'        => 'post',
            'post_mime_type'   => '',
            'post_parent'      => '',
            'post_status'      => 'publish',
            'suppress_filters' => false,
            'offset'           => $startIndex,
            'posts_per_page'   => $count,
            'orderby'          => $orderBy,
            'order'            => $order,
            'tax_query'        => $tax_query
        );

        $categories = (array)N2Parse::parse($this->data->get('postscategory'));
        if (!in_array(0, $categories)) {
            $postsFilter['category'] = implode(',', $categories);
        }

        $posts = get_posts($postsFilter);

        $data = array();
        for ($i = 0; $i < count($posts); $i++) {
            $record = array();

            $post = $posts[$i];
            setup_postdata($post);

            $record['id']          = $post->ID;
            $record['url']         = $this->qTranslate(get_permalink(), true);
            $record['title']       = $this->qTranslate(apply_filters('the_title', get_the_title()));
            $record['description'] = $record['content'] = $this->qTranslate(get_the_content());
            $record['author_name'] = $record['author'] = get_the_author();
            $record['author_url']  = get_the_author_meta('url');
            $record['date']        = get_the_date();
            $record['excerpt']     = $this->qTranslate(get_the_excerpt());
            $record['modified']    = get_the_modified_date();

            $category = get_the_category($post->ID);
            if (isset($category[0])) {
                $record['category_name'] = $this->qTranslate($category[0]->name);
                $record['category_link'] = $this->qTranslate(get_category_link($category[0]->cat_ID), true);
            } else {
                $record['category_name'] = '';
                $record['category_link'] = '';
            }

            $record['featured_image'] = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            if (!$record['featured_image']) $record['featured_image'] = '';

            $record['thumbnail'] = $record['image'] = $record['featured_image'];
            $record['url_label'] = 'View post';

            if (class_exists('acf')) {
                $fields = get_fields($post->ID);
                if (count($fields) && is_array($fields) && !empty($fields)) {
                    foreach ($fields AS $k => $v) {
                        $k = str_replace('-', '', $k);
                        if (!is_array($v)) {
                            $record[$k] = $v;
                        } else if (isset($v['url'])) {
                            $record[$k] = $v['url'];
                        }
                    }
                }
            }

            $data[$i] = &$record;
            unset($record);
        }

        $wp_the_query = $tmpWp_the_query;

        wp_reset_postdata();
        $post = $tmpPost;
        if ($post) setup_postdata($post);
        return $data;
    }
}