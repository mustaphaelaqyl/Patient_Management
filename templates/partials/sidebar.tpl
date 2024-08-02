<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link flex justify-content-center text-center py-5">
        {* <img src="path/to/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> *}
        <span class="brand-text font-weight-bold text-white">MediCore Hospital</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
            {foreach from=$navigationItems key=page item=item}
                <li class="nav-item my-1">
                    <a href="?page={$page}" class="nav-link font-weight-bold py-3 text-white{if $currentPage == $page} active{/if}">
                        <i class="nav-icon {$item.icon} mr-2"></i>
                        <p>{$item.label}</p>
                    </a>
                </li>
            {/foreach}
                <!-- Other items -->
            </ul>
        </nav>
    </div>
</aside>
