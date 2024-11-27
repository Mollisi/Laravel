@section('content')
<form method="post" action="purchase-store" class="container space-y-5 m-auto flex flex-col">
    <label class="grid"> 
Invoice number
    <input type="text" name="invoice_number">

    </label>
    <label class="grid"> 
        Transaction Number 
    <input type="text" name="transaction_number">
    </label>

    <label class="grid"> 
        Amount
    <input type="text" name="amount">
    </label>

    <label class="grid"> 
        Currency
    <input type="text" name="Currency">
    </label>

    <label class="grid"> 
        Product Name
    <input type="text" name="Product_name">
    </label>
   <button type="submit">Submit</button>
</form>
