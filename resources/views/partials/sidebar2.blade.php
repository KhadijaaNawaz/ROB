<!-- resources/views/partials/sidebar.blade.php -->
<nav class="navbar ps-2 navbar-expand-md navbar-light bg-grey sidebar bg-grey">
    <div class="" id="sidebarMenu">
        <ul class="navbar-nav flex-column p-2">
            <div>
                <img src="img\dummy-logo-5b2.png" alt="" class="img-fluid">
            </div>

            <!-- Dashboard -->
            <li class="nav-item ">
                <a class="nav-link " href="#">
                    <i class="fas fs-5 fa-tachometer-alt"></i>
                </a>
            </li>

            <!-- Order Manage -->
            <li class="nav-item ">
                <a class="nav-link  collapsed d-flex justify-content-between align-items-center" href="#orderManageSubmenu" data-bs-toggle="collapse">
                    <span><i class="fas fs-5 fa-shopping-cart "></i> </span>

                </a>
                {{-- <ul class="collapse list-unstyled" id="orderManageSubmenu">
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Orders</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Manual Invoice</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Manual Challan</a></li>
                </ul> --}}
            </li>

            <!-- Quotations -->
            <li class="nav-item ">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#quotationsSubmenu" data-bs-toggle="collapse">
                    <span> <i class="fas fs-5 fa-file-alt"></i> </span>
                    {{-- <i class="fa-solid fa-circle-chevron-down"></i> --}}
                </a>
                {{-- <ul class="collapse list-unstyled" id="quotationsSubmenu">
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Quotations</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Estimate</a></li>
                </ul> --}}
            </li>

            <!-- Products -->
            <li class="nav-item ">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#productsSubmenu" data-bs-toggle="collapse">
                   <span> <i class="fas fs-5 fa-box"></i> </span>
                    {{-- <i class="fa-solid fa-circle-chevron-down"></i> --}}
                </a>
                {{-- <ul class="collapse list-unstyled" id="productsSubmenu">
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i> Products</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>In Stock Products</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Product Purchase</a></li>
                </ul> --}}
            </li>

            <!-- Product Management -->
            <li class="nav-item ">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#productManagementSubmenu" data-bs-toggle="collapse">
                   <span> <i class="fas fs-5 fa-cogs"></i> </span>
                   {{-- <i class="fa-solid fa-circle-chevron-down ms-2 "></i> --}}
                </a>
                {{-- <ul class="collapse list-unstyled" id="productManagementSubmenu">
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>All Products</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Category</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Sub Category</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Sub Sub Category</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Variant</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Attribute</a></li>
                </ul> --}}
            </li>

            <!-- Manufacturing -->
            <li class="nav-item ">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#ManufacturingSubmenu" data-bs-toggle="collapse">
                    <span> <i class="fas fs-5 fa-industry"></i> </span>
                    {{-- <i class="fa-solid fa-circle-chevron-down ms-2 "></i> --}}
                 </a>

            </li>

            <!-- Manage Purchase -->
            <li class="nav-item ">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#managePurchaseSubmenu" data-bs-toggle="collapse">
                   <span> <i class="fas fs-5 fa-shopping-basket"></i> </span>
                   {{-- <i class="fa-solid fa-circle-chevron-down"></i> --}}
                </a>
                {{-- <ul class="collapse list-unstyled" id="managePurchaseSubmenu">
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Materials Purchase</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Product Purchase</a></li>
                </ul> --}}
            </li>

            <!-- Accounts -->
            <li class="nav-item ">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#accountsSubmenu" data-bs-toggle="collapse">
                    <span><i class="fas fs-5 fa-wallet"></i> </span>
                   {{-- <i class="fa-solid fa-circle-chevron-down"></i> --}}
                </a>
                {{-- <ul class="collapse list-unstyled" id="accountsSubmenu">
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Pay Slip</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Credit</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Debit</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Due</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Fund Transfer</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Account Purpose</a></li>
                </ul> --}}
            </li>

            <!-- People Management -->
            <li class="nav-item ">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#peopleManagementSubmenu" data-bs-toggle="collapse">
                   <span> <i class="fas fs-5 fa-users"></i> </span>
                   {{-- <i class="fa-solid fa-circle-chevron-down"></i> --}}
                </a>
                {{-- <ul class="collapse list-unstyled" id="peopleManagementSubmenu">
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Parties</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Manufacturer</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Supplier</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Vendor</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Employee</a></li>
                </ul> --}}
            </li>

            <!-- Report Management -->
            <li class="nav-item ">
                <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#reportManagementSubmenu" data-bs-toggle="collapse">
                   <span> <i class="fas fs-5 fa-chart-line"></i> </span>
                   {{-- <i class="fa-solid fa-circle-chevron-down"></i> --}}
                </a>
                {{-- <ul class="collapse list-unstyled" id="reportManagementSubmenu">
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Sales Report</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Items Wise Sales Report</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Purchase Report</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Day Book</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Party Report</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Manufacturing Report</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Manufacturar Report</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Stock Report</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Low Stock Report</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Expense Report</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Profit & Loss Report</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Profit & Loss Report</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Account Report</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Vendor Report</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Quotation Report</a></li>
                    <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Employee Report</a></li>
                </ul> --}}
            </li>

            <!-- Settings -->
                     <!-- Admin Users -->
                     <li class="nav-item ">
                        <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#adminUsersSubmenu" data-bs-toggle="collapse">
                          <span>  <i class="fas fs-5 fa-user-shield"></i> </span>
                          {{-- <i class="fa-solid fa-circle-chevron-down"></i> --}}
                        </a>
                        {{-- <ul class="collapse list-unstyled" id="adminUsersSubmenu">
                            <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Super Admin</a></li>
                            <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Sub Admin</a></li>
                            <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Manager</a></li>
                            <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Sales</a></li>
                        </ul> --}}
                    </li>

                    <!-- Settings -->
                    <li class="nav-item ">
                        <a class="nav-link collapsed d-flex justify-content-between align-items-center" href="#settingsSubmenu" data-bs-toggle="collapse">
                           <span> <i class="fas fs-5 fa-cog"></i> </span>
                          {{-- <i class="fa-solid fa-circle-chevron-down"></i> --}}

                        </a>
                        {{-- <ul class="collapse list-unstyled" id="settingsSubmenu">
                            <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>General Settings</a></li>
                            <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Footer Settings</a></li>
                            <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Color Settings</a></li>
                            <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>City</a></li>
                            <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Courier</a></li>
                            <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Comment</a></li>
                            <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Delivery Charge</a></li>
                            <li><a class="nav-link ps-5" href="#"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Emergency Notice</a></li>
                        </ul> --}}
                    </li>
        </ul>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var collapseElements = document.querySelectorAll('.collapse');

        collapseElements.forEach(function (collapseElement) {
            collapseElement.addEventListener('shown.bs.collapse', function () {
                this.previousElementSibling.classList.add('expanded');
            });

            collapseElement.addEventListener('hidden.bs.collapse', function () {
                this.previousElementSibling.classList.remove('expanded');
            });
        });
    });
</script>
