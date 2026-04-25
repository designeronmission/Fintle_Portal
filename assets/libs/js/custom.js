// Sidebar scrolling and dropdown functionality
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
                // Toggle current submenu
                submenu.classList.toggle('show');
                const isExpanded = submenu.classList.contains('show');
                this.setAttribute('aria-expanded', isExpanded);
                
                // Optional: Close other open submenus
                const allSubmenus = document.querySelectorAll('.first-level');
                allSubmenus.forEach(menu => {
                    if (menu !== submenu && menu.classList.contains('show')) {
                        menu.classList.remove('show');
                        const parentToggle = menu.closest('.sidebar-item').querySelector('.has-arrow');
                        if (parentToggle) {
                            parentToggle.setAttribute('aria-expanded', false);
                        }
                    }
                });
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
                    parentHasArrow.setAttribute('aria-expanded', true);
                }
            }
        }
    });
    
    // Ensure Settings and Logout are always visible by managing scroll
    const menuWrapper = document.querySelector('.sidebar-menu-wrapper');
    if (menuWrapper) {
        // Check if we need to scroll to show active item
        const activeItem = document.querySelector('.sidebar-item.active');
        if (activeItem) {
            const itemTop = activeItem.offsetTop;
            const wrapperHeight = menuWrapper.clientHeight;
            const scrollPosition = menuWrapper.scrollTop;
            
            if (itemTop > scrollPosition + wrapperHeight - 100) {
                menuWrapper.scrollTo({
                    top: itemTop - 100,
                    behavior: 'smooth'
                });
            }
        }
    }
});

// Mobile sidebar toggle
function toggleSidebar() {
    const sidebar = document.querySelector('.side-mini-panel');
    if (sidebar) {
        sidebar.classList.toggle('open');
    }
}

// Handle logout
function handleLogout() {
    if (confirm('Are you sure you want to logout?')) {
        window.location.href = 'logout.php';
    }
}

// Close sidebar when clicking outside on mobile
document.addEventListener('click', function(e) {
    const sidebar = document.querySelector('.side-mini-panel');
    const toggler = document.querySelector('.sidebartoggler');
    
    if (window.innerWidth <= 1200 && sidebar && sidebar.classList.contains('open')) {
        if (!sidebar.contains(e.target) && !toggler?.contains(e.target)) {
            sidebar.classList.remove('open');
        }
    }
});
