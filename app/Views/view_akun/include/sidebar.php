<?php $request = \Config\Services::request();
$request->uri->setSilent(); ?>
<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a>
                    <img src="<?php echo base_url(); ?>/bumbu/assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a class="nav-link"> SMABA </a>
            </li>
            <!-- <li class="nav-item toggle-sidebar">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left sidebarCollapse">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
            </li>-->
        </ul>
        <div class="profile-info">
            <figure class="user-cover-image" style=" height: 180px; background: url(<?php echo base_url(); ?>/perpustakaan_file/background_foto/<?= $user_info['background_image']; ?>) center center/cover no-repeat;"></figure>
            <div class="user-info">
                <img src="<?= $user_info['image']; ?>" alt="avatar">
                <!--   <img src="<?php echo base_url(); ?>/perpustakaan_file/foto/<?= $user_info['image']; ?>" alt="avatar">-->

                <?php if ($link_data == 1) { ?>
                    <h6 class=""><?= $info_pribadi['nama']; ?></h6>
                <?php } else { ?>
                    <h6 class=""><?= $user_info['nama_lengkap']; ?></h6>
                <?php } ?>
                <?php if ($user_info['user_role_id'] == 1 or 2) { ?>
                    <?php if ($link_data == 1) { ?>
                        <p class=""><?= $info_pribadi['jenis_ptk']; ?></p>
                    <?php } else { ?>
                        <p class=""><?= $user_info['nama_role']; ?></p>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="<?php echo base_url(); ?>/akun" <?= (current_url() == base_url() . "/akun" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                    <div class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="menu ">
                <a href="<?php echo base_url(); ?>/akun/profile" <?= ($request->uri->getSegment(2) == "profile" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                    <div class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                        <span>My Profile</span>
                    </div>
                </a>
            </li>
            <?php if ($user_info["user_role_id"] == 1 or $user_info["user_role_id"] == 2) { ?>
                <li class="menu ">
                    <a href="<?php echo base_url(); ?>/akun/data_pribadi" <?= ($request->uri->getSegment(2) == "data_pribadi" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                        <div class="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            <?php if ($user_info["user_role_id"] == 1) { ?>

                                <span>Data GTK </span>
                            <?php } ?>
                            <?php if ($user_info["user_role_id"] == 2) { ?>
                                <span>Data PTK </span>
                            <?php } ?>

                        </div>
                    </a>
                </li>
            <?php } ?>
            <?php if ($user_info["user_role_id"] == 3) { ?>
                <li class="menu ">
                    <a href="<?php echo base_url(); ?>/akun/data_pribadi_siswa" <?= ($request->uri->getSegment(2) == "data_pribadi_siswa" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                        <div class="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                            <span>Profil Siswa</span>
                        </div>
                    </a>
                </li>
            <?php } ?>

            <?php if ($user_info["is_admin"] == 1) { ?>
                <!----------------------------------- ADMIN ----------------------------------------------------->
                <li class="menu menu-heading">
                    <div class="heading"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg><span class="head_menu">ADMIN MENU</span></div>
                </li>
                <li class="menu">
                    <a href="<?php echo base_url(); ?>/akun/admin/users" <?= ($request->uri->getSegment(3) == "users" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                        <div class="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trello">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <rect x="7" y="7" width="3" height="9"></rect>
                                <rect x="14" y="7" width="3" height="5"></rect>
                            </svg>
                            <span>Daftar Pengguna</span>
                        </div>
                    </a>
                </li>
                <li class="menu">
                    <a href="<?php echo base_url(); ?>/akun/admin/importsiswa" <?= ($request->uri->getSegment(3) == "importsiswa" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                        <div class="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                                <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span>Import Data Siswa</span>
                        </div>
                    </a>
                </li>
                <li class="menu">
                    <a href="<?php echo base_url(); ?>/akun/admin/importgtkptk" <?= ($request->uri->getSegment(3) == "importgtkptk" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                        <div class="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                                <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span>Import Data GTK/PTK</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="<?php echo base_url(); ?>/akun/admin/tahunpelajaran" <?= ($request->uri->getSegment(3) == "tahunpelajaran" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                        <div class="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span>Tahun Pelajaran</span>
                        </div>
                    </a>
                </li>
            <?php } ?>
            <?php if ($user_info["is_admin"] == 1 or  $user_info["is_admin_kepegawaian"] == 1) { ?>

                <li class="menu menu-heading">
                    <div class="heading"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg><span class="head_menu">TU MENU</span></div>
                </li>
                <li class="menu <?= ($request->uri->getSegment(3) == "data_pegawai" ? 'active' : ''); ?>">
                    <a href="#data_pegawai" data-toggle="collapse" <?= ($request->uri->getSegment(3) == "data_pegawai" ? 'aria-expanded="true"' : ''); ?>class="dropdown-toggle">
                        <div class="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive">
                                <polyline points="21 8 21 21 3 21 3 8"></polyline>
                                <rect x="1" y="3" width="22" height="5"></rect>
                                <line x1="10" y1="12" x2="14" y2="12"></line>
                            </svg>
                            <span>Data Pegawai</span>
                        </div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?= ($request->uri->getSegment(3) == "data_pegawai" ? 'show"  ' : ''); ?>" id="data_pegawai">
                        <li <?= ($request->uri->getSegment(4) == "gtk" ? 'class="active" ' : ''); ?>>
                            <a href="<?php echo base_url(); ?>/akun/admin/data_pegawai/gtk">Data GTK </a>
                        </li>
                        <li <?= ($request->uri->getSegment(4) == "ptk" ? 'class="active" ' : ''); ?>>
                            <a href="<?php echo base_url(); ?>/akun/admin/data_pegawai/ptk">Data PTK </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>

            <!----------------------------------- END ADMIN ----------------------------------------------------->

            <?php if ($user_info["user_role_id"] == 1 or $user_info["user_role_id"] == 2) { ?>
                <?php if ($link_data == 1) { ?>
                    <!----------------------------------- APLIKASI ----------------------------------------------------->
                    <li class="menu menu-heading">
                        <div class="heading"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg><span class="head_menu">APLIKASI</span></div>
                    </li>

                    <li class="menu">
                        <a href="<?php echo base_url(); ?>/akun/app/siswa" <?= ($request->uri->getSegment(3) == "siswa" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                            <div class="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>Data Siswa</span>
                            </div>

                        </a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo base_url(); ?>/akun/app/rombel" <?= ($request->uri->getSegment(3) == "rombel" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                            <div class="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                <span>Data Rombel</span>
                            </div>

                        </a>
                    </li>
                    <?php if ($user_info["is_sync"] == 1) { ?>

                        <li class="menu <?= ($request->uri->getSegment(3) == "arsipsurat" ? 'active' : ''); ?>">
                            <a href="#arsip_surat" data-toggle="collapse" <?= ($request->uri->getSegment(3) == "arsipsurat" ? 'aria-expanded="true"' : ''); ?>class="dropdown-toggle">
                                <div class="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                                        <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                        <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                    </svg>
                                    <span>Aplikasi Surat</span>
                                </div>
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled <?= ($request->uri->getSegment(3) == "arsipsurat" ? 'show"  ' : ''); ?>" id="arsip_surat">
                                <li <?= ($request->uri->getSegment(4) == "surat_keluar" ? 'class="active" ' : ''); ?>>
                                    <a href="<?php echo base_url(); ?>/akun/app/arsipsurat/surat_keluar"> Surat Keluar </a>
                                </li>
                                <li <?= ($request->uri->getSegment(4) == "surat_keputusan" ? 'class="active" ' : ''); ?>>
                                    <a href="<?php echo base_url(); ?>/akun/app/arsipsurat/surat_keputusan"> Surat Keputusan </a>
                                </li>
                                <li <?= ($request->uri->getSegment(4) == "surat_eskul" ? 'class="active" ' : ''); ?>>
                                    <a href="<?php echo base_url(); ?>/akun/app/arsipsurat/surat_eskul"> Surat Eskul </a>
                                </li>
                            </ul>
                        </li>
                    <?php } ?>
                <?php } ?>

            <?php } ?>
            <li class="menu">
                <a href="<?php echo base_url(); ?>/akun/help" <?= ($request->uri->getSegment(3) == "help" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                    <div class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                        </svg>
                        <span>R.Absen PNS <font style="color: cornflowerblue;" <i class="fa fa-fighter-jet" aria-hidden="true"></i>(belum)</font></span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="<?php echo base_url(); ?>/akun/help" <?= ($request->uri->getSegment(3) == "help" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                    <div class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                        </svg>
                        <span>Buku Induk <font style="color: cornflowerblue;" <i class="fa fa-fighter-jet" aria-hidden="true"></i>(belum)</font></span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="<?php echo base_url(); ?>/akun/help" <?= ($request->uri->getSegment(3) == "help" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                    <div class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                        </svg>
                        <span>Rekap Rapot <font style="color: cornflowerblue;" <i class="fa fa-fighter-jet" aria-hidden="true"></i>(belum)</font></span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="<?php echo base_url(); ?>/akun/help" <?= ($request->uri->getSegment(3) == "help" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                    <div class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                        </svg>
                        <span>Perpus <font style="color: cornflowerblue;" <i class="fa fa-fighter-jet" aria-hidden="true"></i>(belum)</font></span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="<?php echo base_url(); ?>/akun/help" <?= ($request->uri->getSegment(3) == "help" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                    <div class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                        </svg>
                        <span>Front End <font style="color: cornflowerblue;" <i class="fa fa-fighter-jet" aria-hidden="true"></i>(belum)</font></span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="<?php echo base_url(); ?>/akun/help" <?= ($request->uri->getSegment(3) == "help" ? 'aria-expanded="true" ' : ''); ?> class="dropdown-toggle">
                    <div class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                        </svg>
                        <span>Bantuan <font style="color: cornflowerblue;" <i class="fa fa-fighter-jet" aria-hidden="true"></i>(belum)</font></span>
                    </div>
                </a>
            </li>

        </ul>

    </nav>

</div>