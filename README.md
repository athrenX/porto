# Portfolio PHP - Minimalis & Ringan

Portfolio website sederhana menggunakan **PHP, HTML, CSS, dan Tailwind CSS** yang bisa di-hosting di hosting biasa (cPanel, shared hosting, VPS, dll).

## 🚀 Fitur

- ✅ **Responsive Design** - Tampil sempurna di semua perangkat
- ✅ **Minimalis & Cepat** - Tidak menggunakan framework berat
- ✅ **Mudah di-edit** - Data tersimpan di file `data.php`
- ✅ **SEO Friendly** - Struktur HTML yang baik
- ✅ **Animasi Smooth** - Transisi dan animasi yang halus
- ✅ **Compatible** - Bisa di-hosting di mana saja

## 📁 Struktur File

```
php-portfolio/
├── index.php       # Halaman utama
├── data.php        # Data portfolio (edit di sini)
├── styles.css      # Custom CSS
└── .htaccess       # Konfigurasi server
```

## 🔧 Cara Install

### 1. Upload ke Hosting

- Upload semua file ke folder `public_html` atau `www` di hosting Anda
- Pastikan file `.htaccess` ikut terupload

### 2. Edit Data Anda

Buka file `data.php` dan edit bagian berikut:

```php
// Informasi Personal
$personalInfo = [
    'name' => 'Nama Anda',
    'role' => 'Posisi/Role Anda',
    'bio' => 'Deskripsi singkat tentang Anda...',
    'email' => 'email@anda.com',
    'github' => 'https://github.com/username',
    'linkedin' => 'https://linkedin.com/in/username',
];
```

### 3. Tambah/Edit Project

```php
$projects = [
    [
        'title' => 'Nama Project',
        'description' => 'Deskripsi project...',
        'image' => 'url-gambar.jpg', // atau gunakan placeholder
        'techStack' => ['PHP', 'MySQL', 'JavaScript'],
        'github' => 'https://github.com/username/repo',
        'live' => 'https://demo.com',
    ],
    // Tambah project lain...
];
```

### 4. Tambah/Edit Experience

```php
$experiences = [
    [
        'role' => 'Posisi',
        'company' => 'Nama Perusahaan',
        'startDate' => 'Jan 2023',
        'endDate' => 'Dec 2023',
        'current' => false, // true jika masih bekerja
        'responsibilities' => [
            'Tanggung jawab 1',
            'Tanggung jawab 2',
        ],
    ],
];
```

### 5. Tambah/Edit Sertifikat

```php
$certificates = [
    [
        'name' => 'Nama Sertifikat',
        'issuer' => 'Penerbit',
        'date' => 'Jan 2024',
        'credentialId' => 'ID-12345',
        'credentialUrl' => 'https://verify.com',
    ],
];
```

## 🌐 Hosting Rekomendasi

Portfolio ini compatible dengan:

- ✅ **Niagahoster** - Hosting lokal Indonesia
- ✅ **Hostinger** - Murah dan cepat
- ✅ **IDCloudHost** - Cloud hosting Indonesia
- ✅ **DomaiNesia** - Hosting unlimited
- ✅ **cPanel Hosting** - Semua hosting dengan cPanel
- ✅ **VPS** - Ubuntu, CentOS, dll

## 📋 Requirements

- PHP 7.0 atau lebih tinggi
- Web server (Apache/Nginx)
- Tidak perlu database

## 🎨 Kustomisasi Warna

Edit file `index.php` untuk mengganti warna tema:

```html
<!-- Ganti warna dari blue ke warna lain -->
bg-blue-500 -> bg-purple-500
text-blue-400 -> text-purple-400
```

Warna Tailwind yang tersedia:
- `blue`, `purple`, `green`, `red`, `yellow`, `pink`, `indigo`, `teal`

## 📸 Gambar Project

Untuk gambar project, Anda bisa:

1. **Upload gambar** ke folder `/images` dan gunakan path relatif:
   ```php
   'image' => 'images/project1.jpg'
   ```

2. **Gunakan CDN** seperti:
   - Imgur: `https://i.imgur.com/xxxxx.jpg`
   - Cloudinary
   - imgBB

3. **Gunakan placeholder** (sudah include di template)

## 🔒 Keamanan

File `.htaccess` sudah include:
- ✅ Protection untuk file sensitif
- ✅ Security headers
- ✅ Disable directory listing
- ✅ Force HTTPS (optional)

## ⚡ Optimasi

- ✅ Gzip compression enabled
- ✅ Browser caching
- ✅ Minified CSS dengan Tailwind CDN
- ✅ Font Awesome dari CDN
- ✅ Lazy loading untuk gambar

## 🆘 Troubleshooting

### Error 500
- Cek file `.htaccess`, comment bagian yang error
- Pastikan PHP version minimal 7.0

### Styling tidak muncul
- Pastikan koneksi internet untuk load Tailwind CDN
- Cek file `styles.css` sudah terupload

### .htaccess tidak bekerja
- Pastikan mod_rewrite aktif di hosting
- Hubungi support hosting jika perlu

## 📝 Lisensi

Free to use - Edit sesuka hati untuk portfolio pribadi Anda!

## 💡 Tips

1. **Gunakan gambar dengan resolusi tepat** (600x400px untuk project)
2. **Compress gambar** sebelum upload (gunakan TinyPNG)
3. **Update konten secara berkala**
4. **Tambahkan Google Analytics** untuk tracking visitor
5. **Setup email** agar contact form berfungsi

## 🚀 Deploy ke Hosting

### Via cPanel File Manager:
1. Login ke cPanel
2. Buka File Manager
3. Upload semua file ke `public_html`
4. Extract (jika zip)
5. Done!

### Via FTP:
1. Gunakan FileZilla
2. Connect ke hosting
3. Upload ke folder `public_html`
4. Done!

---

**Dibuat dengan ❤️ menggunakan PHP & Tailwind CSS**

Selamat menggunakan! 🎉
