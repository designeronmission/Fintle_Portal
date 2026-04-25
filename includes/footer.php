    <!-- Import Js Files -->
    <script src="assets/libs/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/js/simplebar.min.js"></script>
    <script src="assets/libs/js/app.init.js"></script>
    <script src="assets/libs/js/theme.js"></script>
    <script src="assets/libs/js/app.min.js"></script>
    <script src="assets/libs/js/sidebarmenu.js"></script>
       <script src="assets/libs/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    
    <script>
    // Logout function
    function handleLogout() {
        if (confirm('Are you sure you want to logout?')) {
            window.location.href = 'logout.php';
        }
    }
    
    // Active menu handling - expand parent menus when child is active
    document.addEventListener('DOMContentLoaded', function() {
        // Find all sidebar items with 'active' class
        var activeItems = document.querySelectorAll('.sidebar-item.active');
        
        activeItems.forEach(function(item) {
            // Find parent with has-arrow class
            var parentHasArrow = item.closest('.has-arrow');
            if (parentHasArrow) {
                // Expand the parent menu
                var parentLi = parentHasArrow.closest('.sidebar-item');
                if (parentLi) {
                    var submenu = parentLi.querySelector('.first-level');
                    if (submenu) {
                        submenu.classList.add('show');
                        parentLi.classList.add('active');
                    }
                }
            }
            
            // Also handle nested items
            var grandParent = item.closest('.sidebar-item').parentElement.closest('.sidebar-item');
            if (grandParent) {
                var grandParentSubmenu = grandParent.querySelector('.first-level');
                if (grandParentSubmenu) {
                    grandParentSubmenu.classList.add('show');
                    grandParent.classList.add('active');
                }
            }
        });
        
        // Sidebar toggle for mobile
        var sidebartoggler = document.querySelector('.sidebartoggler');
        var mainWrapper = document.querySelector('#main-wrapper');
        
        if (sidebartoggler) {
            sidebartoggler.addEventListener('click', function() {
                mainWrapper.classList.toggle('mini-sidebar');
            });
        }
        
        // Prevent sidebar from closing when clicking inside
        var sidebar = document.querySelector('.side-mini-panel');
        if (sidebar) {
            sidebar.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        }
    });


document.addEventListener('DOMContentLoaded', function() {
    // Initialize all dropdown toggles
    const dropdownToggles = document.querySelectorAll('.has-arrow');
    
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const parentLi = this.closest('.sidebar-item');
            const submenu = parentLi.querySelector('.first-level');
            
            if (submenu) {
                // Close all other open submenus first
                const allSubmenus = document.querySelectorAll('.first-level');
                allSubmenus.forEach(menu => {
                    if (menu !== submenu && menu.classList.contains('show')) {
                        menu.classList.remove('show');
                        const parentToggle = menu.closest('.sidebar-item').querySelector('.has-arrow');
                        if (parentToggle) {
                            parentToggle.setAttribute('aria-expanded', 'false');
                        }
                    }
                });
                
                // Toggle current submenu
                submenu.classList.toggle('show');
                const isExpanded = submenu.classList.contains('show');
                this.setAttribute('aria-expanded', isExpanded);
                
                // Scroll to ensure submenu is visible
                if (isExpanded && parentLi) {
                    const menuWrapper = document.querySelector('.sidebar-menu-wrapper');
                    if (menuWrapper) {
                        setTimeout(() => {
                            const itemTop = parentLi.offsetTop;
                            const wrapperHeight = menuWrapper.clientHeight;
                            const scrollPosition = menuWrapper.scrollTop;
                            
                            if (itemTop + 100 > scrollPosition + wrapperHeight) {
                                menuWrapper.scrollTo({
                                    top: itemTop - 50,
                                    behavior: 'smooth'
                                });
                            }
                        }, 100);
                    }
                }
            }
        });
    });
    
    // Expand active menu items on page load
    const activeItems = document.querySelectorAll('.sidebar-item.active');
    activeItems.forEach(function(item) {
        const parentHasArrow = item.closest('.has-arrow');
        if (parentHasArrow) {
            const parentLi = parentHasArrow.closest('.sidebar-item');
            if (parentLi) {
                const submenu = parentLi.querySelector('.first-level');
                if (submenu) {
                    submenu.classList.add('show');
                    parentHasArrow.setAttribute('aria-expanded', 'true');
                }
            }
        }
        
        // Scroll to active item if not visible on laptop
        if (window.innerWidth >= 1200) {
            const menuWrapper = document.querySelector('.sidebar-menu-wrapper');
            if (menuWrapper && item) {
                const itemTop = item.offsetTop;
                const wrapperHeight = menuWrapper.clientHeight;
                const scrollPosition = menuWrapper.scrollTop;
                
                if (itemTop < scrollPosition || itemTop + 100 > scrollPosition + wrapperHeight) {
                    menuWrapper.scrollTo({
                        top: Math.max(0, itemTop - 100),
                        behavior: 'smooth'
                    });
                }
            }
        }
    });
    
    // Add overlay for mobile
    const sidebar = document.querySelector('.side-mini-panel');
    let overlay = document.querySelector('.sidebar-overlay');
    
    if (!overlay && sidebar) {
        overlay = document.createElement('div');
        overlay.className = 'sidebar-overlay';
        overlay.addEventListener('click', function() {
            sidebar.classList.remove('open');
            overlay.classList.remove('active');
        });
        document.body.appendChild(overlay);
    }
    
    // Sidebar toggle for mobile
    const sidebartoggler = document.querySelector('.sidebartoggler');
    
    if (sidebartoggler && sidebar && overlay) {
        sidebartoggler.addEventListener('click', function(e) {
            e.stopPropagation();
            sidebar.classList.toggle('open');
            overlay.classList.toggle('active');
            
            // Prevent body scroll when sidebar is open on mobile
            if (sidebar.classList.contains('open')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
        
        // Close sidebar when clicking on a link (mobile)
        const sidebarLinks = sidebar.querySelectorAll('.sidebar-link');
        sidebarLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 1200 && !this.classList.contains('has-arrow')) {
                    sidebar.classList.remove('open');
                    overlay.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });
    }
    
    // Handle window resize - reset body overflow
    window.addEventListener('resize', function() {
        if (window.innerWidth > 1200 && sidebar && sidebar.classList.contains('open')) {
            sidebar.classList.remove('open');
            if (overlay) overlay.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
});

// Handle logout
function handleLogout() {
    if (confirm('Are you sure you want to logout?')) {
        window.location.href = 'logout.php';
    }
}

// Toggle mini sidebar for laptops
function toggleMiniSidebar() {
    const wrapper = document.querySelector('#main-wrapper');
    if (wrapper && window.innerWidth >= 1200) {
        wrapper.classList.toggle('mini-sidebar');
        localStorage.setItem('sidebarMini', wrapper.classList.contains('mini-sidebar'));
    }
}

// Restore sidebar state from localStorage
document.addEventListener('DOMContentLoaded', function() {
    if (window.innerWidth >= 1200) {
        const isMini = localStorage.getItem('sidebarMini') === 'true';
        const wrapper = document.querySelector('#main-wrapper');
        if (wrapper && isMini) {
            wrapper.classList.add('mini-sidebar');
        }
    }
});


    </script>
</body>
</html>
<?php
// Close any open database connections if needed
if (isset($conn)) {
    mysqli_close($conn);
}
?>