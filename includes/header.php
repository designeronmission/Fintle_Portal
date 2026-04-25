<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="assets/images/logo/fav-icon.png" />
  <link rel="stylesheet" href="assets/libs/css/styles.css" />
  <title><?php echo $page_title ?? 'Fintle'; ?></title>

  <style>

/* Sidebar Container */
.side-mini-panel {
  position: fixed;
  top: 0;
  left: 0;
  width: 265px;
  height: 100vh;
  background: #ffffff;
  z-index: 1020;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
  transition: all 0.3s ease;
  display: flex;
  flex-direction: column;
}

/* Iconbar - Full height flex container */
.iconbar {
  height: 100%;
  display: flex;
  flex-direction: column;
  flex: 1;
}

/* Sidebarmenu - Takes full height */
.sidebarmenu {
  height: 100%;
  display: flex;
  flex-direction: column;
  flex: 1;
  position: relative;
}

/* Brand Logo - Fixed at top */
.brand-logo {
  padding: 20px 24px;
  border-bottom: 1px solid #eef2f8;
  flex-shrink: 0;
  background: #ffffff;
  z-index: 10;
}

/* Scrollable Menu Area */
.sidebar-menu-wrapper {
  flex: 1 1 auto;
  overflow-y: auto;
  overflow-x: hidden;
  min-height: 0; /* CRITICAL: Allows flex scrolling */
  position: relative;
}

/* Custom Scrollbar */
.sidebar-menu-wrapper::-webkit-scrollbar {
  width: 4px;
}

.sidebar-menu-wrapper::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 4px;
}

.sidebar-menu-wrapper::-webkit-scrollbar-thumb {
  background: #c1c1c1;
  border-radius: 4px;
}

/* Sidebar Footer - Fixed at bottom */
.sidebar-footer-fixed {
  flex-shrink: 0;
  background: #ffffff;
  padding: 12px 16px;
  border-top: 1px solid #eef2f8;
  position: sticky;
  bottom: 0;
  width: 100%;
  z-index: 10;
}

/* For laptop/desktop - ensure footer is visible */
@media (min-width: 1200px) {
  .sidebar-menu-wrapper {
    max-height: calc(100vh - 140px);
  }
  
  .sidebar-footer-fixed {
    position: relative;
    bottom: auto;
  }
}

/* For smaller screens - ensure footer is always at bottom */
@media (max-width: 1199px) {
  .sidebar-footer-fixed {
    position: sticky;
    bottom: 0;
    background: #ffffff;
    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
  }
}

.footer-divider {
  height: 1px;
  background: linear-gradient(90deg, transparent, #eef2f8, transparent);
  margin: 0 -16px 12px -16px;
}

/* Sidebar Navigation */
.sidebar-nav {
  padding: 16px 0;
}

.sidebar-menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/* Sidebar Items */
.sidebar-item {
  margin: 2px 12px;
  border-radius: 8px;
  transition: all 0.2s ease;
}

.sidebar-link {
  display: flex;
  align-items: center;
  padding: 10px 16px;
  color: #5b6e8c;
  text-decoration: none;
  border-radius: 8px;
  transition: all 0.2s ease;
  gap: 12px;
  cursor: pointer;
}

.sidebar-link:hover {
  background: #f0f7ff;
  color: #2c7da0;
}


.sidebar-item.active > .sidebar-link iconify-icon {
  color: #ffffff;
}

.sidebar-link iconify-icon {
  font-size: 20px;
  flex-shrink: 0;
}

.hide-menu {
  flex: 1;
  font-size: 14px;
  font-weight: 500;
  white-space: nowrap;
}



/* Footer Menu Items */
.sidebar-footer-fixed .sidebar-menu {
  list-style: none;
  padding: 0;
  margin: 0;
}

.sidebar-footer-fixed .sidebar-item {
  margin: 4px 0;
}

.sidebar-footer-fixed .sidebar-link {
  padding: 10px 12px;
}

.sidebar-footer-fixed .sidebar-link:hover {
  background: #f0f7ff;
  color: #2c7da0;
}

.sidebar-footer-fixed .logout-item .sidebar-link {
  color: #ef4444;
}

.sidebar-footer-fixed .logout-item .sidebar-link:hover {
  background: #fee2e2;
  color: #dc2626;
}

/* Page Wrapper - Adjust for sidebar */
.page-wrapper {
  margin-left: 265px;
  transition: all 0.3s ease;
  min-height: 100vh;
}

/* Responsive Styles */
@media (max-width: 1200px) {
  .side-mini-panel {
    transform: translateX(-100%);
    transition: transform 0.3s ease;
    box-shadow: none;
  }
  
  .side-mini-panel.open {
    transform: translateX(0);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  }
  
  .page-wrapper {
    margin-left: 0;
  }
  
  /* Ensure footer is visible on mobile when sidebar is open */
  .side-mini-panel.open .sidebar-footer-fixed {
    position: relative;
    bottom: auto;
    margin-top: auto;
  }
}

/* Mini Sidebar Mode for Laptops */
@media (min-width: 1200px) {
  .mini-sidebar .side-mini-panel {
    width: 80px;
  }
  
  .mini-sidebar .hide-menu {
    display: none;
  }
  
  .mini-sidebar .sidebar-link {
    justify-content: center;
    padding: 12px;
  }
  
  .mini-sidebar .has-arrow::after {
    display: none;
  }
  
  .mini-sidebar .sidebar-footer-fixed {
    padding: 12px 8px;
  }
  
  .mini-sidebar .sidebar-footer-fixed .sidebar-link {
    justify-content: center;
    padding: 12px 8px;
  }
  
  .mini-sidebar .first-level {
    position: absolute;
    left: 80px;
    background: #ffffff;
    min-width: 200px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 8px 0;
    z-index: 1030;
  }
  
  .mini-sidebar .first-level .sidebar-link {
    padding: 10px 16px;
    white-space: nowrap;
  }
  
  .mini-sidebar .sidebar-item:hover .first-level {
    display: block;
  }
  
  .mini-sidebar .page-wrapper {
    margin-left: 80px;
  }
}

/* Sidebar Overlay for Mobile */
.sidebar-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  z-index: 1015;
  display: none;
}

.sidebar-overlay.active {
  display: block;
}
    </style>
</head>

<body>

<div id="main-wrapper">
<?php
// Function to check if a menu item is active
function isActive($paths, $currentPage) {
    if (is_array($paths)) {
        return in_array($currentPage, $paths) ? 'active' : '';
    }
    return $currentPage == $paths ? 'active' : '';
}

// Get current page name
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>