<?php $this->load->view("partial/header"); ?>
<br />
<h3><?php echo $this->lang->line('common_welcome_message'); ?></h3>

<div id="home_page_wrapper">

<div id="left_column" class="">

<div>
<a href="index.php/customers">
<img src="images/menubar/customers.png" alt="" border="0" />
<span>Customers</span></a>
<br />
<span>Add, Update, Delete<br /> and Search Customers</span> 
</div>
<br /><br /><br />
<div>
<a href="index.php/suppliers">
<img src="images/menubar/suppliers.png" alt="" border="0" />
<span>Suppliers</span></a>
<br />
<span>Add, Update, Delete<br /> and Search Suppliers</span> 
</div>
<br /><br /><br />
<div>
<a href="index.php/sales">
<img src="images/menubar/sales.png" alt="" border="0" />
<span>Sales</span></a>
<br />
<span>Process sales and returns</span> 
</div>
<br /><br /><br />
<div>
<a href="index.php/config">
<img src="images/menubar/config.png" alt="" border="0" />
<span>Store Config</span></a>
<br />
<span>Change the stores's<br /> configuration</span> 
</div>
<br /><br /><br />
</div>

<div id="center_column" class="">

<div>
<a href="index.php/items">
<img src="images/menubar/items.png" alt="" border="0" />
<span>Items</span></a>
<br />
<span>Add, Update, Delete<br /> and Search Items</span> 
</div>
<br /><br /><br />
<div>
<a href="index.php/reports">
<img src="images/menubar/reports.png" alt="" border="0" />
<span>Reports</span></a>
<br />
<span>View and generate reports</span> 
</div>
<br /><br /><br />
<div>
<a href="index.php/employees">
<img src="images/menubar/employees.png" alt="" border="0" />
<span>Employees</span></a>
<br />
<span>Add, Update, Delete<br /> and Search Employees</span> 
</div>
</div>

<div id="right_column" class="">

<div>
<a href="index.php/item_kits">
<img src="images/menubar/item_kits.png" alt="" border="0" />
<span>Item Kits</span></a>
<br />
<span>Add, Update, Delete<br /> and Search Item Kits</span> 
</div>
<br /><br /><br />

<div>
<a href="index.php/receivings">
<img src="images/menubar/receivings.png" alt="" border="0" />
<span>Receivings</span></a>
<br />
<span>Process Purchase Orders</span> 
</div>
<br /><br /><br />

<div>
<a href="index.php/giftcards">
<img src="images/menubar/giftcards.png" alt="" border="0" />
<span>Gift Cards</span></a>
<br />
<span>Add, Update, Delete <br />and Search Gift Cards</span> 
</div>
</div>
</div>

<?php $this->load->view("partial/footer"); ?>
