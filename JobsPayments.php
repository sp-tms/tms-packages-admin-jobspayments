<?php

namespace Apps\Tms\Packages\Jobs\Payments;

use System\Base\BasePackage;

class JobsPayments extends BasePackage
{
    //protected $modelToUse = ::class;

    protected $packageName = 'jobspayments';

    public $jobspayments;

    public function getJobsPaymentsById($id)
    {
        $jobspayments = $this->getById($id);

        if ($jobspayments) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function addJobsPayments($data)
    {
        //
    }

    public function updateJobsPayments($data)
    {
        $jobspayments = $this->getById($id);

        if ($jobspayments) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function removeJobsPayments($data)
    {
        $jobspayments = $this->getById($id);

        if ($jobspayments) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }
}