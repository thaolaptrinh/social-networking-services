<?php

use App\Core\Controller;

class Payment extends Controller
{
  public $model;
  public $data = [];


  function index()
  {
    # code...

    $this->model = $this->model('PaymentModel');



    switch (isset($_GET['action']) ? $_GET['action'] : '') {

      case 'invoice':

        $payment_detail = $this->model->get_row(
          "SELECT 
            `payments`.`payment_code`,
            `payments`.`payment_amount`,
            `bank_accounts`.`account_name`,
            `bank_accounts`.`account_number`,
            `payment_methods`.`method_name`,
            `payment_methods`.`method_type`
            FROM `payments` 
            INNER JOIN `payment_methods` ON `payment_methods`.`method_id` = `payments`.`payment_method`
            INNER JOIN `bank_accounts` ON `payment_methods`.`method_id` = `bank_accounts`.`method_id`
            WHERE `payments`.`payment_code` = '" . (isset($_GET['code'])
            ? $_GET['code']
            : ' ') . "'"
        );

        if ($payment_detail) {

          $this->model->index();

          $qr_code = '';

          switch ($payment_detail['method_type']) {
            case 'momo':
              $title = 'Sử dụng <b> App Momo </b> hoặc ứng dụng camera hỗ trợ QR code để quét mã';
              $qr_code = 'https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=2|99|' .
                $payment_detail['account_number'] .
                '|||0|0|' .  $payment_detail['payment_amount'] . '|' . $payment_detail['payment_code'] . '|transfer_myqr';

              break;

            case 'mb':
              $title = 'Sử dụng <b> App Internet Banking </b> hoặc ứng dụng camera hỗ trợ QR code để quét mã';
              $qr_code = 'https://api.vietqr.io/MB/' . $payment_detail['account_number'] . '/' .
                $payment_detail['payment_amount']
                . '/' . $payment_detail['payment_code'] . '/vietqr_net_2.jpg?accountName=' . $payment_detail['account_name'];
              break;

            default:
          }

          $payment_detail['qr_code'] = $qr_code;
          $payment_detail['title'] = $title;
          $payment_detail['payment_amount'] = number_format($payment_detail['payment_amount'], 0, '.', ',') . 'đ';

          $this->data = $payment_detail;

          $this->data  = array_merge($this->data, $this->model->data);
          $this->render('layouts/payment', $this->data);
        } else {
          header('location: ' . BASE_URL('balance'));
        }

        break;

      case 'status':
        $payment_status = $this->model->get_row(
          "SELECT 
            `payments`.`payment_status`
            FROM `payments` 
            WHERE `payments`.`payment_code` = '" . (isset($_GET['code'])
            ? $_GET['code']
            : ' ') . "'"
        )['payment_status'];


        $return = ($payment_status == 'Success')  ? 1 : 0;

        die(json_encode(['status' => $payment_status, 'return' => $return]));

        break;

      default:
        header('location: ' . BASE_URL('balance'));
    }
  }
}
