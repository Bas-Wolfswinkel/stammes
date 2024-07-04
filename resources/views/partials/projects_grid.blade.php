@php
	$title = App\Helper::title(get_sub_field('title'));
	$selected_posts = get_sub_field('projecten');
	$manual_projects = get_sub_field('manual_projects');
@endphp

<div>

	<livewire:project-lazy-loader lazy :title="$title" :selected_posts="$selected_posts" :manual="$manual_projects" />
</div>
