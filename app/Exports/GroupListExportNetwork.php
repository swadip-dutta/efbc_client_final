<?php

namespace App\Exports;

use App\Models\GroupList;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class GroupListExportNetwork implements FromView
{
  public function view(): View
  {
      return view('exports.invoices', [
          'grouplist' => GroupList::where('category_id', 3)->get()
      ]);
  }
}
