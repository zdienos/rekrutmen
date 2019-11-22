<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>DASHBOARD</span> 
            <i class="zmdi zmdi-more"></i>
        </li>
        <li >
            <a class="<?php if($this->uri->segment('1')=='rekrutmen') echo 'active'?>" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="icon-user mr-20"></i><span class="right-nav-text">Data Pelamar</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="dashboard_dr" class="collapse collapse-level-1">
                <li>
                    <a class="<?php if($this->uri->segment('2')=='diri') echo 'active-page'?>" href="<?=base_url('rekrutmen/diri')?>">Identitas Diri</a>
                </li>
                <li>
                    <a class="<?php if($this->uri->segment('2')=='keluarga') echo 'active-page'?>" href="<?=base_url('rekrutmen/keluarga')?>">Data Keluarga</a>
                </li>
                <li>
                    <a class="<?php if($this->uri->segment('2')=='pendidikan') echo 'active-page'?>" href="<?=base_url('rekrutmen/pendidikan')?>">Riwayat Pendidikan</a>
                </li>
                <li>
                    <a class="<?php if($this->uri->segment('2')=='pekerjaan') echo 'active-page'?>" href="<?=base_url('rekrutmen/pekerjaan')?>">Riwayat Pekerjaan</a>
                </li>
                <li>
                    <a class="<?php if($this->uri->segment('2')=='dokumen') echo 'active-page'?>" href="<?=base_url('rekrutmen/dokumen')?>">Upload Dokumen</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i>
            <span class="right-nav-text">Profil</span></div><div class="clearfix"></div></a>
        </li>
        <li>
            <a href="#"><div class="pull-left"><i class="zmdi zmdi-power mr-20"></i>
            <span class="right-nav-text">LogOut</span></div><div class="clearfix"></div></a>
        </li>
                            
        
        
    </ul>
</div>
<!-- /Left Sidebar Menu -->
							