 <!-- Sidebar -->
 <ul class="sidebar navbar-nav">
        <li class="nav-item active  <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
          <a class="nav-link" href="<?php echo site_url('admin')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
          </a>
        </li>
        <li class="nav-item dropdown  <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Pasien</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('user/datapasien')?>">Data Pasien</a>
            <a class="dropdown-item" href="<?php echo site_url('user/userbayar/bayar')?>">Payment</a>
            <a class="dropdown-item" href="<?php echo site_url('user/userobat/obat')?>">Tebus Obat</a>
            <a class="dropdown-item" href="<?php echo site_url('user/userriwayat')?>">Riwayat Penyakit </a>
          </div>
        </li>
      </ul>