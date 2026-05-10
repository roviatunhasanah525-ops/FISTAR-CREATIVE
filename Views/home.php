<?php $menu = $menu ?? []; ?>

<!-- HERO SECTION -->
<section class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
        <div class="badge">⭐ Desain Profesional Mulai Rp7.000</div>
        <h1>Fistar <span class="highlight">Creative</span></h1>
        <p>Bantu wujudkan ide kreatifmu menjadi desain yang keren, cepat, dan terjangkau.<br>Khusus untuk UMKM & kreator!</p>
        <div class="hero-btn">
            <a href="https://wa.me/6281249524077" class="btn-primary" target="_blank">
                <i class="fab fa-whatsapp"></i> Konsultasi Gratis
            </a>
            <a href="#menu" class="btn-secondary">Lihat Portfolio →</a>
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

<!-- MENU / LAYANAN SECTION -->
<section class="menu" id="menu">
    <div class="container">
        <span class="section-tag">Price List</span>
        <h2>Pilihan <span class="highlight">Layanan Desain</span></h2>
        <p class="section-subtitle">Desain profesional dengan harga yang ramah di kantong UMKM</p>
        
        <div class="grid">
            <?php foreach($menu as $m): ?>
            <div class="card">
                <div class="card-img">
                    <img src="assets/images/<?= $m['gambar']; ?>" alt="<?= $m['nama']; ?>">
                    <div class="card-category"><?= $m['kategori']; ?></div>
                </div>
                <div class="card-body">
                    <h3><?= $m['nama']; ?></h3>
                    <div class="price">Rp <?= number_format($m['harga'], 0, ',', '.'); ?></div>
                    <a href="https://wa.me/6281249524077?text=Halo%20Fistar%20Creative%2C%20saya%20tertarik%20dengan%20layanan%20<?= urlencode($m['nama']); ?>" class="card-btn" target="_blank">
                        <i class="fab fa-whatsapp"></i> Pesan Sekarang
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- BOOKING / ORDER SECTION -->
<section class="booking" id="booking">
    <div class="booking-container">
        <div class="booking-text">
            <span class="section-tag light">Pesan Sekarang</span>
            <h2>Mau Desain Keren <span class="highlight">Tanpa Ribet</span>?</h2>
            <p>Isi form di bawah, tim Fistar Creative akan segera menghubungi kamu untuk konsultasi desain GRATIS!</p>
            <div class="contact-highlight">
                <i class="fab fa-whatsapp"></i> Atau langsung hubungi: <strong>0812-4952-4077</strong>
            </div>
        </div>
        <form class="booking-form" action="https://wa.me/6281249524077" method="get" target="_blank">
            <input type="text" name="text" placeholder="Nama Lengkap" required>
            <input type="email" placeholder="Email (opsional)">
            <input type="tel" placeholder="Nomor WhatsApp" required>
            <select required>
                <option value="">Pilih Layanan</option>
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
    </div>
</section>