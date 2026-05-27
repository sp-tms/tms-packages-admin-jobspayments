<?php

namespace Apps\Tms\Packages\Jobs\Payments;

use Apps\Tms\Packages\Jobs\Payments\Model\AppsTmsJobsPayments;
use System\Base\BasePackage;

class JobsPayments extends BasePackage
{
    protected $modelToUse = AppsTmsJobsPayments::class;

    protected $packageName = 'payments';

    public $payments;

    public function init()
    {
        parent::init();

        return $this;
    }

    public function addPayment($data)
    {
        //
    }

    public function updatePayment($data)
    {
        //
    }

    public function removePayment($data)
    {
        //
    }
}