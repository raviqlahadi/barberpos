<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <div class="c-sidebar-brand-full">
            <h3>BARBER<span style="font-weight: 100;">POP</span></h3>
        </div>
        <div class="c-sidebar-brand-minimized">
            <h3>BP</h3>
        </div>

    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-title">Menu</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="<?php echo base_url('dashboard') ?>">
                <i class="fa fa-home c-sidebar-nav-icon"></i> Dashboard
            </a>
        </li>
     
        <?php if ($this->session->level == 1) { ?>
            <li class="c-sidebar-nav-title">Setting</li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="<?php echo base_url('user') ?>">
                    <i class="fa fa-user c-sidebar-nav-icon"></i> User
                </a>
            </li>

            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="<?php echo base_url('group') ?>">
                    <i class="fa fa-users c-sidebar-nav-icon"></i> Group User
                </a>
            </li>
        <?PHP } ?>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>