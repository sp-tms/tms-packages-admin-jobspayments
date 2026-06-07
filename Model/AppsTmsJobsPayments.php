<?php

namespace Apps\Tms\Packages\Jobs\Payments\Model;

use System\Base\BaseModel;

class AppsTmsJobsPayments extends BaseModel
{
    public $id;

    public $lr_id;

    public $payment_method;

    public $date;

    public $cheque_no;

    public $tx_no;

    public $bank_name;

    public $amount;

    public $status;

    public $payment_notes;
}