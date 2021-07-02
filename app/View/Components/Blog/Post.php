<?php

namespace App\View\Components\Blog;
use App\Models\Post as PostModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Post extends Component
{
    public PostModel $post;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(PostModel $post)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|\Closure|string
     */
    public function render()
    {
        return view('components.blog.post');
    }
}
