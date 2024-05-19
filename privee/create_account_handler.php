<?php
require_once '../classes/based.php';
require_once '../classes/CompteBancaire.php';

$client_id = $_POST['client_id'];
$account_number = $_POST['account_number'];
$initial_balance = $_POST['initial_balance'];

$response = [];

if (CompteBancaire::createCompte($conn, $account_number, $initial_balance, $client_id)) {
    $response['success'] = true;
    $response['message'] = 'Compte cree avec success!';
} else {
    $response['success'] = false;
    $response['message'] = 'compte non cree.';
}

echo json_encode($response);
