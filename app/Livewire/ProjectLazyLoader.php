<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

class ProjectLazyLoader extends Component
{
    public ?string $title = null;

    public ?array $selected_posts = null;

    public bool $manual;

    public int $perPage = 6;

    public int $page = 1;

    public int $totalPosts = 0;

    /**
     * @var array<int, array{id: int, title: string, url: string, featured_image: string}>
     */
    public array $serializedPosts = [];

    /**
     * Mount the component.
     */
    public function mount(?array $selected_posts, bool $manual): void
    {
        $this->selected_posts = $selected_posts;
        $this->manual = $manual;
        $this->totalPosts = $this->getTotalPosts();
        $this->loadPosts();
    }

    /**
     * Load more posts.
     */
    public function loadMore(): void
    {
        $this->page++;
        $this->loadPosts();
    }

    /**
     * Get the total number of posts.
     */
    private function getTotalPosts(): int
    {
        if ($this->manual) {
            return count($this->selected_posts);
        }

        return (int) wp_count_posts('project')->publish;
    }

    /**
     * Load and serialize posts.
     */
    private function loadPosts(): void
    {
        $args = [
            'post_type' => 'project',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'ASC',
            'posts_per_page' => $this->perPage,
            'paged' => $this->page,
        ];

        if ($this->manual) {
            $args['post__in'] = $this->selected_posts;
            $args['orderby'] = 'post__in';
        }

        $newPosts = get_posts($args);
        $this->serializedPosts = array_merge($this->serializedPosts, $this->serializePosts($newPosts));
    }

    /**
     * Serialize WordPress post objects.
     *
     * @return array<int, array{id: int, title: string, url: string, featured_image: string}>
     */
    private function serializePosts(array $posts): array
    {
        return array_map(fn ($post): array => [
            'id' => $post->ID,
            'title' => $post->post_title,
            'url' => get_permalink($post->ID),
            'featured_image' => get_the_post_thumbnail_url($post->ID, 'full') ?: '',
        ], $posts);
    }

    /**
     * Render the component.
     */
    public function render(): \Illuminate\View\View
    {
        $hasMore = count($this->serializedPosts) < $this->totalPosts;

        return view('livewire.project-lazy-loader', [
            'posts' => $this->serializedPosts,
            'hasMore' => $hasMore,
        ]);
    }
}
