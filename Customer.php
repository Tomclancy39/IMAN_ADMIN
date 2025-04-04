<!DOCTYPE html>
<html>
<style>

.RightSide {
    margin-left:12%;
    padding-top: 2%;
}

.InfoTable {
    border:1px solid black;
}

table {
    border: 1px solid black;
    border-collapse:collapse;
}

table, td, th{
  border:1px solid black;
  align-items: right;
  justify-content: center;
}

tr{
    height: 4vh;
}

ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 11%;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
      }
      
      li a {
        display: block;
        color: #000;
        text-decoration: none;
        margin-left: 3%;
        margin-right: 3%;
        padding: 3%;
      }
      
      li a.active {
        background-color: #5a4032;
        color: white;
      }
      
      li a:hover:not(.active) {
        background-color: #5a3000;
        color: white;
      }

    
      .button {
        background-color: Black; /* Green */
        border: none;
        color: white;
        
        text-align: center;
        text-decoration: none;
        display: inline-block;
        transition-duration: 0.4s;
        cursor: pointer;
        }

        .button1 {
        background-color: white; 
        color: black; 
        border: 2px solid Block;
        }

        .button1:hover {
        background-color: Gray;
        color: white;
        Border: 1px solid Black;
        }

</style>

<body>

    </style>
    <head>
      <link rel="stylesheet" href="header.css">
    </head>
    <body>
    
    <ul>
      <li><a class="active" href="Customer.php">Customer Orders</a></li>
      <li><a href="Billing.php">Billing</a></li>
      <li><a href="inventory.php">Inventory/Stocks</a></li>
      <li><a href="Overall.php">Overall</a></li>
      <li><a href="SignUp.php">Sign up</a></li>
      <li><a href="Login.php">Login</a></li>
      <li><a href="ForgotPassword.php">Forgot Password</a></li>

    </ul>

    <div class="RightSide">


<p style="padding: 0; margin-bottom: 0.2%">Admin Dashboard</p>

<table style="width:100%; ">
    <th style="float:left; margin-left:0.2%; border:0; margin-top: 0.2%">Customer Orders Table</th>
    <th style="float:right; border: 0; margin-top: 0.2%"><input style="font-size: 109%;" type="text" placeholder="Search.."></th>
</table>

<div class="InfoTable">
<table style="width:100%;">
  <tr>
    <th>Order ID</th>
    <th>User ID</th>
    <th>Product Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Discount</th>
    <th>Total Price</th>
    <th>Shipping Fee</th>
    <th>Order Date</th>
    <th>Order Status</th>
    <th>Actions</th>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">
        <button class="button button1" >View</button>
        <button class="button button1" >Update</button>
        <button class="button button1" >Delete</button>
    </td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">
        <button class="button button1" >View</button>
        <button class="button button1" >Update</button>
        <button class="button button1" >Delete</button>
    </td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">
        <button class="button button1" >View</button>
        <button class="button button1" >Update</button>
        <button class="button button1" >Delete</button>
    </td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">
        <button class="button button1" >View</button>
        <button class="button button1" >Update</button>
        <button class="button button1" >Delete</button>
    </td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">
        <button class="button button1" >View</button>
        <button class="button button1" >Update</button>
        <button class="button button1" >Delete</button>
    </td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">
        <button class="button button1" >View</button>
        <button class="button button1" >Update</button>
        <button class="button button1" >Delete</button>
    </td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">
        <button class="button button1" >View</button>
        <button class="button button1" >Update</button>
        <button class="button button1" >Delete</button>
    </td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">
        <button class="button button1" >View</button>
        <button class="button button1" >Update</button>
        <button class="button button1" >Delete</button>
    </td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">
        <button class="button button1" >View</button>
        <button class="button button1" >Update</button>
        <button class="button button1" >Delete</button>
    </td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">
        <button class="button button1" >View</button>
        <button class="button button1" >Update</button>
        <button class="button button1" >Delete</button>
    </td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">
        <button class="button button1" >View</button>
        <button class="button button1" >Update</button>
        <button class="button button1" >Delete</button>
    </td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">
        <button class="button button1" >View</button>
        <button class="button button1" >Update</button>
        <button class="button button1" >Delete</button>
    </td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">
        <button class="button button1" >View</button>
        <button class="button button1" >Update</button>
        <button class="button button1" >Delete</button>
    </td>
  </tr>
</table>

</body>
</html>
