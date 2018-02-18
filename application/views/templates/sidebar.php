<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="<?php echo base_url();?>dashboard">
          <i class="fa fa-dashboard"></i>Dashboard
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Consumables</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            <ul class="treeview-menu">
             <li><a href="<?php echo base_url();?>consumables/new-consumables-category"><i class="fa fa-circle-o"></i>New Category</a></li>
             <li><a href="<?php echo base_url();?>consumables/new-consumables-unit"><i class="fa fa-circle-o"></i>New Consumable Unit</a></li>
             <li><a href="<?php echo base_url();?>consumables/list-of-consumables"><i class="fa fa-circle-o"></i>List of Consumables</a></li>
             <li><a href="<?php echo base_url();?>consumables/csv"><i class="fa fa-circle-o"></i>Import CSV</a></li>
           </ul>
         </span>
       </a>
       
     </li>
     <li class="treeview">
      <a href="#">
       <i class="fa fa-files-o"></i>
       <span>Equipments</span>
       <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        <ul class="treeview-menu">
         <li><a href="<?php echo base_url();?>equipments/new-equipments-category"><i class="fa fa-circle-o"></i>New Category</a></li>
         <li><a href="<?php echo base_url();?>equipments/new-equipments-unit"><i class="fa fa-circle-o"></i>New Equipments Unit</a></li>
         <li><a href="<?php echo base_url();?>equipments/list-of-equipments"><i class="fa fa-circle-o"></i>List of Equipments</a></li>
         <li><a href="<?php echo base_url();?>equipments/csv"><i class="fa fa-circle-o"></i>Import CSV</a></li>
       </ul>
     </span>
   </a>
 </li>
 <li class="treeview">
  <a href="#">
    <i class="fa fa-pie-chart"></i>
    <span>Users</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
   <li><a href="<?php echo base_url();?>users/new"><i class="fa fa-circle-o"></i>New</a></li>
   <li><a href="<?php echo base_url();?>users/manage"><i class="fa fa-circle-o"></i>Manage</a></li>
 </ul>
</li>
</aside>