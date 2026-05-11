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

<!-- PORTFOLIO SECTION (dulu menu, sekarang ganti jadi portofolio) -->
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

<!-- PRICE & BOOKING SECTION (harga dan form pemesanan digabung) -->
<section class="booking" id="booking">
    <div class="booking-container">
        <div class="booking-text">
            <span class="section-tag light">Harga & Pemesanan</span>
            <h2>Mau Desain Keren <span class="highlight">Tanpa Ribet</span>?</h2>
            <p>Pilih layanan yang kamu butuhkan, isi form, dan tim kami akan segera menghubungi kamu!</p>
        </div>

        <!-- TABEL HARGA SEDERHANA -->
        <div class="price-table">
            <h3>💰 Daftar Harga</h3>
            <table>
                <tr>
                    <th>Jenis Desain</th>
                    <th>Harga Mulai</th>
                </tr>
                <tr><td>Logotype</td><td>Rp 7.000</td></tr>
                <tr><td>Logo Vector/Maskot</td><td>Rp 15.000</td></tr>
                <tr><td>Logo Kombinasi</td><td>Rp 10.000</td></tr>
                <tr><td>Banner/Daftar Menu</td><td>Rp 10.000</td></tr>
                <tr><td>Poster</td><td>Rp 10.000</td></tr>
                <tr><td>ID Card (3 Item)</td><td>Rp 10.000</td></tr>
                <tr><td>Sablon</td><td>Rp 12.000</td></tr>
                <tr><td>Undangan</td><td>Rp 12.000</td></tr>
            </table>
            <p class="price-note">⭐ Harga sudah termasuk revisi 2x + file siap cetak</p>
        </div>

        <!-- FORM PEMESANAN -->
        <form class="booking-form" action="https://wa.me/6281249524077" method="get" target="_blank">
            <h3>📋 Form Pemesanan</h3>
            <input type="text" name="text" placeholder="Nama Lengkap" required>
            <input type="email" placeholder="Email (opsional)">
            <input type="tel" placeholder="Nomor WhatsApp" required>
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
            <textarea placeholder="Deskripsi singkat tentang desain yang diinginkan..." rows="3"></textarea>
            <button type="submit"><i class="fab fa-whatsapp"></i> Kirim ke WhatsApp</button>
        </form>

        <div class="contact-highlight">
            <i class="fab fa-whatsapp"></i> Atau langsung hubungi: <strong>0812-4952-4077</strong>
        </div>
    </div>
</section>