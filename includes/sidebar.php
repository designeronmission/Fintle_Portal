<!-- Sidebar Start -->
<aside class="side-mini-panel with-vertical">
  <div class="iconbar">
    <div class="sidebarmenu">
      <!-- Brand Logo - Fixed at top -->
      <div class="brand-logo d-flex align-items-center nav-logo">
        <a href="index.php" class="text-nowrap logo-img">
          <img src="assets/images/logo/fintle_logo.png" alt="Logo" class="logo-image" />
        </a>
      </div>
      
      <!-- Scrollable Menu Area -->
      <div class="sidebar-menu-wrapper">
        <nav class="sidebar-nav" id="menu-right-mini-1">
          <ul class="sidebar-menu" id="sidebarnav">
            <!-- Dashboard -->
            <li class="sidebar-item <?php echo isActive('index', $currentPage); ?>">
              <a class="sidebar-link" href="index.php">
                <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <!-- Inbox -->
            <li class="sidebar-item <?php echo isActive('inbox', $currentPage); ?>">
              <a class="sidebar-link" href="inbox.php">
                <iconify-icon icon="solar:chart-line-duotone"></iconify-icon>
                <span class="hide-menu">Inbox</span>
              </a>
            </li>

            <!-- Items -->
            <li class="sidebar-item <?php echo isActive(['items', 'add-item', 'edit-item'], $currentPage) ? 'active' : ''; ?>">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <iconify-icon icon="solar:box-minimalistic-line-duotone"></iconify-icon>
                <span class="hide-menu">Items</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item <?php echo isActive('items', $currentPage); ?>">
                  <a class="sidebar-link" href="items.php">
                    <span class="icon-small"></span> Inventory
                  </a>
                </li>
              </ul>
            </li>

            <!-- Purchase -->
            <li class="sidebar-item <?php echo isActive(['suppliers', 'purchase-order', 'purchase-bill', 'supplier-statement'], $currentPage) ? 'active' : ''; ?>">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <iconify-icon icon="solar:cart-line-duotone"></iconify-icon>
                <span class="hide-menu">Purchase</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item <?php echo isActive('suppliers', $currentPage); ?>">
                  <a class="sidebar-link" href="suppliers.php">
                    <span class="icon-small"></span> Suppliers
                  </a>
                </li>
                <li class="sidebar-item <?php echo isActive('purchase-order', $currentPage); ?>">
                  <a class="sidebar-link" href="purchase-order.php">
                    <span class="icon-small"></span> Purchase Order
                  </a>
                </li>
                <li class="sidebar-item <?php echo isActive('purchase-bill', $currentPage); ?>">
                  <a class="sidebar-link" href="purchase-bill.php">
                    <span class="icon-small"></span> Purchase Bill
                  </a>
                </li>
                <li class="sidebar-item <?php echo isActive('supplier-statement', $currentPage); ?>">
                  <a class="sidebar-link" href="supplier-statement.php">
                    <span class="icon-small"></span> Supplier Statement
                  </a>
                </li>
              </ul>
            </li>

            <!-- Sales -->
            <li class="sidebar-item <?php echo isActive(['customer', 'enquiry', 'quotation', 'invoice', 'create-invoice', 'create-customer', 'create-enquiry'], $currentPage) ? 'active' : ''; ?>">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <iconify-icon icon="solar:chart-2-line-duotone"></iconify-icon>
                <span class="hide-menu">Sales</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item <?php echo isActive(['customer', 'create-customer'], $currentPage); ?>">
                  <a class="sidebar-link" href="customer.php">
                    <span class="icon-small"></span> Customer
                  </a>
                </li>
                <li class="sidebar-item <?php echo isActive(['enquiry', 'create-enquiry'], $currentPage); ?>">
                  <a class="sidebar-link" href="enquiry.php">
                    <span class="icon-small"></span> Enquiry
                  </a>
                </li>
                <li class="sidebar-item <?php echo isActive('quotation', $currentPage); ?>">
                  <a class="sidebar-link" href="quotation.php">
                    <span class="icon-small"></span> Quotation
                  </a>
                </li>
                <li class="sidebar-item <?php echo isActive(['invoice', 'create-invoice'], $currentPage); ?>">
                  <a class="sidebar-link" href="invoice.php">
                    <span class="icon-small"></span> Invoice
                  </a>
                </li>
              </ul>
            </li>

            <!-- Accounts -->
            <li class="sidebar-item <?php echo isActive(['account-master', 'journals', 'vouchers', 'bank-payments', 'general-ledger', 'balance-sheets'], $currentPage) ? 'active' : ''; ?>">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <iconify-icon icon="solar:chart-2-line-duotone"></iconify-icon>
                <span class="hide-menu">Accounts</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item <?php echo isActive('account-master', $currentPage); ?>">
                  <a class="sidebar-link" href="account-master.php">
                    <span class="icon-small"></span> Account Master
                  </a>
                </li>
                <li class="sidebar-item <?php echo isActive('journals', $currentPage); ?>">
                  <a class="sidebar-link" href="journals.php">
                    <span class="icon-small"></span> Journals
                  </a>
                </li>
                <li class="sidebar-item <?php echo isActive('vouchers', $currentPage); ?>">
                  <a class="sidebar-link" href="vouchers.php">
                    <span class="icon-small"></span> Vouchers
                  </a>
                </li>
                <li class="sidebar-item <?php echo isActive('bank-payments', $currentPage); ?>">
                  <a class="sidebar-link" href="bank-payments.php">
                    <span class="icon-small"></span> Bank Payments
                  </a>
                </li>
                <li class="sidebar-item <?php echo isActive('general-ledger', $currentPage); ?>">
                  <a class="sidebar-link" href="general-ledger.php">
                    <span class="icon-small"></span> General Ledger
                  </a>
                </li>
                <li class="sidebar-item <?php echo isActive('balance-sheets', $currentPage); ?>">
                  <a class="sidebar-link" href="balance-sheets.php">
                    <span class="icon-small"></span> Balance Sheets
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      
      <!-- Fixed Footer with Settings and Logout -->
      <div class="sidebar-footer-fixed">
        <div class="footer-divider"></div>
        <ul class="sidebar-menu">
          <li class="sidebar-item">
            <a class="sidebar-link" href="settings.php">
              <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
              <span class="hide-menu">Settings</span>
            </a>
          </li>
          <li class="sidebar-item logout-item">
            <a class="sidebar-link" href="javascript:void(0)" onclick="handleLogout()">
              <iconify-icon icon="solar:logout-2-line-duotone"></iconify-icon>
              <span class="hide-menu">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</aside>
<!-- Sidebar End -->