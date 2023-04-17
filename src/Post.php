<?php

add_action('wp_ajax_my_create_product', 'my_ajax_handler_create');
function my_ajax_handler_create()
{
    check_ajax_referer('title_example');

    $posts = [
        [
            'post_title' => 'Post 1',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 2',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 3',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 4',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 5',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 6',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 7',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 8',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 9',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 10',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 11',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 12',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 13',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 14',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 15',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 16',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ],
        [
            'post_title' => 'Post 17',
            'post_content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima alias consequatur doloribus! Possimus hic aut consequuntur corporis placeat ducimus, reiciendis fugit, quaerat autem, expedita quis suscipit! Quaerat quia in inventore.',
            'post_status' => 'publish',
        ]
    ];

    if ($posts) {
        $posts_created = 0;

        $response = (object) [
            'total' => sizeof($posts),
            'offset' => $_POST['offset'] ? $_POST['offset'] : 0,
            'posts_per_time' => 5,
            'posts_created' => $posts_created
        ];

        for ($i = $response->offset; $i < $response->total; $i++) {
            if ($posts_created < $response->posts_per_time) {
                wp_insert_post($posts[$i]);

                $posts_created++;
                $response->offset++;
            } else {
                break;
            }
        }
    }

    $response->posts_created = $posts_created;

    return (exit(json_encode($response)));

    wp_die();
}
