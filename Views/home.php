<?php $menu = $menu ?? []; ?>

<!-- HERO SECTION -->
<section class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
        <div class="badge">⭐ Desain Profesional untuk UMKM</div>
        <h1>Fistar <span class="highlight">Creative</span></h1>
        <p>Bantu wujudkan ide kreatifmu menjadi desain yang keren, cepat, dan terjangkau.<br>Khusus untuk UMKM & kreator!</p>
        <div class="hero-btn">
            <a href="#portfolio" class="btn-primary">Lihat Portofolio</a>
            <a href="#booking" class="btn-secondary">Cek Harga & Pesan →</a>
        </div>
        <div class="stats">
            <div class="stat-item">
                <h3>735+</h3>
                <p>Pengikut</p>
            </div>
            <div class="stat-item">
                <h3>617+</h3>
                <p>Mengikuti</p>
            </div>
            <div class="stat-item">
                <h3>100+</h3>
                <p>Klien Puas</p>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section class="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-text">
                <span class="section-tag">Tentang Kami</span>
                <h2>Apa Itu <span class="highlight">Jasa Desain Grafis</span>?</h2>
                <p>Jasa desain grafis adalah layanan yang menyediakan berbagai solusi visual untuk kebutuhan branding, promosi, hingga komunikasi digital. Fistar Creative hadir untuk membantu UMKM dan kreator tampil beda dengan desain yang estetik, modern, dan fungsional.</p>
                <p><strong>Desain bukan hanya tampilan, tapi juga identitas bisnismu.</strong></p>
                <div class="about-features">
                    <span><i class="fas fa-check-circle"></i> Cepat & Rapi</span>
                    <span><i class="fas fa-check-circle"></i> Harga Terjangkau</span>
                    <span><i class="fas fa-check-circle"></i> Revisi 2x</span>
                    <span><i class="fas fa-check-circle"></i> File Siap Cetak</span>
                </div>
            </div>
            <div class="about-image">
                <img src="assets/images/about-illustration.png" alt="Fistar Creative">
            </div>
        </div>
    </div>
</section>

<!-- PORTFOLIO SECTION -->
<section class="portfolio" id="portfolio">
    <div class="container">
        <span class="section-tag">Portofolio</span>
        <h2>Hasil Karya <span class="highlight">Fistar Creative</span></h2>
        <p class="section-subtitle">Beberapa contoh desain yang sudah kami buat untuk klien</p>
        
        <div class="grid">
            <?php foreach($menu as $item): ?>
            <div class="card">
                <div class="card-img">
                    <img src="assets/images/<?= $item['gambar']; ?>" alt="<?= $item['nama']; ?>">
                    <div class="card-category"><?= $item['kategori']; ?></div>
                </div>
                <div class="card-body">
                    <h3><?= $item['nama']; ?></h3>
                    <p class="card-desc"><?= $item['deskripsi']; ?></p>
                    <a href="#booking" class="card-btn">
                        <i class="fas fa-palette"></i> Request Desain
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PRICE & BOOKING SECTION - MODERN -->
<section class="booking" id="booking">
    <div class="booking-container">
        <div class="booking-text">
            <span class="section-tag light">Harga & Pemesanan</span>
            <h2>Mau Desain Keren <span class="highlight">Tanpa Ribet</span>?</h2>
            <p>Pilih layanan yang kamu butuhkan, isi form, dan tim kami akan segera menghubungi kamu!</p>
        </div>

        <!-- TABEL HARGA MODERN -->
        <div class="price-table">
            <h3>💰 Daftar Harga Desain</h3>
            <div class="price-grid">
                <div class="price-item">
                    <span class="price-name">Logotype</span>
                    <span class="price-value">Rp 7.000</span>
                </div>
                <div class="price-item">
                    <span class="price-name">Logo Vector/Maskot</span>
                    <span class="price-value">Rp 15.000</span>
                </div>
                <div class="price-item">
                    <span class="price-name">Logo Kombinasi</span>
                    <span class="price-value">Rp 10.000</span>
                </div>
                <div class="price-item">
                    <span class="price-name">Banner/Daftar Menu</span>
                    <span class="price-value">Rp 10.000</span>
                </div>
                <div class="price-item">
                    <span class="price-name">Poster</span>
                    <span class="price-value">Rp 10.000</span>
                </div>
                <div class="price-item">
                    <span class="price-name">ID Card (3 Item)</span>
                    <span class="price-value">Rp 10.000</span>
                </div>
                <div class="price-item">
                    <span class="price-name">Sablon</span>
                    <span class="price-value">Rp 12.000</span>
                </div>
                <div class="price-item">
                    <span class="price-name">Undangan</span>
                    <span class="price-value">Rp 12.000</span>
                </div>
            </div>
            <p class="price-note">⭐ Harga sudah termasuk revisi 2x + file siap cetak (JPG, PNG, CDR, AI)</p>
        </div>

        <!-- FORM PEMESANAN MODERN -->
        <div class="booking-form-wrapper">
            <h3><i class="fas fa-pen-ruler"></i> Form Pemesanan</h3>
            <form class="booking-form" action="https://wa.me/6281249524077" method="get" target="_blank">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="text" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email (opsional)">
                </div>
                <div class="form-group">
                    <i class="fab fa-whatsapp"></i>
                    <input type="tel" placeholder="Nomor WhatsApp" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-palette"></i>
                    <select required>
                        <option value="">Pilih Jenis Desain</option>
                        <option>Logotype</option>
                        <option>Logo Vector/Maskot</option>
                        <option>Logo Kombinasi</option>
                        <option>Banner/Daftar Menu</option>
                        <option>Poster</option>
                        <option>ID Card</option>
                        <option>Sablon</option>
                        <option>Undangan</option>
                        <option>Custom Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <i class="fas fa-comment"></i>
                    <textarea placeholder="Deskripsi singkat tentang desain yang diinginkan..." rows="3"></textarea>
                </div>
                <button type="submit">
                    <i class="fab fa-whatsapp"></i> Kirim ke WhatsApp
                </button>
            </form>
        </div>

        <!-- CONTACT HIGHLIGHT - DIPERBAIKI -->
        <div class="contact-highlight">
            <div class="contact-icon">
                <i class="fab fa-whatsapp"></i>
            </div>
            <div class="contact-text">
                <span>Atau langsung hubungi:</span>
                <strong>0812-4952-4077</strong>
            </div>
            <a href="https://wa.me/6281249524077" class="contact-btn" target="_blank">
                Chat Sekarang <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>