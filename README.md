# 🍫🐻 Chocolate Covered Gummy Bears - WordPress Theme

A custom WordPress theme I built from scratch for showcasing the WordPress template hierarchy, PHP structure, and enqueuing.
Includes a responsive navigation menu with a hamburger toggle, styled with custom colors and typography.

---

## 🚀 Features
- Fully responsive layout
- Mobile-friendly hamburger navigation
- Fixed header with smooth scrolling section highlights
- Customizable via WordPress Dashboard
- Clean, modern design inspired by chocolate gummy bears

---

## 📂 File Structure
```
gummies/
├── assets/
│   ├── css/          # Theme styles
│   ├── js/           # Main JavaScript (menu, scroll, etc.)
│   └── images/       # Theme images
│
├── footer.php
├── functions.php
├── header.php
├── index.php
├── style.css         # Theme stylesheet with WP theme metadata
└── README.md
```

---

## ⚙️ Installation
1. Clone or download this repository.
2. Copy the folder into your WordPress themes directory: /wp-content/themes/chocogummybears/
3. Log into your WordPress Admin Dashboard.
4. Go to **Appearance → Themes** and activate **Chocolate Gummy Bears**.
5. Assign your **Primary Menu** under **Appearance → Menus**.

---

## 📝 Notes
- Requires **WordPress 5.0+**
- Tested with **PHP 8+**
- Make sure your theme has:
  - `<?php wp_head(); ?>` inside the `<head>` of your header.php
  - `<?php wp_footer(); ?>` before the closing `</body>` in your footer.php  
  (so scripts and styles load properly)
- This theme was tested locally using **XAMPP**

---

## 👀🩷 Preview
![Theme Screenshot](assets/images/preview-localhost-chocolate-gummy-bears-2025-09-07.png)
