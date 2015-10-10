<?php
/**
 * AccountRightV2 API class
 *
 * Development Center AccountRight Live API v2: http://developer.myob.com/api/accountright/v2/
 * 
 * THIS CLASS IS NOT IN ANY WAY AFFILIATED WITH MYOB OR ACCOUNTRIGHT
 *
 * @author Leigh Morrow <https://github.com/melbwebdesigns>
 * @version 1.0
 *
 */

require_once('authorise.php');

$items = $accountRight->GetItem();
$item = $accountRight->GetItem('$filter=Number+eq+\'TESTSKU\'');
$company = $accountRight->Company();
// $contact = $accountRight->Contact('$filter=UID+eq+guid\'5bb643a6-24b1-4f2d-8f06-fdc52d0ab228\'');
// $contact = $accountRight->Contact('$filter=DisplayID+eq+\'CUS000001\'');
$contact = $accountRight->Contact();
$contactCustomer = $accountRight->ContactCustomer();
$invoice = $accountRight->SaleInvoice();

echo '<pre>';

print_r($item);
// print_r($company);
// print_r($contact);
// print_r($contactCustomer);
// print_r($invoice);

/*
// Add a new contact
$json = array(
	'LastName' => 'Doe',
	'FirstName' => 'John',
	'IsIndividual' => 'True',
	'SellingDetails' => array(
		'TaxCode' => array(
			'UID' => 'de12fa93-362b-4f40-bb32-88293f2ea6a2'
		),
		'FreightTaxCode' => array(
			'UID' => 'de12fa93-362b-4f40-bb32-88293f2ea6a2'
		)
	)
);

$contactCustomer = $accountRight->ContactCustomer($json);
echo '<h1>Contact UID: '.$accountRight->getLocation().'</h1>';
*/

/*
$currentDate = new \DateTime('NOW', new \DateTimeZone('Australia/Melbourne'));

$json = array(
	'Date' => $currentDate->format('Y-m-d\TH:i:s'),
	'Customer' => array(
		'UID' => 'd4c1dca1-3257-4870-8e99-22eb3fac8388'
	),
	'Lines' => array(
		array(
			'ShipQuantity' => 1,
			'Total' => 12345.65,
			'Item' => array(
				'UID' => 'c85ef471-9630-4e2e-b8e5-79698b4d176b'
			),
			'TaxCode' => array(
				'UID' => 'de12fa93-362b-4f40-bb32-88293f2ea6a2'
			)
		)
	)        
);

$invoice = $accountRight->PostSaleInvoiceItem($json);

echo '<pre>';
echo '<h1>Invoice UID: '.$accountRight->getLocation().'</h1>';
print_r($invoice);
*/
