@php
	$title = App\Helper::title(get_sub_field('title'));
	$selected_posts = get_sub_field('projecten');
	$manual_projects = get_sub_field('manual_projects');
@endphp

<div>
	@if ($title)
		<h2 class="text-70-70-300 text-green">{!! $title !!}</h2>
	@endif
	<livewire:project-lazy-loader lazy :selected_posts="$selected_posts" :manual="$manual_projects" />
</div>
