<!-- HEADER: BEGIN -->
<div align="center">

<img src="https://github.com/HVzz24/MediaVerse/blob/main/asset/images/logo_only.png" alt="MediaVerse Logo" height="120" />

# 📰 MediaVerse
**A Modern News Portal built with PHP CodeIgniter 3**

[![GitHub release](https://img.shields.io/github/v/release/HVzz24/MediaVerse?label=Release&color=brightgreen&style=for-the-badge)](https://github.com/HVzz24/MediaVerse/releases)
[![GitHub repo size](https://img.shields.io/github/repo-size/HVzz24/MediaVerse?label=Repo%20Size&style=for-the-badge)](https://github.com/HVzz24/MediaVerse)
[![GitHub contributors](https://img.shields.io/github/contributors/HVzz24/MediaVerse?label=Contributors&style=for-the-badge)](https://github.com/HVzz24/MediaVerse/graphs/contributors)
[![GitHub last commit](https://img.shields.io/github/last-commit/HVzz24/MediaVerse?label=Last%20Commit&style=for-the-badge)](https://github.com/HVzz24/MediaVerse/commits/main)
[![GitHub stars](https://img.shields.io/github/stars/HVzz24/MediaVerse?style=for-the-badge)](https://github.com/HVzz24/MediaVerse/stargazers)
[![GitHub license](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)](LICENSE)

</div>
<!-- HEADER: END -->



# MediaVerse

MediaVerse is a modern, fully-featured news portal platform built on PHP CodeIgniter 3, designed for performance, scalability, and flexibility. With a modular architecture, multi-template support, and a customizable theme system, MediaVerse enables developers and content teams to build dynamic, visually consistent online news platforms with ease.

It includes a comprehensive CMS that manages articles, categories, galleries, videos, pages, menus advertisements, comments, and interactive features. The built-in role-based admin panel, granular module permissions, and SEO-optimized routing system make MediaVerse suitable for professional production environments—from small editorial teams to large media organizations.

Whether need a clean newspaper layout, a modern magazine style, or a custom–built front-end, MediaVerse provides the tools and structure to build it efficiently.

---
<!-- TOC: BEGIN -->
* [📦 Installation](#installation)
    * [System Requirements](#system-requirements)
    * [Local Setup (XAMPP)](#local-setup-xampp)
    * [Database Import](#database-import)
    * [Configuration Files](#configuration-files)
    * [Shared Hosting](#shared-hosting)
    * [VPS / Cloud](#vps--cloud)
    * [XSS & CSRF Protection](#xss--csrf-protection)
    
* [🚀 Usage](#usage)
    * [Admin Dashboard](#admin-dashboard)
    * [Managing Articles](#managing-articles)
    * [Managing Categories](#managing-categories)
    * [Managing Albums & Gallery](#managing-albums--gallery)
* [⚙️ Features](#features)
    * [News Management](#news-management)
    * [SEO Friendly URLs](#seo-friendly-urls)
    * [Pagination](#pagination)
    * [Auto Image Handling](#auto-image-handling)
    * [RSS Generator](#rss-generator)
    * [Themes](#themes)
    * [Template Editing](#template-editing)
* [🗂 Directory Structure](#directory-structure)
* [🌟 Showcase](#showcase)
    * [Frontend Templates](#frontend-templates)
    * [Theme Color Variants](#theme-color-variants)
    * [Admin Dashboard](#admin-dashboard)
    * [News Management](#news-management-showcase)
    * [Video Management](#video-management-showcase)
    * [Photo Gallery & Albums](#photo-gallery)
    * [User Access Levels](#user-access-levels)
    * [Module Permission Controls](#module-permissions)
    * [System Modules Overview](#system-modules-overview)

<!-- TOC: END -->

<!-- Install section start -->
<h1 id="installation">📦 Installation</h1>

<h2 id="system-requirements">System Requirements</h2>
<ul>
    <li>PHP 7+</li>
    <li>MySQL 5.5 or higher</li>
    <li>OpenSSL extension (optional)</li>
    <li>intl extension</li>
    <li>Apache or Nginx server</li>
    <li>Composer (optional)</li>
</ul>

<h2 id="local-setup-xampp">Local Setup (XAMPP)</h2>
<ol>
    <li>Install XAMPP (PHP 7+ recommended).</li>
    <li>Copy the project into:<br>
        <code>C:\xampp\htdocs\MediaVerse</code>
    </li>
    <li>Start <strong>Apache</strong> and <strong>MySQL</strong>.</li>
    <li>Open the project in browser:<br>
        <code>http://localhost/MediaVerse/</code>
    </li>
</ol>

<h2 id="database-import">Database Import</h2>
<ol>
    <li>Open <strong>phpMyAdmin</strong>.</li>
    <li>Create a new database:<br>
        <code>mediaverse</code>
    </li>
    <li>Import the SQL dump:<br>
        <code>/database/mediaverse.sql</code>
    </li>
</ol>

<h2 id="configuration-files">Configuration Files</h2>

<h3>1. Base URL</h3>
<p><strong>File:</strong> <code>application/config/config.php</code></p>
<pre><code>$config['base_url'] = 'http://localhost/MediaVerse/';
</code></pre>

<h3>2. Database Credentials</h3>
<p><strong>File:</strong> <code>application/config/database.php</code></p>
<pre><code>'username' => 'root',
'password' => '',
'database' => 'mediaverse',
</code></pre>

<h3>3. Upload Settings</h3>
<p><strong>File:</strong> <code>application/config/config.php</code></p>
<pre><code>$config['upload_path'] = './asset/';
</code></pre>

<h2 id="shared-hosting">Shared Hosting</h2>
<ol>
    <li>Upload all project files to your hosting account.</li>
    <li>Import the SQL database via your hosting panel (cPanel/Plesk).</li>
    <li>Update the base URL, database credentials, and font path (see Troubleshooting).</li>
    <li>Ensure <strong>.htaccess</strong> is supported by your hosting.</li>
</ol>

<h2 id="vps--cloud">VPS / Cloud</h2>
<ul>
    <li>Install LAMP or LEMP stack.</li>
    <li>Clone/upload the project.</li>
    <li>Configure virtual host or Nginx server block.</li>
    <li>Ensure directory permissions for <code>/asset/</code> uploads.</li>
</ul>

<h2 id="xss--csrf-protection">XSS & CSRF Protection</h2>
<ul>
    <li>CodeIgniter’s built-in CSRF token is enabled in <code>config.php</code>.</li>
    <li>Input filtering prevents basic XSS vectors.</li>
    <li>Ensure <code>global_xss_filtering</code> remains enabled in production.</li>
</ul>

<hr>

<h2 id="troubleshooting">🛠 Troubleshooting</h2>

<h3>1. First-Time Admin Login</h3>
<p>Run the upgrade script once:</p>
<ul>
    <li>Online: <code>http://yourdomain.com/administrator/upgrade</code></li>
    <li>Localhost: <code>http://localhost/administrator/upgrade</code></li>
</ul>

<h3>2. Admin Menu Not Displaying</h3>
<p>
If the administrator menu appears blank, it is caused by missing JavaScript resources.<br>
The menu JavaScript is hosted online, so when using localhost, your computer must be connected to the internet.
</p>

<h3>3. Redirect to Home After Login (Localhost Only)</h3>
<p>Edit the file <code>XAMPP/php/php.ini</code> and find:</p>
<pre><code>session.auto_start = 0</code></pre>
<p>Change to:</p>
<pre><code>session.auto_start = 1</code></pre>
<p>Restart XAMPP (Apache & MySQL).</p>

<h3>4. Security Code / Font Not Loaded (Online Hosting)</h3>
<p>Update the font path in <code>config.php</code>:</p>
<pre><code>'font_path' => base_url().'asset/Tahoma.ttf';
</code></pre>

<!-- Install section end -->


<a name="Usage"></a>

## 🗂 Backend Menu Structure

### **1. Dashboard**
- Latest news  
- Pages  
- Agenda overview  
- User overview  
- Recent comments  
- Visitor analytics chart  

### **2. Website Configuration**
- Website identity  
- Menu builder  
- Page management  

### **3. News Management**
- News listing  
- Category & tag management  
- News comments  
- Comment filtering  
- Photo news  
- Photo galleries  

### **4. Video Management**
- Playlists  
- Videos  
- Tags  
- Comments  

### **5. Advertisement Management**
- Top banner ads  
- Bottom banner ads  
- Homepage ads  
- Sidebar ads  
- External link ads  

### **6. Theme & Template Settings**
- Template selection  
- Theme color selection  
- Logo settings  

### **7. Interactive Features**
- Agenda  
- Flash info  
- Polls  
- Download center  
- Contact information  
- Inbox messages  

### **8. User Administration**
- User accounts  
- Role management  
- Module permission controls  


## 🛠 Tech Stack

- **PHP 7+**  
- **CodeIgniter 3**  
- **MySQL**  
- **Bootstrap**  
- **jQuery**  
- **FontAwesome**  
- **Composer (optional)**  

---
# 🚀📘 Usage Guide

<!-- Admin Dashboard -->
<h3 id="admin-dashboard">Admin Dashboard</h3>
<p>
Access the administrator panel through:
</p>
<pre><code>http://localhost/MediaVerse/administrator
Username: admin
Password: admin
</code></pre>

<p>After logging in, you will see the main dashboard, which includes:</p>
<ul>
    <li>Latest published news</li>
    <li>Pages overview</li>
    <li>Agenda summary</li>
    <li>Recent comments</li>
    <li>User activity</li>
    <li>Visitor analytics chart</li>
</ul>

<hr>

<!-- Managing Articles -->
<h3 id="managing-articles">Managing Articles</h3>
<p>
To create or manage news articles:
</p>
<ol>
    <li>Navigate to <strong>News &gt; All News</strong>.</li>
    <li>Click <strong>Add New Article</strong> to create content.</li>
    <li>Fill in:
        <ul>
            <li>Title</li>
            <li>Category</li>
            <li>Tags</li>
            <li>Content (rich editor)</li>
            <li>SEO fields (meta title &amp; description)</li>
        </ul>
    </li>
    <li>Upload a cover image (JPG/PNG).</li>
    <li>Click <strong>Publish</strong> to make the article visible.</li>
</ol>

<p>Additional notes:</p>
<ul>
    <li>Slug is generated automatically but can be edited manually.</li>
    <li>Images are stored inside <code>/asset/foto_berita/</code>.</li>
    <li>Draft mode is available for unfinished articles.</li>
</ul>

<hr>

<!-- Managing Categories -->
<h3 id="managing-categories">Managing Categories</h3>
<p>
Categories organize the article structure across the website.
</p>

<ol>
    <li>Go to <strong>News &gt; Categories</strong>.</li>
    <li>Click <strong>Add Category</strong>.</li>
    <li>Fill in:
        <ul>
            <li>Category name</li>
            <li>Slug</li>
            <li>Parent category (optional, for subcategories)</li>
        </ul>
    </li>
    <li>Save changes.</li>
</ol>

<p>Notes:</p>
<ul>
    <li>Categories automatically appear on the frontend menu (if enabled).</li>
    <li>Deleting a category will not delete the articles inside it.</li>
</ul>

<hr>

<!-- Managing Albums & Gallery -->
<h3 id="managing-albums--gallery">Managing Albums &amp; Gallery</h3>
<p>
The gallery module allows you to manage photo albums for the website.
</p>

<ol>
    <li>Open <strong>Gallery &gt; Albums</strong>.</li>
    <li>Click <strong>Create Album</strong>.</li>
    <li>Enter the album title, description, and cover photo.</li>
    <li>After the album is created, open it and click <strong>Upload Photos</strong>.</li>
    <li>Select multiple files (JPG/PNG supported).</li>
</ol>

<p>Notes:</p>
<ul>
    <li>Uploaded images are stored in <code>/asset/img_galeri/</code>.</li>
    <li>Thumbnails are auto-generated.</li>
    <li>Photos can be reordered via drag-and-drop (if enabled).</li>
</ul>

<a name="features"></a>

## Features

### ✔ Frontend
- Dynamic homepage with featured and highlighted news
- Category & subcategory support
- Responsive Bootstrap-based layout
- SEO-friendly, clean URL routing
- Image galleries & photo albums
- RSS feed generation (rss.xml)
- Pagination & search functionality

### ✔ Backend / Admin Panel
- Full News CRUD management
- Category & tag management
- Photo news & photo gallery management
- Video playlists, videos, tags, and comment moderation
- User & role-based access management
- Module permission system
- Website identity & menu management
- Template & theme color management (Red, Green, Blue, Orange, Purple, Pink, Tosca, Black)
- Comment filtering / word censorship system
- Agenda / event scheduling
- Polling system
- File download center
- Inbox messaging system
- Advertisement placements (Top, Bottom, Homepage, Sidebar, External Link Ads)
- Visitor analytics chart
- Cache & logging system

### 🎛 Access Levels

MediaVerse uses a structured permission and role-based access control system:

### 1. Administrator / Developer
- Full system access  
- Manage users, modules, templates, and system configuration  

### 2. Contributor / Writer
- Content creation and editorial access  
- Manage articles, categories, media, and related assets  

### 3. Standard User
- Basic user-level interactions  
- Participate in comments, polls, and agendas  
- No administrative privileges  


### 🧩 Available Modules

### **Content Modules**
- News  
- News categories  
- News tags  
- News comments  
- Photo news  
- Photo galleries  
- Video list  
- Video playlists  
- Video tags  
- Video comments  

### **Configuration Modules**
- Website identity  
- Website menu builder  
- Static page builder  
- Template management  
- Theme color selection  
- Logo management  
- Word censorship  
- Module management  
- User management  

### **Interaction Modules**
- Agenda / events  
- Flash information  
- Polling system  
- File downloads  
- Contact information  
- Inbox messages  

<hr>
<h2 id="directory-structure">📁 Directory Structure</h2>

<pre>
<code>
MediaVerse/
├── application/
│   ├── config/          # Application configuration files (base_url, database, routing, etc.)
│   ├── controllers/     # All controller files for frontend & backend
│   ├── core/            # Custom extended CI core classes
│   ├── helpers/         # Custom helper functions
│   ├── hooks/           # System hooks 
│   ├── language/        # Localization files
│   ├── libraries/       # Custom libraries
│   ├── logs/            # System log files
│   ├── models/          # Database models
│   └── views/           # Frontend & backend view templates
│
├── asset/
│   ├── css/             # Stylesheets
│   ├── js/              # JavaScript files
│   ├── images/          # General images
│   ├── foto_berita/     # News images upload folder
│   ├── foto_banner/     # Banner/advertisement uploads
│   ├── foto_galeri/     # Photo gallery uploads
│   └── video/           # Video thumbnail uploads
│
├── captcha/             # Captcha generator files
├── system/              # CodeIgniter system core files
├── template/            # Template and theme files (3 website template, color themes, layout files, etc.)
├── vendor/              # Composer dependencies 
│
├── contributing.md      # Contribution guidelines
├── composer.json        # Composer configuration file
├── index.php            # Main entry point
└── rss.xml              # RSS feed generator output
</code>
</pre>

<section id="showcase">

<h1>📸 Showcase</h1>

<!-- ======================= -->
<!-- FRONTEND TEMPLATES -->
<!-- ======================= -->
<h2 id="frontend-templates">🌐 Frontend Templates</h2> 
<p>MediaVerse provides <strong>three responsive frontend templates</strong>, optimized for performance, accessibility, and user engagement. Each template includes multiple layout variations and supports theme color customization.</p>

<div class="showcase-grid">
    <div class="item">
        <h3>Template A — Modern Default</h3>
        <p>A clean and structured layout ideal for general news portals.</p>
        <img src="https://github.com/HVzz24/MediaVerse/blob/main/asset/files/frontend%20A.gif" alt="Default Template" class="gif-preview">
        <img src="asset\files\1.jpeg" alt="Default Template" class="full-img">
    </div>
    <div class="item">
        <h3>Template B — Magazine Style</h3>
        <p>Designed for multi-category news platforms with dynamic content blocks.</p>
        <img src="asset/files/Template B.gif" alt="Magazine Template" class="gif-preview">
        <img src="asset\files\4.jpeg" alt="Default Template" class="full-img">
    </div>
    <div class="item">
        <h3>Template C — Minimal Flat</h3>
        <p>A lightweight template focused on speed and simplicity.</p>
        <img src="asset/files/Template C.gif" alt="Minimal Template" class="gif-preview">
        <img src="asset\files\5.jpeg" alt="Default Template" class="full-img">
    </div>
</div>


<!-- ======================= -->
<!-- THEME COLORS -->
<!-- ======================= -->
<h2 id="theme-color-variants">🎨 Theme Color Variants</h2>
<p>Every template includes <strong>9 predefined color themes</strong>, allowing full visual customization.</p>

<div class="color-palette">
        <span style="background:red;"></span>
        <span style="background:green;"></span>
        <span style="background:blue;"></span>
        <span style="background:orange;"></span>
        <span style="background:purple;"></span>
        <span style="background:pink;"></span>
        <span style="background:teal;"></span>
        <span style="background:black; border:1px solid #555;"></span>
    </div>

<!-- ======================= -->
<!-- ADMIN DASHBOARD -->
<!-- ======================= -->
<h2 id="admin-dashboard">🛠 Admin Dashboard</h2>
<p>The administrative control panel offers a comprehensive overview of system activity, including analytics, content management, and user operations.</p>

<img src="asset\files\Admin Dashboard.png" alt="Admin Dashboard" class="full-img">

<ul class="bullet-list">
        <li>Latest news, pages, and user activity</li>
        <li>Visitor analytics and traffic charts</li>
        <li>Recent comments and content summaries</li>
    </ul>

<!-- ======================= -->
<!-- NEWS MANAGEMENT -->
<!-- ======================= -->
<h2 id="news-management-showcase">📰 News Management</h2>
<p>Manage all editorial content with a streamlined interface, including articles, categories, tags, and comments.</p>

<img src="asset\files\news-management.gif" alt="News Management" class="full-img">

<ul class="bullet-list">
        <li>News listing with search and filters</li>
        <li>Category and tag management</li>
        <li>Comment moderation and keyword filtering</li>
        <li>Photo news and gallery integration</li>
    </ul>

<!-- ======================= -->
<!-- VIDEO MANAGEMENT -->
<!-- ======================= -->
<h2 id="video-management-showcase">🎥 Video Management</h2>
    <p>A dedicated module for maintaining video playlists, metadata, tags, and user comments.</p>

<img src="asset\files\video-management.gif" alt="Video Management" class="full-img">

 <ul class="bullet-list">
        <li>Video playlist organization</li>
        <li>Tag creation and filtering</li>
        <li>Comment moderation</li>
    </ul>

<!-- ======================= -->
<!-- GALLERY -->
<!-- ======================= -->
<h2 id="photo-gallery">🖼 Photo Gallery & Albums</h2>
<p>Upload, organize, and publish albums with support for high-quality images.</p>

<img src="asset\files\gallery.gif" alt="Gallery" class="full-img">

<ul class="bullet-list">
        <li>Album creation and sorting</li>
        <li>Multi-image upload support</li>
        <li>Visual content optimization</li>
    </ul>

<!-- ======================= -->
<!-- ACCESS LEVELS -->
<!-- ======================= -->
<h2 id="user-access-levels">🧩 User Access Levels</h2>
<p>MediaVerse includes a hierarchical access system suitable for multi-author environments.</p>

<img src="asset\files\access-levels.gif" alt="Access Levels" class="full-img">

<ul class="bullet-list">
        <li><strong>Admin / Developer</strong> — full system access and configuration</li>
        <li><strong>Contributor / Writer</strong> — editorial content access</li>
        <li><strong>Standard User</strong> — limited access for general use</li>
    </ul>

<!-- ======================= -->
<!-- PERMISSIONS -->
<!-- ======================= -->
<h2 id="module-permissions">🔐 Module Permission Controls</h2>
<p>All user roles can be customized through module-based permission settings.</p>

<img src="asset\files\module-permissions.gif" alt="Module Permissions" class="full-img">

<ul class="bullet-list">
        <li>News, categories, and tags</li>
        <li>Video modules (playlist, tags, comments)</li>
        <li>Template and theme customization</li>
        <li>Polls, interactions, and agenda</li>
        <li>Advertisements & layout settings</li>
    </ul>

<!-- ======================= -->
<!-- MAIN SYSTEM MODULES -->
<!-- ======================= -->
<h2 id="system-modules-overview">📦 System Modules Overview</h2>
<p>The admin panel is organized into modular sections, enabling efficient navigation and content control.</p>

<img src="asset\files\main-menu.gif" alt="Main Menu" class="full-img">

<ul class="bullet-list">
        <li><strong>Dashboard</strong> — activity summary and analytics</li>
        <li><strong>Main Menu</strong> — identity, pages, and site navigation</li>
        <li><strong>News Module</strong> — articles, tags, categories, comments</li>
        <li><strong>Video Module</strong> — playlists, video management, tags</li>
        <li><strong>Advertisement Module</strong> — banner & layout management</li>
        <li><strong>Templates & Themes</strong> — visual customization</li>
        <li><strong>Interactive Elements</strong> — polls, agenda, downloads</li>
        <li><strong>User & Role Management</strong> — access levels and permissions</li>
    </ul>

</section>

<style>
    #showcase img.full-img {
        width: 100%;
        max-width: 900px;
        margin: 10px 0 20px 0;
        border-radius: 6px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .showcase-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .showcase-grid .item {
        width: 31%;
        min-width: 280px;
    }

    .showcase-grid img {
        width: 100%;
        border-radius: 6px;
        margin-top: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .color-palette span {
        width: 40px;
        height: 40px;
        display: inline-block;
        border-radius: 6px;
        margin-right: 8px;
    }

    .bullet-list li {
        margin-bottom: 6px;
    }
</style>
