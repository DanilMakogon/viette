<?php
/**
 * @var $post Post
 **/

use App\Models\Post;

?>
<div class="post">
    <div class="post-header">
        <h3>{{ $post->title }}</h3>
    </div>
    <div class="post-body">
        <p>{{ $post->excerpt }}</p>
    </div>
    <div class="post-footer">
        <div class="float-end">
            <span class="post-category mx-2"><a href=""><i class="bi bi-box-seam"></i> Cars</a></span>
            <span class="post-date"><i class="bi bi-calendar3"></i> {{ date_format($post->created_at, 'd.m.Y H:i') }}</span>
        </div>
    </div>
</div>
