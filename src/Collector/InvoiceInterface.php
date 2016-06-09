<?php

namespace Collector;

/**
 * Interface InvoiceInterface
 * @package Collector
 */
interface InvoiceInterface
{

    public function addInvoice(\Collector\Data\Invoice $invoice);

    public function activateInvoice();

    public function adjustInvoice();

    public function cancelInvoice();

    public function creditInvoice(\Collector\Data\DateTime $creditDate = null);

    public function extendDueDate();

    public function partActivateInvoice(array $articleList);

    public function partCreditInvoice(array $articleList, \Collector\Data\DateTime $creditDate = null);

    public function replaceInvoice(array $invoiceRows);

    public function sendInvoice($invoiceDeliveryMethod, $email = null);

    public function setInvoiceNo($invoiceNo);
}
