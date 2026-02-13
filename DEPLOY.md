# 🚀 Deploy ke Vercel

## Cara Deploy Portfolio ke Vercel

### Metode 1: Deploy via GitHub (Recommended)

1. **Push ke GitHub Repository**
   ```bash
   git init
   git add .
   git commit -m "Initial commit"
   git branch -M main
   git remote add origin https://github.com/USERNAME/REPO-NAME.git
   git push -u origin main
   ```

2. **Import ke Vercel**
   - Buka [vercel.com](https://vercel.com)
   - Login dengan GitHub
   - Klik "Add New" → "Project"
   - Import repository Anda
   - Klik "Deploy"
   - Selesai! ✨

### Metode 2: Deploy via Vercel CLI

1. **Install Vercel CLI**
   ```bash
   npm install -g vercel
   ```

2. **Login ke Vercel**
   ```bash
   vercel login
   ```

3. **Deploy**
   ```bash
   cd php-portfolio
   vercel
   ```
   
   Ikuti prompt:
   - Set up and deploy? **Y**
   - Which scope? Pilih account Anda
   - Link to existing project? **N**
   - Project name? (opsional)
   - In which directory? **.**
   - Deploy? **Y**

4. **Production Deploy**
   ```bash
   vercel --prod
   ```

### Metode 3: Deploy via Drag & Drop

1. Buka [vercel.com/new](https://vercel.com/new)
2. Pilih "Browse"
3. Upload folder `php-portfolio`
4. Klik "Deploy"
5. Selesai!

## 📝 Edit Data Portfolio

Edit file `data.js` untuk mengubah konten:

```javascript
// Informasi Personal
const personalInfo = {
    name: 'Nama Anda',
    role: 'Posisi Anda',
    bio: 'Bio Anda...',
    email: 'email@anda.com',
    github: 'https://github.com/username',
    linkedin: 'https://linkedin.com/in/username',
};
```

## 🔄 Update Website

### Via GitHub (Auto-deploy)
1. Edit file di repository
2. Commit dan push
3. Vercel otomatis deploy! 🎉

### Via Vercel CLI
```bash
vercel --prod
```

## 🎨 Custom Domain

1. Buka project di Vercel Dashboard
2. Settings → Domains
3. Add domain Anda
4. Update DNS di registrar domain

## ⚙️ Environment Variables (Opsional)

Jika butuh environment variables:

1. Vercel Dashboard → Project → Settings → Environment Variables
2. Add variable baru
3. Redeploy

## 📊 Analytics

Aktifkan Vercel Analytics:

1. Vercel Dashboard → Project → Analytics
2. Enable Analytics
3. Lihat visitor statistics

## 🔧 Troubleshooting

### Build Error
- Pastikan semua file ada
- Check `vercel.json` configuration
- Lihat build logs di Vercel Dashboard

### 404 Error
- Pastikan `index.html` ada di root
- Check routing di `vercel.json`

### CSS/JS tidak load
- Check path file (case-sensitive)
- Pastikan CDN accessible
- Clear browser cache

## 📱 Preview Deployment

Setiap push ke branch akan create preview:
- Main branch → Production
- Other branches → Preview URL

## 🎯 Tips

1. **Gunakan Git** untuk version control
2. **Test locally** sebelum deploy:
   ```bash
   npx serve .
   ```
3. **Check mobile** di Vercel preview
4. **Add favicon** untuk professional look
5. **Optimize images** sebelum upload

## 📞 Support

Butuh bantuan?
- [Vercel Docs](https://vercel.com/docs)
- [Vercel Discord](https://vercel.com/discord)
- [GitHub Issues](https://github.com/vercel/vercel/issues)

---

**Happy Deploying! 🚀**

URL Anda akan jadi: `https://your-portfolio.vercel.app`
