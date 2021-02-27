<?php
require('config.php');
require('includes/dbconnect.php');
require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//

$customer_name = $_POST['CUSTOMER_NAME'];
$customer_email = $_POST['CUSTOMER_EMAIL'];

$customer_mobile = $_POST['CUSTOMER_MOBILE'];

$actual_cust_email = $_SESSION['email'];

$v = $_GET['v'];
$_SESSION['v'] = $v;

if(in_array($v, array('ceo','swades'), true) ){
  $orderData = [
      'receipt'         => 3456,
      'amount'          => 100 * 100, // rupees to paise
      'currency'        => 'INR',
      'payment_capture' => 1 // auto capture
  ];
}elseif(in_array($v, array('war_of_worlds','bizquiz','adventure'), true) ){
  $orderData = [
      'receipt'         => 3456,
      'amount'          => 50 * 100, // rupees to paise
      'currency'        => 'INR',
      'payment_capture' => 1 // auto capture
  ];
}elseif($v == 'wallstreet'){
  if(isset($_POST['paybasic'])) {
    $_SESSION['tier'] = 'basic';
    $orderData = [
        'receipt'         => 3456,
        'amount'          => 75 * 100, // rupees to paise
        'currency'        => 'INR',
        'payment_capture' => 1 // auto capture
    ];
  }elseif(isset($_POST['payadvanced'])) {
    $_SESSION['tier'] = 'advanced';
    $orderData = [
        'receipt'         => 3456,
        'amount'          => 200 * 100, // rupees to paise
        'currency'        => 'INR',
        'payment_capture' => 1 // auto capture
    ];
  }
}


$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}


$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "E-Cell VNIT, Nagpur",
    "description"       => $v." Enrollment Fee",
    "image"             => "https://i.imgur.com/byxLZHm.png",
    "prefill"           => [
    "name"              => $customer_name,
    "email"             => $customer_email,
    "contact"           => $customer_mobile,
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);
?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<form action="verify-pay.php?e=<?php echo $v ?> method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="3456"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="3456">
</form>


<script type="text/javascript">
    $(document).ready(function(){
        $('.razorpay-payment-button').click();
    });
</script>
