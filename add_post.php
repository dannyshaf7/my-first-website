<?php
// MY-FIRST-WEBSITE/add_post.php

$password = 'YourStrongPasswordHere'; 

if ($_POST['password'] !== $password) {
    die('Unauthorized');
}

$title = htmlspecialchars($_POST['title']);
$content = htmlspecialchars($_POST['content']);

$post = [
    'title' => $title,
    'content' => $content,
    'timestamp' => date('Y-m-d H:i:s')
];

$file = 'posts.json';
$data = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

file_put_contents($file, jason_encode($data, JSON_PRETTY_PRINT));
echo "Post added! <a href='blog.html'>View blog</a>";
?>