<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HotCat</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  body {
    background: rgba(255, 255, 255, 0.4);
}

.textFldPanes {
    box-shadow: rgba(0, 0, 0, 0.3) 0 19px 38px, rgba(0, 0, 0, 0.22) 0 15px 12px;    border-radius: 8px;
}

.txtFld{
    box-shadow: rgba(0, 0, 0, 0.3) 0 19px 38px, rgba(0, 0, 0, 0.22) 0 15px 12px;    border-radius: 8px;
}

.searchFld:hover{
    box-shadow: rgba(0, 0, 0, 0.3) 0 19px 38px, rgba(0, 0, 0, 0.22) 0 15px 12px;    border-radius: 8px;

}

.sccHeadingBar{
    box-shadow: rgba(50, 50, 93, 0.25) 0 50px 100px -20px, rgba(0, 0, 0, 0.3) 0 30px 60px -30px, rgba(10, 37, 64, 0.35) 0 -2px 6px 0 inset;
}

.mainLoader {
    border-radius: 20px;
    background: rgb(255, 255, 255);
    box-shadow: rgba(0, 0, 0, 0.25) 0 14px 28px, rgba(0, 0, 0, 0.22) 0 10px 10px;
}

.tableHead{
    border-radius: 8px !important;
}

.classTbl{
    border-radius: 8px;
    box-shadow: rgba(50, 50, 93, 0.25) 0 30px 60px -12px, rgba(0, 0, 0, 0.3) 0 18px 36px -18px;
}

.btnBackGround{
    box-shadow: rgba(0, 0, 0, 0.25) 0 14px 28px, rgba(0, 0, 0, 0.22) 0 10px 10px;
}

.formBackGround{
    background: #ffffff;
    box-shadow: rgba(0, 0, 0, 0.25) 0 14px 28px, rgba(0, 0, 0, 0.22) 0 10px 10px;
}

.purchaceBtn:hover{
    background-color: #3CCF4E;
    color: white;
}
  </style>

<body>
<section class="container-fluid " id="customerForm" >

    <section class="row mt-0  justify-content-around" style="margin-right: 0; margin-left: 0">
        <div class="col-12 col-md-5 mt-5">
            <div class="pt-3 pb-5 px-3 py-3 mt-2 mainLoader">

                <!-- manage customer label setup -->
                <h1 class="h1 mb-3" style="font-family: 'Kanit', sans-serif;color: #2a6407; font-weight: bold ">Manage
                    Customer</h1>
                <div class="mb-3">

                    <!-- search text label -->
                    <label class="form-label" for="srcCustomerId" style="color: #3fd518; font-weight: bold">Search
                        Customer</label>

                    <!-- text field set up -->
                    <input class="searchFld form-control " id="srcCustomerId" placeholder="Customer ID" type="text">

                </div>
                <!-- adding buttons for customer managements -->

         
                <!-- update button -->
                <button class="btn btnBackGround m-lg-2 bg-info bg-gradient" id="updateCustomerBtn"
                        style=" color: black;font-weight: bold;"
                        type="button">Search Customer
                </button>
            </div>
        </div>

        <!-- customer details form -->
        <div class="col-12 col-md-6 mt-4 textFldPanes bg-body-secondary mainLoader">

            <!-- customer ID set up -->
            <div class="mb-3">
                <label class="form-label" for="cusIdTxt" style="font-weight: bolder">Customer ID</label>
                <input class="searchFld form-control"  id="cusIdTxt" placeholder="Customer ID" type="text">
                <p><small class="text-danger fw-bold" id="customerIdLbl"></small></p>
            </div>

            <!-- customer Name set up -->
            <div class="mb-3">
                <label class="form-label" for="cusNameTxt" style="font-weight: bolder">Customer Name</label>
                <input class="form-control" id="cusNameTxt" placeholder="Customer Name" type="text">
                <p><small class="text-danger fw-bold" id="customerNameLbl"></small></p>
            </div>

            <!-- customer Address set up -->
            <div class="mb-3">
                <label class="form-label" for="cusAddressTxt" style="font-weight: bolder">Customer Address</label>
                <input class="form-control" id="cusAddressTxt" placeholder="Customer Address" type="text">
                <p><small class="text-danger fw-bold" id="customerAddressLbl"></small></p>
            </div>

            <!-- customer Salary set up -->
            <div class="">
                <label class="form-label" for="cusContactTxt" style="font-weight: bolder">Contact</label>
                <input class="form-control" id="cusContactTxt" placeholder="Customer Tp" type="text">
                <p><small class="text-danger fw-bold" id="CustomerContactLbl"></small></p>
            </div>

            <!-- add button -->
            <button class="btn btnBackGround m-lg-2" id="addCustomerBtn"
                        style="background-color: #2ed573; color: black;font-weight: bold;"
                        type="button">Add Customer
                </button>
                <!-- update button -->
                <button class="btn btnBackGround m-lg-2" id="updateCustomerBtn"
                        style="background-color: #eccc68; color: black;font-weight: bold;"
                        type="button">Update Customer
                </button>
                <!-- delete button -->
                <button class="btn btnBackGround m-lg-2 mb-3" id="deleteCustomerBtn"
                        style="background-color: #ff4757; color: black;font-weight: bold;"
                        type="button">Delete Customer
                </button>
        </div>

    </section>

    <!-- table management starts -->
    <section class="row justify-content-center w-100 mt-3">
        <div class="col" style="padding-left: 2rem">
            <!-- table container set up -->
            <table class="table table-hover container-fluid classTbl">

                <!-- table heading -->
                <thead class="bg-dark text-white tableHead">

                <tr class="bg-dark text-white">
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Customer Address</th>
                    <th>Contact</th>
                </tr>
                </thead>

                <!-- table body set up -->
                <tbody id="customerTableBody">
                     
                </tbody>


            </table>

        </div>
    </section>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>