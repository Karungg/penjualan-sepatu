<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= base_url('admin') ?>">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url('admin') ?>">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="<?= $current_page == 'dashboard' ? 'active' : '' ?>"><a href="<?= base_url('admin') ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
            <li class="menu-header">Master Data</li>
            <li class="<?= $current_page == 'categories' ? 'active' : '' ?>"><a class="nav-link" href="<?= base_url('admin/categories') ?>"><i class="fas fa-tag"></i> <span>Categories</span></a></li>
            <li class="<?= $current_page == 'products' ? 'active' : '' ?>"><a class="nav-link" href="<?= base_url('admin/products') ?>"><i class="fas fa-store"></i> <span>Products</span></a></li>
            <li class="<?= $current_page == 'stocks' ? 'active' : '' ?>"><a class="nav-link" href="<?= base_url('admin/stocks') ?>"><i class="fas fa-boxes"></i> <span>Stocks</span></a></li>
            <li class="<?= $current_page == 'customers' ? 'active' : '' ?>"><a class="nav-link" href="<?= base_url('admin/customers') ?>"><i class="far fa-user"></i> <span>Customers</span></a></li>
            <li class="menu-header">Transaction</li>
            <li class="<?= $current_page == 'orders' ? 'active' : '' ?>"><a class="nav-link" href="<?= base_url('admin/orders') ?>"><i class="fas fa-money-bill"></i> <span>Orders</span></a></li>
    </aside>
</div>