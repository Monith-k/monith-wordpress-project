# Monith WordPress Project 🚀

This repository contains my custom-built **WordPress Theme** and **WordPress Plugin** developed as part of my preparation for rtCamp.

It demonstrates my understanding of:
- WordPress theme structure
- WordPress hooks
- PHP templating
- Plugin development
- Frontend styling via enqueued CSS

---

## 📂 Project Structure


---

## 🎨 Custom Theme – `monith-theme`

Features:
- Custom header and footer
- Displays latest WordPress posts
- Uses the WordPress Loop
- Enqueues CSS properly using `wp_enqueue_scripts`
- Clean layout with custom styling

---

## 🔌 Custom Plugin – `monith-footer-plugin`

This plugin adds a custom message to the footer of the site using the WordPress hook system.

It uses:
```php
add_action('wp_footer', 'monith_footer_message');