<?php

namespace App\Http\Controllers;

use App\Http\Helpers\DataTable;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        $dataTable = new DataTable();
        $dataTable->columns = [
          ['data' => 'IssueDate', 'title' => __('Data wystawienia'), 'width' => 140],
          ['data' => 'InvoiceType', 'title' => __('Typ faktury'), 'width' => 120],
          ['data' => 'Signature', 'title' => __('Sygnatura')],
          ['data' => 'Buyer', 'title' => __('Kontrahent')],
          ['data' => 'Net', 'title' => __('Netto')],
          ['data' => 'Gross', 'title' => __('Brutto')],
        ];
        $dataTable->data = [];

        return view('pages.invoices.index', [
          'dataTable' => $dataTable
        ]);
    }
}
