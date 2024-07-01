{{-- 
    If you want rems you can instead do: 
    --mobile-space: {{ str_replace('px', '', get_sub_field('mobile_space')) / 4 }}rem;  
--}}

<div class="space-builder"
    style="
    @php
$mobileGroup = get_sub_field('space_group_mobile');
		$tabletGroup = get_sub_field('space_group_tablet');
		$laptopGroup = get_sub_field('space_group_laptop');
		$desktopGroup = get_sub_field('space_group_desktop');

		$mobileSpace = $mobileGroup['mobile_space'] == 'custom' ? $mobileGroup['mobile_space_custom'] : $mobileGroup['mobile_space'];
		$tabletSpace = $tabletGroup['tablet_space'] == 'custom' ? $tabletGroup['tablet_space_custom'] : $tabletGroup['tablet_space'];
		$laptopSpace = $laptopGroup['laptop_space'] == 'custom' ? $laptopGroup['laptop_space_custom'] : $laptopGroup['laptop_space'];
		$desktopSpace = $desktopGroup['desktop_space'] == 'custom' ? $desktopGroup['desktop_space_custom'] : $desktopGroup['desktop_space']; @endphp

    --mobile-space: {{ $mobileSpace }};
    --tablet-space: {{ $tabletSpace }};
    --laptop-space: {{ $laptopSpace }};
    --desktop-space: {{ $desktopSpace }};
">
</div>
